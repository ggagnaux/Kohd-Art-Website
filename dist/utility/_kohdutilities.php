<?php
    function RenderDoctypeSection() {
?>        
<!DOCTYPE html>
<!--
 _  __     _         _    ___        _         _   
| |/ /___ | |__   __| |  ( _ )      / \   _ __| |_ 
| ' // _ \| '_ \ / _` |  / _ \/\   / _ \ | '__| __|
| . \ (_) | | | | (_| | | (_>  <  / ___ \| |  | |_ 
|_|\_\___/|_| |_|\__,_|  \___/\/ /_/   \_\_|   \__|

-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php        
}

    function GetWebsiteVersion() {
        $rval = "";
        if (BUILDNUMBER != "") {
            $rval = WEBSITEVERSION.'.'.BUILDNUMBER;
        } else {
            $rval = WEBSITEVERSION.' [development]';
        }
        return $rval;
    }

    function RenderHTMLHeaderContents() {
        global $pageCanonical;
        global $pageRobots;
        global $pageTitle;

        $localTitle = COMPANYNAME_NOHTML.' | '.HTMLHEADERTITLE.' | '.$pageTitle;
?>
            <meta name="google-site-verification" content="i1mjREYDBHBR-K23ey81BA_o_qmKzUyOqwP87OPACY4" />
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="<?php echo SEO_PAGEDESCRIPTION; ?>">
            <meta name="author" content="<?php echo COMPANYNAME_NOHTML.', '.AUTHOR; ?>">
            <link rel="canonical" href="<?php echo $pageCanonical; ?>"/>
            <meta name="robots" content="index,follow">
            <title><?php echo $localTitle; ?></title>

            <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,600,800' type='text/css'>


<?php       if (RELEASE) {?>    
            <link rel="stylesheet" href="css/all.min.css">
<?php            
} else {?>
            <link rel="stylesheet" href="css/reset.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/typography.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/custom.css">
            <link rel="stylesheet" href="css/portfolio-styles.css">
<?php            
}?>            

            <!-- favicon -->
            <link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="img/icons/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="img/icons/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
			<link rel="shortcut icon" type="image/x-icon" href="img/icons/favicon-16x16.png" >			
            <link rel="manifest" href="img/icons/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="img/icons/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">
			

            <!--<script src="js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
            <script src="js/libs/modernizr.js"></script>
<?php         
    }

	
    function RenderHTMLHeaderContentsForIntroPage() {
        global $pageCanonical;
        global $pageRobots;
        global $pageTitle;

        $localTitle = COMPANYNAME_NOHTML.' | '.HTMLHEADERTITLE.' | '.$pageTitle;
?>
            <meta name="google-site-verification" content="i1mjREYDBHBR-K23ey81BA_o_qmKzUyOqwP87OPACY4" />
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="<?php echo SEO_PAGEDESCRIPTION; ?>">
            <meta name="author" content="<?php echo COMPANYNAME_NOHTML.', '.AUTHOR; ?>">
            <link rel="canonical" href="<?php echo $pageCanonical; ?>"/>
            <meta name="robots" content="index,follow">
            <title><?php echo $localTitle; ?></title>

            <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,600,800' type='text/css'>


			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			
            <link rel="stylesheet" href="css/typography.css">
            <link rel="stylesheet" href="css/intro.custom.css">
            <link rel="stylesheet" href="css/intro.default.css">
			
			<!--
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/typography.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/custom.css">
            <link rel="stylesheet" href="css/portfolio-styles.css">
			-->

            <!-- favicon -->
            <link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="img/icons/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="img/icons/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
			<link rel="shortcut icon" type="image/x-icon" href="img/icons/favicon-16x16.png" >			
            <link rel="manifest" href="img/icons/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="img/icons/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">
			

            <!--<script src="js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
            <script src="js/libs/modernizr.js"></script>
<?php         
    }
	
	
    function RenderOldBrowserWarning() {
?>        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<?php        
    }


    function RenderPrimaryMenu($activeItemName) {
        global $g_MenuItems;

?>
        <ul class="nav navbar-nav navbar-right">
<?php
                for ($x = 0; $x < count($g_MenuItems); $x++) {
                    $enabled = $g_MenuItems[$x]->IsEnabled();
                    $visible = $g_MenuItems[$x]->IsVisible();
                    $name = $g_MenuItems[$x]->GetName();
                    $type = $g_MenuItems[$x]->GetType();
                    $label = $g_MenuItems[$x]->GetLabel();
                    $url = $g_MenuItems[$x]->GetUrl();
                    $menuitems = $g_MenuItems[$x]->GetMenuItems();

                    if ($type == MENUITEMTYPE_PAGELINK) {
                        if ($activeItemName == $name) {
                            if ($enabled) {
                                // Active item, enabled and visible
?> 
                                <li class="active"><a href="<?php echo $url;?>"><?php echo $label; ?></a></li> 
<?php
                            } else {
                                // Disabled and visible
                                if ($visible) {?>
                                    <li><a href=""><?php echo $label; ?></a></li> 
<?php
                                }
                            }
                        }
                        else {
                            if ($enabled) {
                                // Non-active item, enabled and visible
?>                                
                                <li><a href="<?php echo $url;?>"><?php echo $label; ?></a></li> 
<?php
                            } else {
                                if ($visible) {
                                    // Non-active item, disabled and visible
?>
                                    <li class="disabled"><a href=""><?php echo $label; ?></a></li> 
<?php
                                }
                            }
                        }
                    } elseif ($type == MENUITEMTYPE_SUBMENU) { ?>

<?php
                            if ($enabled) {
                                // Enabled and Visible?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $label; ?>&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
<?php
                            } else {
                                if ($visible) {
                                    // Disabled and Visible?>
                                    <li class="dropdown disabled">
                                        <a href="#"><?php echo $label; ?>&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
<?php                                    
                                }
                            }

                            if ($enabled && $visible) {?>
                                    <ul class="dropdown-menu">
<?php
                                    // Iterate through all submenu items
                                    for ($i = 0; $i < count($menuitems); $i++) {
                                        $label = $menuitems[$i]->GetLabel();
                                        $url = $menuitems[$i]->GetUrl();
                                        $enabled = $menuitems[$i]->IsEnabled();
                                        $visible =  $menuitems[$i]->IsVisible();
                                        
                                        // Enabled and visible
                                        if ($enabled) {?>
                                            <li><a target="_new" href="<?php echo $url;?>"><?php echo $label;?>&nbsp;<i class="fa fa-external-link"></i></a></li>
<?php                                   } else {
                                            // Disabled and visible
                                            if ($visible) {?>
                                                <li class="disabled"><a target="_new" href=""><?php echo $label;?>&nbsp;<i class="fa fa-external-link"></i></a></li>

<?php                                       }
                                        }?>
                                    </ul>
<?php                                    
                                }
                            }?>
                        </li>
<?php                                           
                    }
                }
?>
        </ul>
<?php        
    }



    function RenderPageHeader($activeMenuItem) {
        // Gatekeeper
        if ($activeMenuItem == '') {
            $activeMenuItem = MENUITEM_INDEX;
        }
 ?>
        <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars" area-hidden="true"></i>
                    </button>
                    <a id="logo" class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="<?php echo COMPANYNAME; ?>">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="mainmenucontainer">
                    <?php RenderPrimaryMenu($activeMenuItem); ?>
                </div>
            </div>
        </header><!--/header-->
<?php
    }

    function RenderPageTitle($title) {
?>        
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php echo $title; ?></h1>
					</div>
				</div>
			</div>
		</div>
<?php        
    }


    function RenderCallToActionBar() {
?>
        <div class="section section-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="calltoaction-wrapper">
                            <h3>Welcome to <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">Kohd &amp; Art</span> - Software Development and Creative Services</h3> <a href="http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/" class="btn btn-orange">Download here!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }

    function RenderClients() {?>

        <div class="section">
            <div class="container">
            
                <div class="section-title">
                <h1>Our Success Stories</h1>
                </div>

                <div class="clients-logo-wrapper text-center row">
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-1.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-2.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-3.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-4.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-5.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-6.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-7.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-8.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-9.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-10.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-11.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-12.jpg" alt="Client Name"></a></div>
                </div>
            </div>
        </div>
<?php }

    function RenderCarousel($containerId, $interval) {

        global $g_CarouselItems;

        //
        // Header portion
        //


?>
        <section id="<?php echo $containerId;?>" class="no-margin" data-interval="<?php echo $interval; ?>">
            <div  class="carousel slide">
                <ol class="carousel-indicators">
<?php
                for ($i = 0; $i < count($g_CarouselItems); $i++) {
                    if ($i == 0) {
?>
                        <li data-target="#<?php echo $containerId;?>" data-slide-to="<?php echo $i;?>" class="active"></li>

<?php
                    } else {
?>
                        <li data-target="#<?php echo $containerId;?>" data-slide-to="<?php echo $i;?>"></li>
<?php
                    }
                }
?>        
            </ol>
            <div class="carousel-inner" role="listbox">
<?php
                for ($x = 0; $x < count($g_CarouselItems); $x++) {


                    $heading = $g_CarouselItems[$x]->GetHeading();
                    $content = $g_CarouselItems[$x]->GetContent();
                    $displayButton = $g_CarouselItems[$x]->GetDisplayButton();
                    $buttonText = $g_CarouselItems[$x]->GetButtonText();
                    $buttonLink = $g_CarouselItems[$x]->GetButtonLink();
                    $backgroundImage = $g_CarouselItems[$x]->GetBackgroundImage();
?>
                    <div class="item <?php if ($x == 0) { echo "active"; } ?>" style="background-image: url(<?php echo $backgroundImage; ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content center centered">
                                        <h2 class="animation animated-item-1"><?php echo $heading; ?></h2>
                                        <p class="animation animated-item-2"><?php echo $content; ?></p>
                                        <?php if ($displayButton) {?>
                        				<br>
                        				<a class="btn btn-md animation animated-item-3" href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
                } // End loop
?>
                </div>
        </div>
        <a class="prev hidden-xs" href="#<?php echo $containerId;?>" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="next hidden-xs" href="#<?php echo $containerId;?>" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
        </section>
<?php
    }


    function RenderServices() {
        $buttonLabel = 'Details...';
?>
        <!-- Services -->
        <div class="section section-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="fa fa-keyboard-o"></i>
                            <i class="fa fa-windows"></i>
                            <h3 class="emphasis1">Software Development</h3>
                            <p>We specialize in Microsoft ASP.NET web development</p>
                            <a href="services.php#software" class="btn"><?php echo $buttonLabel ?></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="fa fa-database fa-2x"></i>
                            <h3 class="emphasis2">Database Design and Development</h3>
                            <p>In addition to our software development experience, we are experienced in database design, development and administration using Microsoft SQL Server. </p>
                            <a href="services.php#database" class="btn"><?php echo $buttonLabel ?></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="fa fa-camera-retro fa-2x"></i>
                            <h3 class="emphasis3">Photography</h3>
                            <p>We have 5+ years experience in product and portrait photography.</p>
                            <a href="services.php#photography" class="btn"><?php echo $buttonLabel ?></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="fa fa-pencil-square-o"></i>
                            <h3 class="emphasis4">Retouching</h3>
                            <p>To complement our photographic work, we are also experienced in photo-retouching and other post production.</p>
                            <a href="services.php#retouching" class="btn"><?php echo $buttonLabel ?></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="fa fa-paint-brush"></i>
                            <h3 class="emphasis5">Illustrations</h3>
                            <p>...Sometimes we'll create images out of thin air!</p>
                            <a href="services.php#illustration" class="btn"><?php echo $buttonLabel ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services -->
<?php
    }


    function RenderFooter() {
?>
        <style>
            /*
            .footer-fixed {
                position:fixed;
                left:0px;
                bottom:0px;
                height:auto;
                width:100%;
                background-color: rgba(22, 0, 0, .9);
            }

            .grow-on-hover { transition: all .2s ease-in-out; }
            .grow-on-hover:hover { transform: scale(1.1); }
            */
        </style>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Contact Info</h3>
                        <p class="contact-us-details">
                            <ul class="fa-ul ul-footer-contact-info">
                                <li><i class="fa-li fa fa-envelope"></i><?php echo ADDRESS; ?></li>
                                <li><i class="fa-li fa fa-phone"></i><?php echo PHONE; ?></li>
                                <li><i class="fa-li fa fa-at"></i><a href="mailto:<?php echo EMAIL_OBFUSCATED; ?>"><?php echo EMAIL_OBFUSCATED; ?></a></li>
                                <li><i class="fa-li fa fa-globe"></i><a href="http://www.kohd.co">kohd.co</a></li>
                                <li><i class="fa-li fa fa-paper-plane"></i><a href="contact-us.php">Contact Form</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-footer col-md-4 col-xs-6">   
                        <h3>Let's Get Social!</h3>	
                        <p>Feel free to connect with us on the following social networks!</p>
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="https://twitter.com/kohdandart" class="twitter-follow-button grow-on-hover" data-show-count="false" data-show-screen-name="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <a href="https://www.facebook.com/kohdandart" target="_new" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook sm-icon"></i></a>
                                <a href="https://www.linkedin.com/in/ggagnaux" target="_new" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin sm-icon"></i></a>
                                <a href="https://www.instagram.com/ggagnaux" target="_new" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram sm-icon"></i></a>
                                <a href="https://www.behance.net/vgfoto" target="_new" data-toggle="tooltip" title="Behance"><i class="fa fa-behance sm-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>About&nbsp;<?php echo COMPANYNAME; ?></h3>
                        <p><?php echo ABOUTCOMPANY; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 text-left">
                        <div class="footer-copyright">
                            <a class="btn" id="aboutBoxButton" data-toggle="tooltip" title="About this site" href="">About website...<?php //echo GetWebsiteVersion(); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <div class="footer-copyright">
                            <?php echo COPYRIGHT; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="aboutWebsite" class="modal fade bs-example-modal-lg">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title modal-dialog-title">About this website...</h4>
                    </div>
                    <div class="modal-body">
                        <p>Version: <?php echo GetWebsiteVersion(); ?></p>
                        <p>
                            This site was lovingly crafted with artisanal ingredients and no animals were harmed in the process!
                        </p>
                        <p>
                            All photographs used in this site are &copy; <a href="<?php echo VGFOTOURL; ?>" target="_new"><?php echo VGFOTONAME; ?></a>
                        </p>
                        <p>  
                            We would like to extent a special thanks to all those involved with the creation of these amazing products!
                        </p>
                        <p class="text-center"><img class="img-responsive center-block" src="img/madewith.png" alt="Made With"/></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
<?php                
    } 



    function RenderBackToTopWidget() {
?>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" 
          role="button" title="Back to Top" data-toggle="tooltip" data-placement="top">
          <i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i>
        </a>
<?php
    }


    function RenderProjectDetails($id) {

        global $g_ProjectItems;

        $title = $g_ProjectItems[$id]->GetTitle();
        $client = $g_ProjectItems[$id]->GetClient();
        $description = $g_ProjectItems[$id]->GetDescription();
        $technologiesused = $g_ProjectItems[$id]->GetTechnologiesUsed();
        $image = $g_ProjectItems[$id]->GetImage();
        $url = $g_ProjectItems[$id]->GetUrl();
?>
        <div class="col-sm-6">
            <div class="product-image-large">
                <img class="bordered" src="<?php echo($image); ?>" alt="Item Name">
            </div>
        </div>
        <div class="col-sm-6 product-details">
            <h3 class="emphasis1"><?php echo($title); ?></h3>
            <hr>
            <h4>Quick Overview</h4>
            <p><?php echo($description); ?></p>
            <br>
            <h4>Project Details</h4>
            <p><strong>Client(s): </strong><?php echo($client); ?></p>
            <p><strong>Technologies: </strong><?php echo($technologiesused); ?></p>

            <hr>

            <div class="row">
                <div class="col-xs-6">
                    <a class="btn btn-md animation animated-item-3" href="portfolio.php">
                    <i class="fa fa-angle-double-left" aria-hidden="true" data-toggle="tooltip" title="Back"></i>&nbsp;Back to Portfolio
                    </a>
                </div>
                <div class="col-xs-6">
                    <p class="text-right">
                <?php if ($url) {
?>                 
                    <a class="btn btn-md animation animated-item-3" target="_new" href="<?php echo($url); ?>">
                    Go to site&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip" title="External Link"></i>
                    </a>
                
<?php
                }
?>            
                    </p>
                </div>
            </div>
        </div>
<?php
    }

    function RenderCommonJavascriptIncludes() {
?>
        <!-- Third Party Libraries -->
        <script src="js/libs/jquery.min.js"></script>
        <script src="js/libs/jquery.easing.min.js"></script>
        <script src="js/libs/bootstrap.min.js"></script>
        <script src="js/libs/touch.js"></script>

        <!-- Local Libraries -->
        <script src="js/googleanalytics.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/backtotop.js"></script>
        <script src="js/scrolling-nav.js"></script>
        <script src="js/aboutboxmodal.js"></script>
<?php
    }

    function Redirect($url, $statusCode = 303) {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
?>


 