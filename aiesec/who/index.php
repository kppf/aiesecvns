<?php
/**
 *	@author programofreak
 *	@code the aiesec overview page
 */
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/aiesec-fns/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Who we are | AIESEC','aiesec','who');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Who we Are</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li><a href="/aiesec/">AIESEC</a> <span class="divider">/</span></li>
                    <li class="active">Who we Are</li>
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
				<h3 class='text-info'>What We Envision</h3>
				<p class='text-info'>Peace and fulfilment of humankind's potential. </p>
				<h3 class='text-warning'>AIESEC’s Scope </h3>
				<p class='text-warning'>AIESEC is a global, non-political, independent, not-for-profit organization run by students and recent graduates of institutions of higher education. Our members are interested in world issues, leadership and management. </p>    
				<p class='text-warning'>AIESEC does not discriminate on the basis of race, colour, gender, sexual orientation, creed, religion, national, ethnic or social origin. </p>
				<h3 class='text-success'>AIESEC’s Approach</h3>
				<p class='text-success'>AIESEC members live an integrated development experience. This involves leadership opportunities, international internships and interacting with a global network to support their development. </p>
            </div>
			<div class="span4">
				<img src='/assets/img/pics/img1-medium.jpg'>
			</div>
			<!-- END SERVICE BLOCKS -->  
		</div>
		<br><br>
		<div class='row-fluid'>
			<span class='span4'>
				<a href="/aiesec/" class="btn big blue btn-block">More about AIESEC <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="http://aiesec.org/" class="btn big blue btn-block">AIESEC website <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="/we/" class="btn big blue btn-block">AIESEC, IIT(BHU), Varanasi <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
        </div>
        <!-- END BLOCKQUOTE AND VIDEO -->
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>