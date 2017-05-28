<?php 
    include_once "utility/_kohd.php"; 
?>


<?php
    // Define variables for SEO
    $pageTitle = 'Portfolio Item';
    $pageCanonical = 'http://www.kohd.co/portfolio-item.php'; 
?>



<?php
    $projectid = 0;

    if (isset($_GET['id'])) {
        $projectid = $_GET['id'];
        if ($projectid < 0 && $projectid > 5) {
            $projectid = 0;
        }
    } else {
        // Fallback behaviour goes here
        $projectid = $_GET['id'];
    }
?>

<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>
        <?php RenderPageHeader(MENUITEM_PORTFOLIO); ?>
        <?php RenderPageTitle("Project Details"); ?>
        
        <div class="section">
            <div class="container">
                <div class="row"><?php RenderProjectDetails($projectid); ?></div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php RenderFooter(); ?>

        <!-- Javascripts -->
        <?php RenderCommonJavascriptIncludes() ?>
        
        <?php RenderBackToTopWidget() ?>
    </body>
</html>