<?php 
    date_default_timezone_set('Etc/UTC');
    include_once "utility/_kohd.php"; 
    require 'PHPMailer/PHPMailerAutoload.php';
?>

<?php
    // Define variables for SEO
    $pageTitle = 'Contact Us';
    $pageCanonical = 'http://www.kohd.co/contact-us.php'; 
?>

<?php
    //echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; 

    $showForm = true;
    $pageHeader = 'Send us a message!';

    // Declare variables
    $resultMessage = "";
    $successMessage = "Thank's [NAME]!<br/>Your message has been sent.<br/>We'll get back to you as soon as possible!";
    $errorMessage = 'Sorry [NAME],<br/>There was an error sending your message. Please try again later.';
    $botAnswer = 5;

    $recaptchaResponse = "";

    $errName = "";
    $errEmail = "";
    $errMessage = "";
    $errSubject = "";
    $errRecaptcha = "";

    $name = "";
    $email = "";
    $message = "";
    $subject = "";
    $subjectPrefix = COMPANYNAME_NOHTML." - Information Request - ";


    if (isset($_POST["submit"])) {

        //
        // Get the form information
        //
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        $from = 'Demo Contact Form'; 
        $to = 'example@domain.com'; 

        //$body = "From: $name [$email]\n\n$message";

        $body = "<!DOCTYPE html>\n";
        $body .= "<html>\n";
        $body .= "<head>\n";
        $body .= "    <style>\n";
        $body .= "        body {\n";
        $body .= "            font-size: 20px;\n";
        $body .= "        }\n";
        $body .= "    </style>\n";
        $body .= "</head>\n";
        $body .= "<body>\n"; 
        $body .= $message; 
        $body .= "</body>\n"; 
        $body .= "</html>\n"; 

        /*
        $headers  = "From: My site<noreply@example.com>\r\n"; 
        $headers .= "Reply-To: info@example.com\r\n"; 
        $headers .= "Return-Path: info@example.com\r\n"; 
        $headers .= "X-Mailer: Drupal\n"; 
        $headers .= 'MIME-Version: 1.0' . "\n"; 
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        */

        if (isset($recaptchaResponse) && !empty($recaptchaResponse)) {

            //
            // Build the verification url
            //
            $secret = RECAPTCHA_SECRET_KEY;
            $verifyUrl = str_replace('[SECRETKEY]', $secret, VERIFICATION_URL);
            $verifyUrl = str_replace('[RESPONSE]', $recaptchaResponse, $verifyUrl); 

            //
            // get verify response data
            //
            $verifyResponse = file_get_contents($verifyUrl);
            $responseData = json_decode($verifyResponse);
            if(!$responseData->success) {
                $errRecaptcha = 'Robot verification failed, please try again.';
            }
        } else {
            $errRecaptcha = 'Please click on the \'I\'m not a robot\' box.';
        }

        // Check if name has been entered
        if (!$name) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        // Check if subject has been entered
        if (!$subject) {
            $errSubject = 'Please enter the subject';
        }
        
        // Check if message has been entered
        if (!$message) {
            $errMessage = 'Please enter your message';
        }

        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errSubject && !$errRecaptcha) {
            $mail = new PHPMailer;
            $mail->isSMTP();

            $mail->SMTPDebug = SMTP_DEBUG;

            //$mail->Debugoutput = 'html';

            // SMTP Server and Authentication Stuff
            $mail->Host = SMTP_HOST;
            $mail->Port = SMTP_PORT;
            $mail->SMTPSecure = SMTP_SECURE;
            $mail->SMTPAuth = SMTP_AUTH;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;

            // Formatting
            //$mail->ContentType = 'text/plain';
            $mail->IsHTML(true);

            // Details 
            $mail->setFrom($email, $name);
            $mail->addReplyTo($email, $name);
            $mail->addAddress(SMTP_ADDRESSEMAIL, SMTP_ADDRESSNAME);
            $mail->Subject = $subjectPrefix.$subject;
            $mail->Body = $body;

            if (!$mail->send()) {
                // Error
                $errorMessage = str_replace("[NAME]", $name, $errorMessage);
                $resultMessage = $errorMessage;
                $result = false;
                //$result = "<div class=\"alert alert-danger\">$errorMessage</div>";

                echo "Mailer Error: ".$mail->ErrorInfo;
            } else {
                // Success
                $successMessage = str_replace("[NAME]", $name, $successMessage);
                $resultMessage = $successMessage;
                $result = true;
                $showForm = false;
                $pageHeader = "Message Sent!";
                //$result = "<div class=\"alert alert-success\">$successMessage</div>";
            }
        } else {
            $result = false;
            $resultMessage = 'Sorry, there are errors in the form.';

        }
    }
?>

<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>
        <?php RenderPageHeader(MENUITEM_CONTACT); ?>
        <?php RenderPageTitle("Contact Us"); ?>
        
        <div class="section">
            <div class="container" id="contactform">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="page-header text-left"><?php echo $pageHeader; ?></h1>
                        <form class="form-vertical" role="form" method="post" action="contact-us.php">

                            <?php if ($resultMessage) { ?>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="alert alert-<?php if ($result) { ?>success<?php } else { ?>danger<?php } ?>">
                                        <?php echo $resultMessage; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if ($showForm) { ?>
                            <div class="form-group<?php if ($errName) { ?> has-error<?php } ?>">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"  
                                    placeholder="<?php if ($errName) { ?>Please enter your name<?php } else { ?>First & Last Name<?php } ?>"
                                    value="<?php echo htmlspecialchars($name); ?>">
                                    <?php echo "<p class='text-danger'></p>";?>
                                </div>
                            </div>
                            <div class="form-group<?php if ($errEmail) { ?> has-error<?php } ?>">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" 
                                    placeholder="<?php if ($errEmail) { ?>Please enter a valid email address<?php } else { ?>example@domain.com<?php } ?>"
                                    value="<?php echo htmlspecialchars($email); ?>">
                                    <p class='text-danger'></p>
                                </div>
                            </div>
                            <div class="form-group<?php if ($errSubject) { ?> has-error<?php } ?>">
                                <label for="subject" class="col-sm-2 control-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="subject" name="subject" 
                                    placeholder="<?php if ($errSubject) { ?>Please enter a subject<?php } else { ?>Enter Subject<?php } ?>"
                                    value="<?php echo htmlspecialchars($subject); ?>">
                                    <p class='text-danger'></p>
                                </div>
                            </div>
                            <div class="form-group<?php if ($errMessage) { ?> has-error<?php } ?>">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea placeholder="Type your message here!" class="form-control" rows="3" name="message"><?php echo htmlspecialchars($message);?></textarea>
                                    <p class='text-danger'></p>
                                </div>
                            </div>
                            <div class="form-group<?php if ($errRecaptcha) { ?> has-error<?php } ?>">
                                <label for="human" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <div class="g-recaptcha" data-size="normal" data-theme="dark" data-sitekey="6Ld7ByUTAAAAAH6bB6nZSfqDdZj1dmOoLJNSLHdO"></div>
                                    <p class='text-danger'><?php echo $errRecaptcha; ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                            <?php } ?>
                        </form> 
                    </div>
                </div>
            </div> 
        </div>
        <div class="section section-map">
            <div class="col-sm-12" style="padding:0;">
                <!-- Map -->
                <div id="contact-us-map"></div>
                <!-- End Map -->
            </div>
        </div>

        <!-- Footer -->
        <?php RenderFooter(); ?>

        <!-- Javascripts -->
        <script src="js/libs/jquery.min.js"></script>
        <script src="js/libs/jquery.easing.min.js"></script>
        <script src="js/libs/bootstrap.min.js"></script>
        <script src="js/scrolling-nav.js"></script>

        <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZXUc-5BHaSILmHjk-tFHavHyy5rEiaQo&sensor=false"></script>
        
        <script src="js/settings.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/backtotop.js"></script>
        <script src="js/aboutboxmodal.js"></script>

        <script src='https://www.google.com/recaptcha/api.js'></script>
        
        <script src='js/googleanalytics.js'></script>
        
        <?php RenderBackToTopWidget() ?>
    </body>
</html>