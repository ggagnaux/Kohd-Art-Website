<?php include_once "utility/_kohd.php"; ?>

<?php
    // Define variables for SEO
    $pageTitle = 'Services';
    $pageCanonical = 'http://www.kohd.co/services.php'; 
?>

<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>
        <?php RenderPageHeader(MENUITEM_SERVICES); ?>
        <?php RenderPageTitle("Our Services"); ?>
		
        <div class="section" id="software">
	    	<div class="container has-separator highlight-on-hover">
				<div class="row">
					<div class="col-sm-6">
						<h3 class="emphasis1">Software Development</h3>
						<h3><!--Software Development sub-title--></h3>
						<p>
                            We have 15+ years’ experience developing software in a variety of problem domains:
							<ul>
								<li>Insurance Services</li>
								<li>Multimedia Applications</li>
								<li>Game Development</li>
								<li>Customer Relationship Management Systems</li>
								<li>Scientific Microscopy Workflow Systems</li>
							</ul>
						</p>
						<p>
							Our competencies include the following technologies:						
							<ul>
								<li>ASP.NET</li>
								<li>C#</li>
								<li>Entity Framework</li>
								<li>Javascript</li>
								<li>HTML/CSS</li>
								<li>SQL Server</li>
							</ul>
						</p>
					</div>
					<div class="col-sm-6">
						<p class="text-right extra-margin">
					 		<img class="bordered img-responsive" src="img/technologies/technologies.png">
						</p>
					</div>
				</div>
			</div>
		</div>

        <div class="section" id="database">
	    	<div class="container has-separator highlight-on-hover">
				<div class="row">
					<div class="col-sm-6">
						<h3 class="emphasis2">Database Design &amp; Development</h3>
						<h3><!--Database sub-title--></h3>
						<p>
							In addition to our experience developing software, we are also experienced in database design, development and administration.
						</p>
						<p>
							We have worked extensively with Microsoft SQL Server and to a lesser extent, Oracle and Microsoft Access.
						</p>
					</div>
					<div class="col-sm-6">
						<p class="text-right extra-margin">
							<img class="bordered img-responsive" src="img/technologies/dbms.png" alt="img05">
						</p>
					</div>
				</div>
			</div>
		</div>

        <div class="section" id="photography">
	    	<div class="container has-separator highlight-on-hover">
				<div class="row">
					<div class="col-sm-6">
						<h3 class="emphasis3">Photography</h3>
						<h3><!--Photography sub-title--></h3>
						<p>
							We have over five years experience in commercial photography.  Our specialties are portraiture and product photography.
							We are equally at home shooting in studio or on location and utilize the latest gear and photographic techniques to 
							ensure your project is executed to your exact specifications!&nbsp;To view examples of our work, click on the button below!
						</p>
						<p>
							<a class="btn btn-md animation animated-item-3" target="_new" href="<?php echo(VGFOTOURL); ?>">
							Go to site&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip" title="<?php echo(VGFOTONAME); ?>"></i>
							</a>
						</p>
					</div>
					<div class="col-sm-6">
						<p class="text-right extra-margin">
							<img class="bordered img-responsive" src="img/technologies/photography.png" alt="img05">
						</p>
					</div>
				</div>
			</div>
		</div>
		

        <div class="section" id="retouching">
	    	<div class="container has-separator highlight-on-hover">
				<div class="row">
					<div class="col-sm-6">
						<h3 class="emphasis4">Retouching | Post-Production</h3>
						<h3><!--Retouching sub-title--></h3>
						<p>
							In addition to our photographic experience, we also are very skilled in the art of photo retouching and post production!  
						Our primary tool for this task is Adobe Photoshop.&nbsp;To view examples of our work, click on the button below!
						</p>
						<p>
							<a class="btn btn-md animation animated-item-3" target="_new" href="<?php echo(VGFOTOURL); ?>">
							Go to site&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip" title="<?php echo(VGFOTONAME); ?>"></i>
							</a>
						</p>
					</div>
					<div class="col-sm-6">
						<p class="text-right extra-margin">
							<img class="bordered img-responsive"" src="img/technologies/retouching.png" alt="img05">
						</p>
					</div>
				</div>
			</div>
		</div>

        <div class="section" id="illustration">
	    	<div class="container has-separator highlight-on-hover">
				<div class="row">
					<div class="col-sm-6">
						<h3 class="emphasis5">Illustration | Digital Art</h3>
						<h3><!-- Sub-title --></h3>
						<p>
							When we're not working on client projects it's a pretty safe bet that were exercising 
							our creative muscles creating illustrations and other digital-art.&nbsp;We utilize both Adobe Photoshop and Illustrator.&nbsp;To view examples of our work, click on the button below!
						</p>
						<p>
							<a class="btn btn-md animation animated-item-3" target="_new" href="<?php echo(VGFOTOURL); ?>">
							Go to site&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip" title="<?php echo(VGFOTONAME); ?>"></i>
							</a>
						</p>
					</div>
					<div class="col-sm-6">
						<p class="text-right extra-margin">
							<img class="bordered img-responsive" src="img/technologies/illustrations.png" alt="img05">
						</p>
					</div>
				</div>
			</div>
		</div>

	    <!-- Footer -->
        <?php RenderFooter(); ?> 

        <!-- Javascripts -->
        <?php RenderCommonJavascriptIncludes() ?>
		
		<script>
			//BuildMainMenu("#mainmenucontainer", "services");
		</script>

        <?php RenderBackToTopWidget(); ?>
    </body>
</html>