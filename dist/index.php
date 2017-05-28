<?php 
    include_once "utility/_kohd.php";

    // Define variables for SEO
    $pageTitle = 'Home';
    $pageCanonical = 'http://www.kohd.co/';
?>
<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>

        <?php if (RELEASE == false) { ?>
        <!--<div class="development-indicator-window">Development</div>-->
        <?php } ?>
        
        <?php RenderPageHeader(MENUITEM_INDEX); ?>
        <?php RenderCarousel("main-slider", CAROUSELDELAY); ?>
        <?php //RenderCallToActionBar(); ?>
        <?php RenderServices(); ?>
        <?php //RenderClients(); ?>


        <!-- Footer -->
        <?php RenderFooter() ?>

        <?php RenderCommonJavascriptIncludes() ?> 

        <script tgype="text/javascript">
            //BuildMainMenu("#mainmenucontainer", "index");
        </script>
        
        <?php RenderBackToTopWidget() ?>
    </body>
</html>