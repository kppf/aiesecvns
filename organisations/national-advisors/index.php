<?php
/**
 *	@author programofreak
 *	@code the aiesec india national board of advisors page
 */
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/aiesec-fns/static/static.php');
	
    $sobj = new Html;
    $sobj->header('National Board of Advisors | AIESEC, India','organisations','national-advisors');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>National Board of Advisors</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li><a href="/organisations/">Organsations</a> <span class="divider">/</span></li>
                    <li class="active">National Board of Advisors</li>
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
            <div class="span12">
				<ul class='thumbnails'>
					<li class='span2'>
						<img src="http://aieseciitkgp.org/nboa/godrej.jpg" width="90" height="70">
						<br><b>Mr. Adi Godrej</b><br>
						<em>Chairman<br>Godrej Group<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/tata.jpg" width="90" height="70"><br><b>Mr. B. Muthuraman</b><br><em>Vice Chairman<br>
					TATA Steel<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/atlantic.jpg" width="90" height="70"><br><b>Mr. Ranjit Pandit</b><br><em>MD<br>
					General Atlantic<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/mayfield.jpg" width="90" height="70"><br><b>Mr. Nikhil Khatau</b><br><em>MD<br>
					Mayfield Advisors<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/kinsey.jpg" width="90" height="70"><br><b>Mr. Adil Zainulbhai</b><br><em>MD<br>
					McKinsey &amp; Co.<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/hsbc.jpg" width="90" height="70"><br><b>Ms. Naina Lal Kidwai</b><br><em>Group General Manager and Country Head<br>
					 HSBC India<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/fortis.jpg" width="90" height="70"><br><b>Mr. Shivinder Singh</b><br><em>CEO and MD<br>
					Fortis<br></em>
					</li>
					<li class='span2'>
					<img src="http://www.aiesec.in/wp-content/themes/aiesecindia/images/nboa/cocacola.jpg" width="90" height="70"><br><b>Mr. Atul Singh</b><br><em>CEO<br>
					Coca Cola India<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/rbs.jpg" width="90" height="70"><br><b>Ms. Meera Sanyal</b><br><em>Country Executive &amp; Chairperson India<br>
					Royal bank of Scotland<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/isb.jpg" width="90" height="70"><br><b>Prof. Ajit Rangnekar</b><br><em>DEAN<br>
					ISB<br></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/nboa/utv.jpg" width="90" height="70"><br><b>Ronnie Screwvala</b><br><em>CEO and founder chairman<br>
					UTV Group<br></em>
					</li>
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