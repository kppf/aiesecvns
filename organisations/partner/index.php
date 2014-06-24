<?php
/**
 *	@author programofreak
 *	@code the aiesec india national board of advisors page
 */
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/aiesec-fns/static/static.php');
	
    $sobj = new Html;
    $sobj->header('National Board of Advisors | AIESEC, India','organisations','partner');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Why Partner with Us?</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li><a href="/organisations/">Organsations</a> <span class="divider">/</span></li>
                    <li class="active">Why Partner with Us?</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS -->

    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
        <!-- BEGIN BLOCKQUOTE AND VIDEO -->   
        <div class="row">
            <!-- BEGIN SERVICE BLOCKS -->               
            <div class="offset2 span8">
				<ul class='thumbnails'>
					<li><i class="icon-ok"></i> To increase your visibility among the cream of the country's youth, coming together from over 25 cities to attend this 6 Day Conference.</li>
					<li><i class="icon-ok"></i> To establish a strong brand among university students in India to be the employer of choice.</li>
					<li><i class="icon-ok"></i> To gain a positive reputation among our stakeholders and university students.</li>
					<li><i class="icon-ok"></i> To gain access to top AIESEC members possessing global experience and skills through our Global Internship Program.</li>
					<li><i class="icon-ok"></i> To gain maximum Return on Investment. These partnership packages have been drawn up to ensure maximum Return on Investment for our sponsors.</li>
					<li><i class="icon-ok"></i> AIESEC's High Quality Service Delivery & Access to AIESEC's resources. AIESEC has existed in Delhi for 30 years, since 1981. Over the years we have taken up several such events, hence have immense experience & skill in delivering the best events to our stakeholders.</li>
					<li><i class="icon-ok"></i> To build Goodwill. Partnership with AIESEC helps build Goodwill amongst youth and the market in general as AIESEC is a Non for profit youth organization and aims at creating a positive impact on society through its members and initiatives.</li>
				</ul>
            </div>
			<!-- END SERVICE BLOCKS -->  
		</div>
		<br><br>
		<div class='row-fluid'>
			<span class='span4'>
				<a href="/aiesec/" class="btn big blue btn-block">About AIESEC <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="http://aiesec.in/" class="btn big blue btn-block">AIESEC India <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
			<span class='span4'>
				<a href="/we/" class="btn big blue btn-block">AIESEC, IIT(BHU), Varanasi <i class="m-icon-big-swapright m-icon-white"></i></a>
			</span>
        </div>
		<br><br><br>
        <!-- END BLOCKQUOTE AND VIDEO -->
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>