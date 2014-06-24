<?php
/**
 *	@author programofreak
 *	@code the aiesec network page
 */
    session_start();
    require_once(FNS.'/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Our Network | AIESEC','aiesec','network');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Our Network</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo WEB; ?>/">Home</a> <span class="divider">/</span></li>
                    <li><a href="<?php echo WEB; ?>/aiesec/">AIESEC</a> <span class="divider">/</span></li>
                    <li class="active">Our Network</li>
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
            <div class="span7 offset1">
				<p class='text-info'>One of AIESEC's greatest strengths is our ability to bring together young people and partner organizations from all over the world through internships, conferences and our global learning environment.</p>
				<p class='text-warning'>Our membership base consists of more than 86,000 young people in over 2,400 universities in 113 countries and territories. Local, National and International offices are managed by students or recent graduates. AIESEC is run by youth, for youth. </p>
				<p class='text-success'>Together, the network manages relationships with well over 8.000 partners, facilitates more than 5,000 International internships, 15,000 International Volunteer Experiences, 24,000 leadership experiences, and organizes over 500 conferences each year.</p>
            </div>
			<div class="span4">
				<iframe src ="http://www.myaiesec.net/cms/aiesec/AI/social_media_map_fb/socialm_map.swf" width="400" height="210" frameborder="0" scrolling="no"> 
                    <p>Your browser does not support iframes.</p>
                </iframe>
			</div>
			<!-- END SERVICE BLOCKS -->  
		</div>
		<br><br>
		<div class='row-fluid'>
			<span class='span4'>
				<a href="<?php echo WEB; ?>/aiesec/" class="btn big blue btn-block">More about AIESEC <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="http://aiesec.org/" class="btn big blue btn-block">AIESEC website <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="<?php echo WEB; ?>/we/" class="btn big blue btn-block">AIESEC, IIT(BHU), Varanasi <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
        </div>
        <!-- END BLOCKQUOTE AND VIDEO -->
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>