<?php 
    include_once "utility/_kohd.php";

	// If the blog folder doesn't exist, show 404 page.
	//if (!file_exists(FOLDER_BLOG)) {
	//	Redirect('404.php');
	//}

	//
	// Setup connection to wordpress blog
	//
	define('WP_USE_THEMES', false);
	require(FOLDER_BLOG.'/wp-blog-header.php');
	
	/*
    require_once(FOLDER_BLOG."/wp-config.php");
    $wp->init(); 
    $wp->parse_request(); 
    $wp->query_posts();
    $wp->register_globals(); 
    $wp->send_headers();
	*/

?>

<?php
/*
$number_of_posts = 5;
$args = array( 'numberposts' => $number_of_posts );
$recent_posts = wp_get_recent_posts( $args );
foreach( $recent_posts as $recent_post ) {
    echo "<span>".$recent_post['post_date']."</span> <br>";
    echo "<h3>".$recent_post['post_title']."</h3>";
    echo  "<p>".$recent_post['post_content']."</p><br><br>";
}
*/
?>



    $posts = get_posts('numberposts=10&order=ASC&orderby=post_title');

    // Define variables for SEO
    $pageTitle = 'Blog';
    $pageCanonical = 'http://www.kohd.co/'; 
?>
<?php RenderDoctypeSection(); ?>
<html lang="en">
	<head>
    	<?php RenderHTMLHeaderContents(); ?>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>
        <?php RenderPageHeader(MENUITEM_BLOG); ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our Blog</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">

<?php        
    foreach ($posts as $post) : setup_postdata( $post );

		$post_id = $post->ID;
		$post_commentcount = $post->comment_count;
		$post_title = $post->post_title;
		$post_author = $post->post_author;
		$post_date = $post->post_date;
		$post_excerpt = $post->post_excerpt;


		$imgsrc = "";
		$attachments = get_attached_media('image', $post->ID);
		foreach($attachments as $attachment) {
			$img = wp_get_attachment_image_src($attachment->ID, 'large');
			$imgsrc = $img[0];
		}


		//$attachment = $attachments[0];
		//$img = wp_get_attachment_image_src($attachment->ID, 'medium');
		//$imgsrc = $img[0];
		//$imghref = wp_get_attachment_url($attachment->ID);
?>
				<div class="row">
 
					<!-- Blog Post Excerpt -->
					<div class="col-sm-12">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2><?php echo $post_title ?></h2>
							</div>

							<div class="single-post-image">
								<img alt="<?php echo $post_title;?>" src="<?php echo $imgsrc; ?>" />
								<!--<img src="img/blog/2.jpg" alt="Post Title">-->
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i><?php echo $post_date; ?> <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i><?php echo $post_commentcount; ?></a>
							</div>
							
							<div class="single-post-content">
								<p>
								<?php echo the_excerpt(); ?> 
								</p>
							<a href="blog-post.php?id=<?php echo $post->ID?><?php //the_permalink(); ?>" class="btn">Read more</a>
							</div>
						</div>
					</div>
				</div>
					<!-- End Blog Post Excerpt -->

        <?php //the_date(); echo "<br />"; ?>
        <?php //the_title(); ?>    
        <?php //the_excerpt(); ?> 
<?php
    endforeach;
?>

								<!-- Pagination -->
								<div class="pagination-wrapper ">
									<ul class="pagination pagination-sm">
										<li class="disabled"><a href="#">Previous</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>				

				</div>
			</div>
	    </div>

        <!-- Footer -->
        <?php RenderFooter() ?> 
      
        <?php RenderCommonJavascriptIncludes() ?> 

        <script type="text/javascript">
            //BuildMainMenu("#mainmenucontainer", "blog");
        </script>
        
        <?php RenderBackToTopWidget() ?>
    </body>
</html>