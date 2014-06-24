<?php
/**
 *	@author programofreak
 *	@code the aiesec iit bhu departments page
 */
    session_start();
    require_once(FNS.'/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Departments | AIESEC, IIT(BHU), Varanasi','about','departments');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Departments, AIESEC, IIT(BHU), Varanasi</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo WEB; ?>/">Home</a> <span class="divider">/</span></li>
                    <li><a href="<?php echo WEB; ?>/">About us</a> <span class="divider">/</span></li>
                    <li class="active">Departments</li>
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
            <div class="span10 offset1">
				<h5 class='text-info'>Business Development and Marketing (BDM)</h5>
				<p class='text-info offset1'>This portfolio deals with Business development and marketing. All the long term growth projections, strategic plans, marketing strategies, publicity plans are undertaken under this.</p>
				
				<h5 class='text-warning'>Outgoing Foreign Exchange (OGX)</h5>
				<p class='text-warning offset1'>All the exchanges and internships both incoming and outgoing are handled under this portfolio.</p>

				<h5 class='text-success'>Finance</h5>
				<p class='text-success offset1'>All finances of AIESEC Varanasi will be handled directly by AIESEC IIT Delhi managed by this portfolio</p>

				<h5 class='text-info'>University Relations (UR)</h5>
				<p class='text-info offset1'>All the bureaucratic and legal work regarding the relationship between the University and AIESEC Varanasi will be dealt under this portfolio.</p>
				<img class='pull-center' src="/assets/img/dept.jpg">
            </div>
			<!-- END SERVICE BLOCKS -->  
		</div>
		<br><br>
		<div class='row-fluid'>
			<span class='span4'>
				<a href="<?php echo WEB; ?>/aiesec/" class="btn big blue btn-block">About AIESEC <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="<?php echo WEB; ?>/students/intern/" class="btn big blue btn-block">Apply for Internship <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="<?php echo WEB; ?>/students/member/" class="btn big blue btn-block">Become a Member <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
        </div>
		<br><br>
        <!-- END BLOCKQUOTE AND VIDEO -->
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>