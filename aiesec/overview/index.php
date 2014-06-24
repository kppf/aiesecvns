<?php
/**
 *	@author programofreak
 *	@code the aiesec overview page
 */
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/aiesec-fns/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Overview | AIESEC','aiesec','overview');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Overview</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li><a href="/aiesec/">AIESEC</a> <span class="divider">/</span></li>
                    <li class="active">Overview</li>
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
				<h5>AIESEC has <?php echo date('Y')-1948; ?> years of experience in developing high-potential youth into globally minded responsible leaders.</h5>
				<h5>Present in over 113 countries and territories and with over 86,000 members, AIESEC is the world's largest youth-run organization. Focused on providing a platform for youth leadership development, AIESEC offers young people the opportunity to participate in international internships, experience leadership and participate in a global learning environment. What makes AIESEC unique is the youth driven impactful experience that it offers to its members. AIESEC is run by young people for young people, enabling a strong experience to all its stakeholders.</h5>
				<ul> 
               		<li class='text-info'>Our <a href="http://www.aiesec.org/cms/aiesec/AI/students/index.html">members</a> are part of an exciting, driven global network. They are able to contribute to societal change while exploring their own vision for a positive impact on society.</li> 
					<li class='text-success'>We are supported by thousands of <a href="http://www.aiesec.org/cms/aiesec/AI/partners/index.html">partner organisations</a> around the globe who look to AIESEC to support the development of youth and to access top talent through our global internship program.</li> 
					<li class='text-warning'>Our <a href="http://www.aiesec.org/cms/aiesec/AI/alumni/index.html">alumni</a> are leaders within their organizations and communities. They use the experience, skills and inspiration AIESEC has provided them to be agents of positive change within today’s society.</li> 
				</ul>
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