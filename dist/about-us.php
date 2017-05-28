<?php include_once "utility/_kohd.php"; ?>

<?php
    // Define variables for SEO
    $pageTitle = 'About Us';
    $pageCanonical = 'http://www.kohd.co/about-us.php'; 
?>

<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>
        <?php RenderPageHeader(MENUITEM_ABOUT); ?>
        <?php RenderPageTitle("About"); ?>
        
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive" src="img/KohdAndArt_Logo_Transparent.png" alt="About Us">
                    </div>
                    <div class="col-sm-8">
                        <!--<h2>Software Development and Creative Services</h2>-->
                        <!--<h3>We specialize in Microsoft ASP.NET Web Application Development.</h3>-->
                        <p>
                           <span class="emphasis1">Kohd&nbsp;&amp;&nbsp;Art</span> (pronounced 'Code and Art') is the software development and creative services company of Greg Gagnaux, based in Vancouver, BC.
                        </p>
                        <p>
                           We specialize in creating web applications for businesses and individuals.  Kohd & Art was founded to combine the software development and photographic skills of our founder.
                        </p>

                           <!--  
                           We specialize in creating meaningful brands for small businesses all over the world through visual identity, website design and print design. Knoed was founded on the idea of getting back to basics—working with a handful of talented people and keeping things honest, focused and thoughtful. We're inspired by the passion in our clients and we truly care about seeing them succeed. We think hard and work harder to make experiences better, solutions smarter and brands more beautiful through wide-eyed creativity and meticulous craftsmanship.
                           -->

<!--
Branding + Identity

Branding is our specialty. There's nothing more exciting to us than conceiving a brand from a blank slate. Or wiping that slate clean and starting fresh. Whether you're new to this or have gone through it before, you'll find that our branding process is designed to eliminate the guesswork and provide clarity and confidence as your brand evolves.
 

Web + Mobile

Your website is a direct reflection of your company and how the world sees you. We create beautiful, highly functional websites that make a lasting impression. Our websites are thoughtful, interactive experiences developed through a strategic, collaborative process and detailed implementation. We design sites that are flexible enough to fit your current needs and grow with your future goals in mind.
 

Print + Packaging

Whether we're designing a brochure, catalog or retail packaging, we get excited thinking about the "what ifs." We see every project as an opportunity to do something new and interesting, and our best work is done when clients share our ambition for the attention to details. It's these details that make heads turn and your brand memorable.
-->

                        </p>
                            
                        <!--
                        <div class="clients-logo-wrapper text-center row">
                            <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-1.jpg" alt="Client Name"></a></div>
                            <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-2.jpg" alt="Client Name"></a></div>
                            <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-3.jpg" alt="Client Name"></a></div>
                            <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-4.jpg" alt="Client Name"></a></div>
                            <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-5.jpg" alt="Client Name"></a></div>
                            <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-6.jpg" alt="Client Name"></a></div>
                        </div>		
                        -->				
                    </div>
                </div>
            </div>
        </div>

        <!--<hr/>-->		

        <div class="section">
            <div class="container">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h3>Greg Gagnaux - <span class="text-muted">Founder/Director</span></h3>
                        <p>
                            Our founder, Greg, has been involved with software development for 15+ years now and photography professionally for 5+ years.
                        </p>
                        <p>
                            After graduating from BCIT with a diploma in Electronics, he embarked on his software development career.  He is predominantly a self-taught programmer, but has 
                            completed numerous courses in the discipline at BCIT, has attained a Microsoft Certified Professional designation in SQL Server and is currently working towards
                            a Microsoft Certified Solution Developer designation, specializing in Web Application development.  
                        </p>
                        <p>
                            In addition to his technical training, he has completed Langara's photography
                            diploma program which has helped provide the necessary technical skills in photography and post-production.
                        </p>
                        <p>
                            He can be found at his website <a href="http://www.gvg.io" target="_new">www.gvg.io</a>&nbsp;<i class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip" title="External link..."></i>
                            and on the following social media sites:
                        </p>
                        <br>
                        <p>
                            <a href="<?php echo SOCIAL_TWITTER_GGAGNAUX; ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="true">Follow @ggagnaux</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <a class="social-media" href="<?php echo SOCIAL_FACEBOOK_GGAGNAUX; ?>" target="_new" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a>
                            <a class="social-media" href="<?php echo SOCIAL_LINKEDIN_GGAGNAUX; ?>" target="_new" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin fa-2x"></i></a>
                            <a class="social-media" href="<?php echo SOCIAL_INSTAGRAM_GGAGNAUX; ?>" target="_new" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram fa-2x"></i></a>
                            <a class="social-media" href="<?php echo SOCIAL_BEHANCE_VGFOTO; ?>" target="_new" data-toggle="tooltip" title="Behance"><i class="fa fa-behance fa-2x"></i></a>
                        </p>

                        <!--<img class="featurette-image img-responsive lightbackground" style="max-width: 100px; margin-bottom: 10px;" data-src="holder.js/500x500/auto" src="img/team/mcp_logo.png" alt="MCP Logo">-->
                    </div>
                    <div class="col-md-5 ">
                        <img class="featurette-image img-responsive center-block bordered" data-src="holder.js/500x500/auto" src="img/team/greg.jpg" alt="Greg Gagnaux - Founder/Director">
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php RenderFooter(); ?>

        <!-- Javascripts -->
        <?php RenderCommonJavascriptIncludes(); ?>
            
        <script type="text/javascript">
            //BuildMainMenu("#mainmenucontainer", "about-us");
        </script>
            
        <?php RenderBackToTopWidget() ?>
    </body>
</html>
