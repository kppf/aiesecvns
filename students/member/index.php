<?php
/**
 *	@author programofreak
 *	@code the contact page
 */
    session_start();
    require_once(FNS.'/static/static.php');
	
    $sobj = new Html;
    $sobj->header('Become a member | Students | AIESEC Varanasi','students','member');
?>	
    <!-- BEGIN BREADCRUMBS -->   
    <div class="row-fluid breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="span4">
                <h1>Become a Member</h1>
            </div>
            <div class="span8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo WEB; ?>/">Home</a> <span class="divider">/</span></li>
                    <li><a href="">Students</a> <span class="divider">/</span></li>
                    <li class="active">Become a member</li>
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
				<ul >
					<li><h5 class='muted'>Being an AIESECer opens a plethora of opportunities for developing one’s network and various other skills.</h5></li>
					<li><h5 class='text-error'>Be a team member and work on a project :</h5> The chance of working with other like-minded people, an rarity in itself leads to multi-dimensional development of any individual, be it a leader or a another team member.</li>
					<li><h5 class='text-warning'>Lead a team of individuals on a project:</h5> A chance for a person to break that ice and gain experience of being an initiate and direct people under you as a leader. Lead your team, gaining managerial experience along the way and take responsibility by managing not only your work, but work of your team members too.</li>
					<li><h5 class='text-info'>Be a part of local leadership team:</h5>  Gain a chance to be a part of an organization that governs over the task of over hundreds of individuals. Conduct conferences involving even larger number.</li>
					<li><h5 class='text-success'>Be a part of national or international team:</h5> A conglomeration of the best among the brightest. An experience of working with most experienced and talented people, all the while gaining global exposure and recognition.</li>
				</ul>
            </div>
            <!-- END SERVICE BLOCKS --> 

            <!-- BEGIN VIDEO AND TESTIMONIALS -->   
            <div class="span5">
				<p>AIESEC is a platform to develop oneself in multiple aspects for all round development of one's personality and skills to tackle any upcoming situation in any field of work. AIESECer gain various opportunities to develop themselves by taking up various team roles made available for the execution of a project or event, by attending various conferences which are a confluence of various people experienced and talented in their own way. Conferences and various other activities taken up by AIESEC are one amongst the best platforms for one to develop their soft skills and gain experience of working in a team. Various opportunities gained by becoming an <u>AIESECer</u><br></p>
				<h2>So why waiting?</h2>
				<a href="http://goo.gl/dAcjZS" target="_blank" class="btn blue big btn-block">Apply here <i class="m-icon-big-swapright m-icon-white"></i></a>
			</div>	
            <!-- END BEGIN VIDEO AND TESTIMONIALS -->   
        </div>
        <!-- END BLOCKQUOTE AND VIDEO -->

        <!-- BEGIN STEPS -->
        <div class="row-fluid no-space-steps margin-bottom-40">
            <div class="span4 front-steps front-step-one">
                <h2>Apply</h2>
                <p>Apply for being a member of larget youth organization AIESEC.</p>
            </div>
            <div class="span4 front-steps front-step-two">
                <h2>Prepare</h2>
                <p>Well, prepare for getting started with amazing life with us!</p>
            </div>
            <div class="span4 front-steps front-step-three">
                <h2>Get Glad!</h2>
                <p>You are an AIESECer, obviously get the reason to be happy!</p>
            </div>
        </div>
        <!-- END STEPS -->          
    </div>
    <!-- END CONTAINER -->
<?php
	$sobj->footer();
?>