<?php
/**
 *	@author programofreak
 *	@code the aiesec hall of fame page
 */
    session_start();
    require_once(FNS.'/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Hall of Fame | AIESEC','aiesec','hall');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Hall of Fame</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo WEB; ?>/">Home</a> <span class="divider">/</span></li>
                    <li><a href="<?php echo WEB; ?>/aiesec/">AIESEC</a> <span class="divider">/</span></li>
                    <li class="active">Hall of Fame</li>
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
					<img src="http://aieseciitkgp.org/hall_of_fame/poland.jpg" width="110" height="90"><br><b>Aleksander Kwasniewski<br>President of Poland</b><br><em>1995-2005</em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/usa.jpg" width="110" height="90"><br><b>Bill Clinton<br>President of the USA</b><br><em>1993-2001</em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/portugal.jpg" width="110" height="90"><br><b>Cavaco Silva<br>President of Portugal</b><br><em>2006-present</em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/colombia.jpg" width="110" height="90"><br><b>Cesar Gaviria<br>President Colombia</b><br><em>1990-1994</em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/fiat.jpg" width="110" height="90"><br><b>Giovanni Agnelli<br>Founder of FIAT</b><br><em></em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/ibm.jpg" width="110" height="90"><br><b>Hans Ulrich Maerki<br>Chairman of EMEA at IBM</b><br><em>2001-2008</em>
					</li class='span2'>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/germany.jpg" width="110" height="90"><br><b>Helmut Kohl<br>German Chancellor</b><br><em>1982-1998</em>
					</li class='span2'>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/slovenia.jpg" width="110" height="90"><br><b>Janez Drnovsek<br>Prime Minister of Slovenia</b><br><em>2002-2007</em>
					</li>
					<li class='span2'>
					<img src="http://aieseciitkgp.org/hall_of_fame/japan.jpg" width="110" height="90"><br><b>Junichiro Koizumi	<br>Prime Minister of Japan</b><br><em>2001-2006</em>
					</li>
					<li class='span2'>
						<img src="http://aieseciitkgp.org/hall_of_fame/kofi.jpg" width="110" height="90"><br><b>Kofi Annan<br>Secretary General, UN</b><br><em>1997-2006</em>
					</li>
					<li class='span2'>
						<img src="http://aieseciitkgp.org/hall_of_fame/finland.jpg" width="110" height="90"><br><b>Martti Ahtisaari<br>President of Finland</b><br><em>1994-2000</em>
					</li>
					<li class='span2'>
						<img src="http://aieseciitkgp.org/hall_of_fame/dhl.jpg" width="110" height="90"><br><b>Uwe Doerken<br>Chairman and CEO at DHL Worldwide Express</b><br><em>2001-2004</em>
					</li>
					<li class='span2'>
						<img src="http://aieseciitkgp.org/hall_of_fame/switzerland.jpg" width="110" height="90"><br><b>Micheline Calmy Rey<br>Federal Council of Switzerland</b><br><em>2003-2011</em>
					</li>
				</ul>
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
		<br><br><br>
        <!-- END BLOCKQUOTE AND VIDEO -->
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>