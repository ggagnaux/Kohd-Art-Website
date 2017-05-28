<?php 
    include_once "utility/_kohd.php";

    // Define variables for SEO
    $pageTitle = 'Home';
    $pageCanonical = 'http://www.kohd.co/';
?>
<?php RenderDoctypeSection(); ?>
<html class="no-js">
	<head>
    	<?php RenderHTMLHeaderContentsForIntroPage(); ?>

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

		<style type="text/css">
			h3.popover-title {
				font-size: 12px;
				background-color: #222;
				color: #f00;
			}

			.popover {
				border: 1px solid #ccc;
				background-color: #002;
				border-radius: 1px;
			}

			.popover-content {
				font-size: 11px;
				color: #999;
				white-space:pre;
				max-width:none;
				border: 0;
			}

			.container {
				position: relative;
				border-radius: 20px;
			}

			#divCover {
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				background-color: rgba(50,50,50,.9);
				height: 100%;
				z-index: 100;
				border-radius: 20px;
				display: none;
			}


			.infoPanel {
				position: absolute;
				width: 50%;
				background-color: rgb(50,50,50);
				height: 100%;
				z-index: 1010;
				border-radius: 20px;
			    font-family: arial, "Cardo", "Times New Roman", Times, serif;
			}

			.infoPanel h1 {
				padding: 10px;
				font-weight: bold;
			}


			@media screen and (min-width: 701px)  {
				.infoPanel {
					font-size: 14px;
				}

				.infoPanel h1 {
					font-size: 15px;
				}

			}

			@media screen and (min-width: 250px) and (max-width: 700px) {
				.infoPanel {
					font-size: 8px;
				}

				.infoPanel h1 {
					font-size: 10px;
				}

			}

			.infoPanel ul {
				padding-left: 28px;
			}

			.infoPanelLeft {
				color: rgb(152, 161, 93);
				left: 0;
				top: 0;
				border-radius: 20px 0px 0px 20px;
				display: none;
			}

			.infoPanelRight {
				color: silver;
				right: 0;
				top: 0;
				border-radius: 0px 20px 20px 0px;
				display: none;
			}
			


			#leftInfoPanel {
				z-index: 1010;
			}
			#rightInfoPanel {
				z-index: 1010;
			}


			#leftInfoPanel h1 {
				color: rgb(152, 161, 93);
			}
			#rightInfoPanel h1 {
				color: silver;
			}
			

			#btnSoftwareDevelopment {
				width: 100%;
				z-index: 5000;
			}
			#btnCreativeServices {
				width: 100%;
				z-index: 5000;
			}
		</style>
	</head>
    <body>
        <?php RenderOldBrowserWarning(); ?>

        <section id="intro" style="background-image: url('img/background3.jpg');" class="intro">      
            <div class="overlay"></div>
            <div class="content">
                <div class="container clearfix">
					<!--<div id="divCover"></div>-->
					<div id="leftInfoPanel" class="infoPanel infoPanelLeft">
						<h1>Creative Services:</h1>
						<ul>
							<li>Photography</li>
							<li>Retouching</li>
							<li>Post-Production</li>
							<li>Illustration</li>
							<li>Digital Art</li>
						</ul>
					</div>

					<div id="rightInfoPanel" class="infoPanel infoPanelRight">
						<h1>Software Development Services:</h1>
						<ul>
							<li>Web Development and Design</li>
							<li>ASP.NET MVC</li>
							<li>C#</li>
							<li>Entity Framework</li>
							<li>Javascript</li>
							<li>HTML/CSS</li>
							<li>SQL Server</li>
						</ul>
					</div>



                    <div class="row">
                        <!--<div class="col-md-8 col-md-offset-2 col-sm-12">-->
                        <div class="col-sm-12">
                            <img src="img/KohdAndArt_Logo_Horizontal.png" />
                            <p class="italic">Please select your area of interest below:</p>
                            <p><input id="chkRemember" type="checkbox" /><span class="small-text">&nbsp;Remember your choice for next time?</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="left">
                            <a data-toggle="popover" title="" id="btnSoftwareDevelopment" class="button btn btn-primary" href="http://www.kohd.co/index.php">Software<br />Development</a>
                        </div>
                        <div class="right">
                            <a data-toggle="popover" title="" id="btnCreativeServices" class="btn btn-primary button" href="http://www.kohd.co/art/index.php">Creative<br />Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php RenderCommonJavascriptIncludes() ?> 

        <script src="js/libs/jquery.cookie.js"></script>
		
        <script>
            var COOKIENAME = 'preferred_url';

            $(document).ready(function () {

                // Are we reseting the preferred url cookie?
                if (getUrlParameter('reset')) {
                    $.removeCookie(COOKIENAME);
                } else {
                    // Check the cookie.  If set, just redirect to preferred page
                    var preferred_url = $.cookie(COOKIENAME);
                    if (preferred_url != null) {
                        if (preferred_url.length > 0) {
                            window.open(preferred_url, '_self');
                        }
                    }
                }

				$("#btnCreativeServices").on("mouseenter", function() {
					//$("#divCover").show();
					//$("#leftInfoPanel").stop().slideToggle("slow");
					$("#leftInfoPanel").show();
				});
				$("#btnCreativeServices").on("mouseleave", function() {
					//$("#divCover").hide();
					//$("#leftInfoPanel").stop().slideToggle("slow");
					$("#leftInfoPanel").hide();
				});

				$("#btnSoftwareDevelopment").on("mouseenter", function() {
					//$("#divCover").show();
					//$("#rightInfoPanel").stop().slideToggle("slow");
					$("#rightInfoPanel").show();
				});
				$("#btnSoftwareDevelopment").on("mouseleave", function() {
					//$("#divCover").hide();
					//$("#rightInfoPanel").stop().slideToggle("slow");
					$("#rightInfoPanel").hide();
				});



				/*
				// Set the popover text
				$("#btnSoftwareDevelopment").data('content', 'Web Development and Design<br/>ASP.NET | MVC<br/>C#<br/>Entity Framework<br/>Javascript<br/>HTML/CSS<br/>SQL Server');
				$("#btnCreativeServices").data('content', 'Photography<br/>Retouching<br/>Post-Production<br/>Illustration<br/>Digital Art');

				// Initialize the popovers
			    $('[data-toggle="popover"]').popover({
					placement: 'bottom',
					trigger: 'hover',
					html: true,
					template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
				}); 
				*/

                $('#btnSoftwareDevelopment').on('click', function (e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    SaveOrClearPreferredUrl(url);
                    window.open(url, '_self');
                });

                $('#btnCreativeServices').on('click', function (e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    SaveOrClearPreferredUrl(url);
                    window.open(url, '_self');
                });
            });

            function SaveOrClearPreferredUrl(url) {
                if ($('#chkRemember').prop('checked')) {
                    // Save the url
                    $.cookie(COOKIENAME, url);
                } else {
                    // Clear the url
                    $.removeCookie(COOKIENAME);
                }
            }

            var getUrlParameter = function getUrlParameter(sParam) {
                var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : sParameterName[1];
                    }
                }
            };

        </script>
    </body>
</html>