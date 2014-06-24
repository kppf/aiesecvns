<?php
/**
 *	@author programofreak
 *	@code the contact page
 */
    session_start();
    require_once(FNS.'/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Apply for Internships | Students | AIESEC Varanasi','students','intern');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Internships</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo WEB; ?>/">Home</a> <span class="divider">/</span></li>
                    <li><a href="">Students</a> <span class="divider">/</span></li>
                    <li class="active">Apply for Internship</li>
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
            <div class="span7">
                <div class="row-fluid margin-bottom-20">
                    <div class="span6 service-box-v1">
                        <div><i class="icon-group color-grey"></i></div>
                        <h2>Management</h2>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                    <div class="span6 service-box-v1">
                        <div><i class="icon-cloud color-grey"></i></div>
                        <h2>Development</h2>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                </div>
                <div class="row-fluid margin-bottom-20">
                    <div class="span6 service-box-v1">
                        <div><i class="icon-android color-grey"></i></div>
                        <h2>Technical</h2>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                    <div class="span6 service-box-v1">
                        <div><i class="icon-renren color-grey"></i></div>
                        <h2>Education</h2>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                </div>
            </div>
            <!-- END SERVICE BLOCKS --> 

            <!-- BEGIN VIDEO AND TESTIMONIALS -->   
            <div class="span5">
				<h2>Apply for Internship</h2>
				<p>Professional Internships are a perfect platform for gaining knowledge, practical experience and intense learning. One gets the opportunity to work in their areas of interest gaining experience and knowing more of ground realities of varies difficulties, consequently developing ones capability of overcoming tough situations. We provide opportunity to live and work in a foreign country in areas of management, technology, education, and development.</p>
				<a href="#" class="btn blue big btn-block">Apply here <i class="m-icon-big-swapright m-icon-white"></i></a>
			</div>	
            <!-- END BEGIN VIDEO AND TESTIMONIALS -->   
        </div>
        <!-- END BLOCKQUOTE AND VIDEO -->

        <!-- BEGIN STEPS -->
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
        </div>
        <!-- END STEPS -->          
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>