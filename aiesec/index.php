<?php
/**
 *	@author programofreak
 *	@code the aiesec details page
 */
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/aiesec-fns/static/static.php');
	
    $sobj = new Html;
    $sobj->header('AIESEC','aiesec');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>AIESEC</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">AIESEC</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS -->

    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
        <!-- BEGIN BLOCKQUOTE AND VIDEO -->   
        <div class="row-fluid">
            <!-- BEGIN SERVICE BLOCKS -->               
            <div class="span12">
                <div class="row-fluid margin-bottom-20">
                    <div class="span4 service-box-v1">
                        <div><i class="icon-home color-grey"></i></div>
                        <h2>Overview</h2>
                        <p>Present in over 113 countries and territories and with over 86,000 members, AIESEC is the world's largest youth-run organization. <br><a href='/aiesec/overview/' class='btn mini red'>Know more</a></p>
                    </div>
                    <div class="span4 service-box-v1">
                        <div><i class="icon-group color-grey"></i></div>
                        <h2>Who We Are</h2>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. <br><a href='/aiesec/who/' class='btn mini green'>Know more</a></p>
                    </div>
                    <div class="span4 service-box-v1">
                        <div><i class="icon-signal color-grey"></i></div>
                        <h2>Network</h2>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. <br><a href='/aiesec/network/' class='btn mini blue'>Know more</a></p>
                    </div>
                </div>
                <div class="row-fluid margin-bottom-20">
                    <div class="span4 service-box-v1">
                        <div><i class="icon-headphones color-grey"></i></div>
                        <h2>History</h2>
                        <p>Know our history, or listen to a song. Guess what, both are similar! Come, walk through our more than <?php echo date('Y')-1948; ?> years of journey! <br><a href='/aiesec/history/' class='btn mini black'>Know more</a></p>
                    </div>
                    <div class="span4 service-box-v1">
                        <div><i class="icon-star color-grey"></i></div>
                        <h2>Hall of Fame</h2>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. <br><a href='/aiesec/hall/' class='btn mini yellow'>Know more</a></p>
                    </div>
                    <div class="span4 service-box-v1">
                        <div><i class="icon-heart color-grey"></i></div>
                        <h2>Still looking? You're awesome!</h2>
                        <p>So had a look at us? Amazing, yeah? Come <a href='/students/member/'>join us</a>. It's as easy as saying <h5>I am an AIESECer!</h5><a href='/students/member/' class='btn mini yellow'>Join us</a></p>
                    </div>
                </div>
            </div>
            <!-- END SERVICE BLOCKS -->  
        </div>
        <!-- END BLOCKQUOTE AND VIDEO -->

        <!-- BEGIN STEPS -->
		<!--
        <div class="row-fluid no-space-steps margin-bottom-40">
            <div class="span4 front-steps front-step-one">
                <h2>Apply</h2>
                <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
            <div class="span4 front-steps front-step-two">
                <h2>Wait</h2>
                <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
            <div class="span4 front-steps front-step-three">
                <h2>Fly!</h2>
                <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
        </div> -->
        <!-- END STEPS -->          
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>