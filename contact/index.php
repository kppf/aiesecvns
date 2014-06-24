<?php
/**
 *	@author programofreak
 *	@code the contact page
 */
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/aiesec-fns/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Contact us | AIESEC Varanasi','contact');
?>	

    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs">
        <div class="container">
            <div class="span4">
                <h1>Our Contacts</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo WEB; ?>/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Contacts</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS -->

    <!-- BEGIN GOOGLE MAP -->
    <div class="row-fluid">
        <div id="map" class="gmaps margin-bottom-40" style="height:400px;">
			<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=25.262424,82.989339&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=16&amp;ll=25.262424,82.989339&amp;output=embed"></iframe>
		</div>
    </div>
    <!-- END GOOGLE MAP -->

    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
        <div class="row-fluid">
            <div class="span9">
                <h2>Contact Form</h2>
                <p>Have a query, or want to join us. Be a part of the <a href='/organisations/national-advisor/'>advisory board</a>, or some problems <a href='/students/intern/'>applying for internship</a>? Whatever the point is, just contact us via the quick contact form below. We shall get back to you just in no time!</p>
                <div class="space20"></div>
                <!-- BEGIN FORM-->
                <form action="#" method="post" class="horizontal-form margin-bottom-40">
                    <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input type="text" class="m-wrap span12" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Email <span class="color-red">*</span></label>
                        <div class="controls">
                            <input type="text" class="m-wrap span12" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Message</label>
                        <div class="controls">
                            <textarea class="m-wrap span12" rows="8"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn theme-btn"><i class="icon-ok"></i> Send</button>
                    <button type="button" class="btn">Cancel</button>
                </form>
                <!-- END FORM-->                  
            </div>

            <div class="span3">
                <h2>Our Contacts</h2>
                <address>
					TBI <br />
					Chemical Engineering <br />
					IIT (BHU), Varanasi <br />
					M: <a href="tel:+919935591455" target="_blank">(+91) 9935 591 455</a> <br />
                </address>
                <address>
                    <strong>Email</strong><br>
					<a href="mailto:aiesecvaranasi@gmail.com" target="_blank">aiesecvaranasi@gmail.com</a>  
                </address>
                <ul class="social-icons margin-bottom-10">
                    <li><a href="http://facebook.com/AIESECVaranasi" data-original-title="facebook" class="facebook"></a></li>
                    <li><a href="http://twitter.com/AIESECVaranasi" data-original-title="twitter" class="twitter"></a></li>
                    <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                    <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                </ul>

                <div class="clearfix margin-bottom-30"></div>

                <h2>About Us</h2>
                <p>Varanasi chapter of world's largest youth community, AIESEC!</p>
                <ul class="unstyled">
                    <li><i class="icon-ok"></i> Flexible</li>
                    <li><i class="icon-ok"></i> Student friendly </li>
                    <li><i class="icon-ok"></i> Amazing</li>
                </ul>                                
            </div>            
        </div>
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>