<?php 
    include_once "utility/_kohd.php";



function wpDisplayRecentPosts() {

	// How many recent posts to display?
	$postCount = 5;

	// Define our WP Query Parameters
	$the_query = new WP_Query('posts_per_page='.$postCount); 

	// Start our WP Query 
	while ($the_query -> have_posts()) : $the_query -> the_post(); 
		// Display the Post Title with Hyperlink
		$postid = $the_query->post->ID; 
?>		
		<li><a href="blog-post.php?id=<?php echo $postid;?>"><?php the_title(); ?></a></li>
		<!-- Display the Post Excerpt -->
		<!--<li><?php //the_excerpt(__('(more…)')); ?></li>-->
		<!-- Repeat the process and reset once it hits the limit -->
<?php 
	endwhile;
	wp_reset_postdata();
?>
	</ul>
<?php	
}

function wpGetPostCategories($_postId) {
	$post_categories = wp_get_post_categories($_postId);
		
	foreach($post_categories as $c){
		$cat = get_category($c);
		$cat_name = $cat->name;
		$cat_count = $cat->count;
		//$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
?>		
		<li><a href="#"><?php echo $cat_name;?></a></li>
<?php
	}	
}


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


	$postid = $_GET['id'];

	// Redirect if no post id is specified
	if (!$postid) {
		header('Location: /kohd/404.php');
	}

    $post = get_post($postid);
	$title = $post->post_title;
	$output =  apply_filters('the_content', $post->post_content);



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
						<h1>Blog Post</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2><?php echo $title; ?></h2>
							</div>
							<!--
							<div class="single-post-image">
								<img src="img/blog/1.jpg" alt="Post Title">
							</div>
							-->
							<div class="single-post-content">
								<?php echo $output; ?> 							
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>30 JAN, 2013 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
							</div>							
						</div>
					</div>
					<!-- End Blog Post -->

					<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
						<h4>Search our Blog</h4>
						<form>
							<div class="input-group">
								<input class="form-control input-md" id="appendedInputButtons" type="text">
								<span class="input-group-btn">
									<button class="btn btn-md" type="button">Search</button>
								</span>
							</div>
						</form>

						<h4>Recent Posts</h4>
						<ul class="recent-posts">
							<?php wpDisplayRecentPosts(); ?>
						</ul>

						<h4>Categories</h4>
						<ul class="blog-categories">
							<?php wpGetPostCategories($postId); ?>
						</ul>

						<h4>Archive</h4>
						<ul>
							<li><a href="#">January 2013</a></li>
							<li><a href="#">February 2013</a></li>
							<li><a href="#">March 2013</a></li>
							<li><a href="#">April 2013</a></li>
							<li><a href="#">May 2013</a></li>
						</ul>
					</div>
					<!-- End Sidebar -->
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