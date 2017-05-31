<?php include_once "utility/_kohd.php"; ?>

<?php
    // Define variables for SEO
    $pageTitle = 'Portfolio';
    $pageCanonical = 'http://www.kohd.co/portfolio.php'; 

    // TODO - Randomize hover transitions
    $transitionEffect = 'effect-4';
?>

<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>
        <?php RenderPageHeader(MENUITEM_PORTFOLIO); ?>
        <?php RenderPageTitle("A sampling of our portfolio"); ?>
        
        <div class="section">
            <div id="<?php echo $transitionEffect; ?>" class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div style="text-align: left;">
                            <h3>Software Development</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--<ul class="grid cs-style-3">-->
                    <ul class="grid">
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="img/portfolio/external.jpg" alt="img05">
                                <figcaption>
                                    <h3>Web Dev/Project Management</h3>
                                    <span>Various</span>
                                    <a class="btn btn-md animation" href="portfolio-item.php?id=0">Details</a>
                                    <a href="#" class="close-caption hidden">x</a>
                                </figcaption>
                            </figure>
                        </div>	
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="img/portfolio/justwoodies.jpg" alt="img04">
                                <figcaption>
                                    <h3>Web Development</h3>
                                    <span>Just Woodies</span>
                                    <a class="btn btn-md animation gvg" href="portfolio-item.php?id=1">Details</a>
                                    <a href="#" class="close-caption hidden">x</a>
                                </figcaption>
                            </figure>
                        </div>	
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="img/portfolio/mediatransferutility.jpg" alt="img01">
                                <figcaption>
                                    <h3>Application Development</h3>
                                    <span>Media Transfer Utility</span>
                                    <a class="btn btn-md animation" href="portfolio-item.php?id=2">Details</a>
                                    <a href="#" class="close-caption hidden">x</a>
                                </figcaption>
                            </figure>
                        </div>
                    </ul>
                </div> 
                <div class="row">
                    <!--<ul class="grid cs-style-3">-->
                    <ul class="grid">
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="img/portfolio/skylinevisualizer.jpg" alt="img01">
                                <figcaption>
                                    <h3>Application Development</h3>
                                    <span>Skyline Problem Visualizer</span>
                                    <a class="btn btn-md animation" href="portfolio-item.php?id=6">Details</a>
                                    <a href="#" class="close-caption hidden">x</a>
                                </figcaption>
                            </figure>
                        </div>
                    </ul>
                </div> 
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div style="text-align: left;">
                            <h3>Creative Services</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--<ul class="grid cs-style-3">-->
                    <ul class="grid">
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="img/portfolio/gibsonguitars.jpg" alt="img02">
                                <figcaption>
                                    <h3>Product Photography</h3>
                                    <span>Chris Latvala</span>
                                    <a class="btn btn-md animation" href="portfolio-item.php?id=3">Details</a>
                                    <a href="#" class="close-caption hidden">x</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="img/portfolio/model1.jpg" alt="img05">
                                <figcaption>
                                    <h3>Portraiture</h3>
                                    <span>Various</span>
                                    <a class="btn btn-md animation" href="portfolio-item.php?id=4">Details</a>
                                    <a href="#" class="close-caption hidden">x</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="img/portfolio/illustration.jpg" alt="img03">
                                <figcaption>
                                    <h3>Illustration | Digital Art</h3>
                                    <span>Self-Assigned Project</span>
                                    <a class="btn btn-md animation" href="portfolio-item.php?id=5">Details</a>
                                    <a href="#" class="close-caption hidden">x</a>
                            </figure>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php RenderFooter(); ?> 

        <!-- Javascripts -->
        <?php RenderCommonJavascriptIncludes(); ?>

        <script type="text/javascript">
            //BuildMainMenu("#mainmenucontainer", "portfolio");
        </script>

        <?php RenderBackToTopWidget(); ?>
    </body>
</html>