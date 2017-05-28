<?php include_once "utility/_kohd.php"; ?>

<?php
    // Define variables for SEO
    $pageTitle = 'Error404';
    $pageCanonical = 'http://www.kohd.co/404.php'; 
?>

<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>
        <?php RenderPageHeader(MENUITEM_INDEX); ?>
        <?php RenderPageTitle("Well, this is embarrassing..."); ?>
		
        <div class="section">
	    	<div class="container">
				<div class="row shake-on-hover">
					<div class="col-sm-6">
						<h3 class="emphasis1">404 Error</h3>
						<h3><!--Software Development sub-title--></h3>
						<p>
                            Sorry, that page appears to not exist.  It may exist on a different website, but sadly, not on this one :(
						</p>
					</div>
					<div class="col-sm-6">
						<p class="text-right extra-margin">
					 		<img class="bordered img-responsive" src="img/404.png">
						</p>
					</div>
				</div>
			</div>
		</div>


	    <!-- Footer -->
        <?php RenderFooter(); ?> 

        <!-- Javascripts -->
        <?php RenderCommonJavascriptIncludes() ?>
		
        <?php RenderBackToTopWidget(); ?>
    </body>
</html>