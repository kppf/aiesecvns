<?php
/**
 *	@author programofreak
 *	@code static part of webpages
 */
class Html {

	/**
	 * @function header() defines the static header of the website
	 * @param $header is the title of the page
	 * @param $active is the active nav menu
	 * @param $activesub is the submenu with active class
	 */

	function header($header,$active=null,$activesub=null) {
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title><?php echo $header; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo ASSETS;?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo ASSETS;?>plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo ASSETS;?>css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo ASSETS;?>css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo ASSETS;?>css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo ASSETS;?>plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />               
    <link href="<?php echo ASSETS;?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo ASSETS;?>plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                      
    <link href="<?php echo ASSETS;?>css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="<?php echo ASSETS;?>css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>    
    <link rel="shortcut icon" href="<?php echo WEB; ?>/favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=443819082389941";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- END BEGIN STYLE CUSTOMIZER -->    

    <!-- BEGIN HEADER -->
    <div class="front-header">
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
				
                    <!-- BEGIN LOGO (you can use logo image instead of text)-->
                    <a class="brand logo-v1" href="<?php echo WEB; ?>/">
                        <img src="<?php echo ASSETS; ?>/img/logo_blue.png" id="logoimg" alt="">
                    </a>
                    <!-- END LOGO -->

                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li <?php if($active=="home"){?>class="active"<?php }?>>
                                <a href="<?php echo WEB; ?>/">
                                    Home
                                </a>
                            </li>
                            <li class="dropdown <?php if($active=="aiesec"){?> active<?php }?>">
								<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="<?php echo WEB; ?>/aiesec/">
									AIESEC
									<i class="icon-angle-down"></i>
                                </a>
								<ul class="dropdown-menu">
                                    <li <?php if($activesub=="overview"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/aiesec/overview/">Overview</a></li>
                                    <li <?php if($activesub=="who"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/aiesec/who/">Who We Are</a></li>
                                    <li <?php if($activesub=="network"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/aiesec/network/">Network</a></li>
                                    <li <?php if($activesub=="history"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/aiesec/history/">History</a></li>
                                    <li <?php if($activesub=="hall"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/aiesec/hall/">Hall of Fame</a></li>
                                </ul>
							</li>
                            <li class="dropdown <?php if($active=="about"){?> active<?php }?>">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    About Us
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li <?php if($activesub=="history"){?> class="active"<?php }?>><a hrf="/we/history/">History</a></li>
                                    <li <?php if($activesub=="departments"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/we/departments/">Departments</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($active=="students"){?> active<?php }?>">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    Students
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li <?php if($activesub=="intern"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/students/intern/">Apply For Internship</a></li>
                                    <li <?php if($activesub=="member"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/students/member/">Become a Member</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($active=="organisations"){?> active<?php }?>">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    Organisations
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li <?php if($activesub=="partner"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/organisations/partner/">Partner with AIESEC</a></li>
                                    <li <?php if($activesub=="workwith"){?> class="active"<?php }?>><a hrf="/organisations/workwith/">Who we work with</a></li>
                                    <li <?php if($activesub=="international"){?> class="active"<?php }?>><a hrf="/organisations/international/">Hire International Talent</a></li>
                                    <li <?php if($activesub=="national-advisors"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/organisations/national-advisors/">National Board of Advisors</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($active=="events"){?> active<?php }?>">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    Events
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li <?php if($activesub=="upcoming"){?> class="active"<?php }?>><a hrf="/events/upcoming/">Upcoming</a></li>
                                    <li <?php if($activesub=="ongoing"){?> class="active"<?php }?>><a hrf="/events/ongoing/">Ongoing</a></li>
                                    <li <?php if($activesub=="past"){?> class="active"<?php }?>><a hrf="/events/past/">Past</a></li>
                                </ul>
                            </li>
                            
                            <li <?php if($active=="contact"){?> class="active"<?php }?>><a href="<?php echo WEB; ?>/contact/">Contact</a></li>
                            <li class="menu-search">
                                <span class="sep"></span>
                                <i class="icon-search search-btn"></i>
                            </li>
                        </ul>
                        <div class="search-box">
                            <div class="input-append">
                                <form action="javascript:void(0);">
                                    <input style="background:#fff;" class="m-wrap" type="text" placeholder="Search" />
                                    <button type="submit" class="btn theme-btn">Go</button>
                                </form>
                            </div>
                        </div>                            
                    </div>
                    <!-- BEGIN TOP NAVIGATION MENU -->
                </div>
            </div>
        </div>                   
    </div>
    <!-- END HEADER -->
<?php 
	} 

	function footer() {
?>

    <!-- BEGIN FOOTER -->
    <div class="front-footer">
        <div class="container">
            <div class="row-fluid">
                <div class="span4 space-mobile">
                    <!-- BEGIN ABOUT -->                    
                    <h2>About</h2>
                    <p class="margin-bottom-30">AIESEC, IIT(BHU), Varanasi is the local chapter of the world's largest youth community AIESEC. Come join us for a marvellous experience and a grand life! Woo!</p>
                    <div class="clearfix"></div>                    
                    <!-- END ABOUT -->          

                    <h2>Photos Stream</h2>
                    <!-- BEGIN BLOG PHOTOS STREAM -->
                    <div class="blog-photo-stream margin-bottom-30">
                        <ul class="unstyled">
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/people/img5-small.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/works/img1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/people/img4-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/works/img6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/pics/img1-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/pics/img2-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/works/img3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/people/img2-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/works/img2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo ASSETS; ?>/img/works/img5.jpg" alt=""></a></li>
                        </ul>                    
                    </div>
                    <!-- END BLOG PHOTOS STREAM -->                              
                </div>
                <div class="span4 space-mobile">
                    <!-- BEGIN CONTACTS -->                                    
                    <h2>Contact Us</h2>
                    <address class="margin-bottom-40">
                        TBI <br />
                        Chemical Engineering <br />
                        IIT (BHU), Varanasi <br />
                        M: <a href="tel:+919935591455" target="_blank">(+91) 9935 591 455</a> <br />
                        Email: <a href="mailto:aiesecvaranasi@gmail.com" target="_blank">aiesecvaranasi@gmail.com</a>                        
                    </address>
                    <!-- END CONTACTS -->                                    

                    <!-- BEGIN SUBSCRIBE -->                                    
                    <h2>Monthly Newsletter</h2>  
                    <p>Subscribe to our newsletter and stay up to date with the latest news and happenings!</p>
                    <form action="#" class="form-search">
                        <div class="input-append">
                            <input style="background:#fff;" class="m-wrap" type="text"><button class="btn theme-btn" type="button">SUBSCRIBE</button>
                        </div>
                    </form>
                    <!-- END SUBSCRIBE -->                                    
                </div>
                <div class="span4">
                    <!-- BEGIN TWITTER BLOCK -->                                                    
                    <h2>Social posts</h2>
                    <div class="fb-like-box" data-href="http://www.facebook.com/AIESECVaranasi" data-height="200" data-allowtransparency="false" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>               
                    <!-- END TWITTER BLOCK -->                                                                        
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN COPYRIGHT -->
    <div class="front-copyright">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">
                    <p>
                        <span class="margin-right-10"><?php /*auto-update year*/ echo date('Y'); ?> &copy; AIESEC, IIT (BHU), Varanasi</span> 
                        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>
                <div class="span4">
                    <ul class="social-footer">
                        <li><a target="_blank" href="http://facebook.com/AIESECVaranasi"><i class="icon-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="icon-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a target="_blank" href="http://twitter.com/AIESECVaranasi"><i class="icon-twitter"></i></a></li>
                    </ul>                
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo ASSETS;?>plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="<?php echo ASSETS;?>plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo ASSETS;?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo ASSETS;?>plugins/back-to-top.js"></script>    
    <script type="text/javascript" src="<?php echo ASSETS;?>plugins/bxslider/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS;?>plugins/fancybox/source/jquery.fancybox.pack.js"></script>    
    <script type="text/javascript" src="<?php echo ASSETS;?>plugins/hover-dropdown.js"></script>
    <!--[if lt IE 9]>
    <script src="/assets/plugins/respond.min.js"></script>  
    <![endif]-->   
    <!-- END CORE PLUGINS -->   
    <script src="<?php echo ASSETS;?>scripts/app.js"></script>         
    <script src="<?php echo ASSETS;?>scripts/index.js"></script>    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php
	}
	
	function slider() {
?>
	  <div class="slider">
        <div class="container-flud">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">
              <div class="item">
                    <div class="carousel-img" style="background-image:url('<?php echo ASSETS; ?>/img/sliders/1.jpg');"></div>
              </div>
              <div class="item active">
                    <div class="carousel-img" style="background-image:url('<?php echo ASSETS; ?>/img/carousel/2.jpg')"></div>
              </div>
              <div class="item">
                    <div class="carousel-img" style="background-image:url('<?php echo ASSETS; ?>/img/carousel/3.jpg')"></div>
              </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">&rsaquo;</a>
          </div>
        </div>
      </div>
	
<?php	
	}
}