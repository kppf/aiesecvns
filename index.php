<?php
/**
 *	@author programofreak
 *	@code the home page
 */
    session_start();
    require_once(FNS.'/static/static.php');
	
    $sobj = new Html;
    $sobj->header('AIESEC Varanasi','home');
    $sobj->slider();
?>	
    <!-- BEGIN CONTAINER -->   
    <div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <div class="row-fluid service-box">
            <div class="span4">
                <div class="service-box-heading">
                    <em><i class="icon-location-arrow blue"></i></em>
                    <span><a href="<?php echo WEB; ?>/students/member/">Become A Member</a></span>
                </div>
				<p>AIESEC is a platform to develop oneself in multiple aspects for all round development of one’s personality and skills to tackle any upcoming situation in any field of work.</p>
            </div>
            <div class="span4">
                <div class="service-box-heading">
                    <em><i class="icon-ok red"></i></em>
                    <span><a href="<?php echo WEB; ?>/students/intern/">Apply For Internship</a></span>
                </div>
				<p>Professional Internships are a perfect platform for gaining knowledge, practical experience and intense learning. One gets the opportunity to work in their areas of interest gaining experience and knowledge.</p>
            </div>
            <div class="span4">
                <div class="service-box-heading">
                    <em><i class="icon-resize-small green"></i></em>
                    <span><a href="<?php echo WEB; ?>/organisations/partner/">Become A Partner</a></span>
                </div>
				<p>AIESEC engages with many Corporates, NGOs' and various organisations to support their purpose of Global Employer Branding. If you are interested in what we do, you can be our partner.</p>
            </div>
        </div>
        <!-- END SERVICE BOX -->  

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row-fluid quote-v1">
            <div class="span9 quote-v1-inner">
                <span>We are glad to be the part of World's largest youth community! You?</span>
            </div>
            <div class="span3 quote-v1-inner text-right">
                <a class="btn-transparent" href="<?php echo WEB; ?>/aiesec/"><i class="icon-rocket margin-right-10"></i>Know about AIESEC</a>
            </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <div class="clearfix"></div>

        <!-- BEGIN RECENT EVENTS - ENABLE TO SHOW RECENT EVENTS ETC -->
		<!--
        <div class="row-fluid recent-work margin-bottom-40">
            <div class="span3">
                <h2><a href="portfolio.html">Recent Events</a></h2>
                <p>Give a brief desciption of the event conducted. What was so special in it? And some details but in brief can be given here. Replace the pics with event pics.</p>
            </div>
            <div class="span9">
                <ul class="bxslider">
                    <li>
                        <em>
                            <img src="assets/img/works/img1.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                    <li>
                        <em>
                            <img src="assets/img/works/img2.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                    <li>
                        <em>
                            <img src="assets/img/works/img3.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                    <li>
                        <em>
                            <img src="assets/img/works/img4.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                    <li>
                        <em>
                            <img src="assets/img/works/img5.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                    <li>
                        <em>
                            <img src="assets/img/works/img6.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                    <li>
                        <em>
                            <img src="assets/img/works/img3.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                    <li>
                        <em>
                            <img src="assets/img/works/img4.jpg" alt="" />
                            <a href="portfolio_item.html"><i class="icon-link icon-hover icon-hover-1"></i></a>
                            <a href="assets/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="icon-search icon-hover icon-hover-2"></i></a>
                        </em>
                        <a class="bxslider-block" href="#">
                            <strong>Amazing Project</strong>
                            <b>Agenda corp.</b>
                        </a>
                    </li>
                </ul>        
            </div>
        </div>   -->
        <!-- END RECENT EVENTS -->

        <div class="clearfix"></div>

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class="row-fluid mix-block">
            <!-- TABS -->
            <div class="span7 tab-style-1 margin-bottom-20">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-1" data-toggle="tab">Youth</a></li>
                    <li><a href="#tab-2" data-toggle="tab">Partners</a></li>
                    <li><a href="#tab-3" data-toggle="tab">Alumni</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane row-fluid fade in active" id="tab-1">
                            <p>Our members are part of an exciting, youth driven global network. They are able to contribute to societal change while exploring their own vision for a positive impact on society</p>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                            <p>We are supported by thousands of partner organizations around the globe who look to AIESEC to support the development of youth and to access top talent through our global internship program</p>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <p>Our alumni are leaders within their organizations and communities. They use the experience, skills and inspiration AIESEC has provided themto be agents of positive change within today’s society</p>
                    </div>
                </div>
            </div>
            <!-- END TABS -->
    
            <!-- TESTIMONIALS -->
            <div class="span5 testimonials-v1">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <span class="testimonials-slide">Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met consectetur adipisicing sit amet do eiusmod dolore.</span>
                            <div class="carousel-info">
                                <img class="pull-left" src="assets/img/people/img1-small.jpg" alt="" />
                                <div class="pull-left">
                                    <span class="testimonials-name">Lina Mars</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <span class="testimonials-slide">Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</span>
                            <div class="carousel-info">
                                <img class="pull-left" src="assets/img/people/img5-small.jpg" alt="" />
                                <div class="pull-left">
                                    <span class="testimonials-name">Kate Ford</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <span class="testimonials-slide">Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</span>
                            <div class="carousel-info">
                                <img class="pull-left" src="assets/img/people/img2-small.jpg" alt="" />
                                <div class="pull-left">
                                    <span class="testimonials-name">Jake Witson</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel nav -->
                    <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
                    <a class="right-btn" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
            <!-- END TESTIMONIALS -->
        </div>                
        <!-- END TABS AND TESTIMONIALS -->

        <!-- BEGIN STEPS -->
        <div class="row-fluid no-space-steps margin-bottom-40">
            <div class="span4 front-steps front-step-one">
                <h2>AIESEC's Vision</h2>
                <p>Global vision: Peace and fulfilment of humankind's potential.<br><br> </p>
            </div>
            <div class="span4 front-steps front-step-two">
                <h2>AIESEC's Scope</h2>
                <p>Global, non-political, independent, not-for-profit organization.<br><br> </p>
            </div>
            <div class="span4 front-steps front-step-three">
                <h2>AIESEC's Approach</h2>
                <p>Leadership opportunities, international internships and interacting with a global network</p>
            </div>
        </div>
        <!-- END STEPS -->

        <!-- BEGIN CLIENTS -->
        <div class="row-fluid margin-bottom-40">
            <div class="span3">
                <h2><a href="#">Our Advisory Board</a></h2>
                <p>Put the logos of the companies in the advisory board.</p>
            </div>
            <div class="span9">
                <ul class="bxslider1 clients-list">
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/client_1_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_1.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/client_2_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_2.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/client_3_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_3.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/client_4_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_4.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/client_5_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_5.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">                        
                            <img src="assets/img/clients/client_6_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_6.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/client_7_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_7.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">                        
                            <img src="assets/img/clients/client_8_gray.png" alt="" /> 
                            <img src="assets/img/clients/client_8.png" class="color-img" alt="" />
                        </a>
                    </li>
                </ul>                        
            </div>
        </div>
        <!-- END CLIENTS -->
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>