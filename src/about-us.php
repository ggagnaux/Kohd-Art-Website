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
                        <p>
                           <span class="emphasis1">Kohd&nbsp;&amp;&nbsp;Art</span> (pronounced 'Code and Art') is the software development and creative services company of Greg Gagnaux, based in Vancouver, BC.
                        </p>
                        <p>
                           We specialize in creating web applications for businesses and individuals.  Kohd & Art was founded to combine the software development and photographic skills of our founder.
                        </p>
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
                        <!-- <p>
                            He can be found at his website <a href="http://www.gvg.io" target="_new">www.gvg.io</a>&nbsp;<i class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip" title="External link..."></i>
                            and on the following social media sites:
                        </p> -->
                        <p>
                            He can be found on the following social media sites:
                        </p>
                        <br>
                        <p>
                            <a href="<?php echo SOCIAL_TWITTER_GGAGNAUX; ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="true">Follow @ggagnaux</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <a class="social-media" href="<?php echo SOCIAL_GITHUB_GGAGNAUX; ?>" target="_new" data-toggle="tooltip" title="Github"><i class="fa fa-github fa-2x"></i></a>
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
