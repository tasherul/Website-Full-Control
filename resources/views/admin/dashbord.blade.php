@extends('admin._layout.master')



@section('contant')
<div id="topbar">
	<div class="topbar-left">
		<ol class="breadcrumb">
			<li class="crumb-active"><a>Dashboard</a></li>
			<li class="crumb-icon"><a><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="crumb-link"><a>Home</a></li>
			<li class="crumb-trail">Dashboard</li>
		</ol>
	</div>
</div>

@php
$_c_slide = count(DB::table('slider')->select('*')->get());
$_c_news = count(DB::table('news')->select('*')->get());
$_c_activities = count(DB::table('activities')->select('*')->get());
$_c_galary = count(DB::table('galary')->select('*')->get());
@endphp

<div id="content">
	<div id="widget-dropdown" class="row">
		<div class="col-sm-3">
			<div class="panel panel-overflow mb10">
				<div class="panel-body pn pl20">
					<div class="icon-bg"><i class="fa fa-envelope text-grey"></i></div>
					<h2 class="mt15 lh15 text-grey2"><b>{{$_c_slide}}</b></h2>
					<h5 class="text-muted">Slider</h5>
				</div>
			</div>
		</div>
		<!-- <div class="col-sm-3">
					<div class="panel panel-overflow mb10">
						<div class="panel-body pn pl20">
							<div class="icon-bg"><i class="fa fa-bar-chart-o text-teal"></i></div>
							<h2 class="mt15 lh15 text-teal2"><b>{{$_c_news}}</b></h2>
							<h5 class="text-muted">News</h5>
						</div>
					</div>
				</div> -->
		<div class="col-sm-3">
			<div class="panel panel-overflow mb10">
				<div class="panel-body pn pl20">
					<div class="icon-bg"><i class="fa fa-comments-o text-blue"></i></div>
					<h2 class="mt15 lh15 text-blue2"><b>{{$_c_activities}}</b></h2>
					<h5 class="text-muted">Activities</h5>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="panel panel-overflow mb10">
				<div class="panel-body pn pl20">
					<div class="icon-bg"><i class="fa fa-twitter text-purple"></i></div>
					<h2 class="mt15 lh15 text-purple2"><b>{{$_c_galary}}</b></h2>
					<h5 class="text-muted">Galary Image</h5>
				</div>
			</div>
		</div>
	</div>



			<div class="row">
				<div class="col-md-10 center-column">
					<div class="panel faq-panel mt50">
						<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-info-sign"></span> Documentation </span> </div>
						<div class="panel-body pn">
							<div class="row table-layout table-clear-xs">
								
								<div class="col-sm-12 va-m p30">
									
									<div class="panel-group accordion mt25" id="accordion1">
										<div class="panel">
											<div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accord1_1">
													<div class="accordion-toggle-icon pull-left"> <i class="fa fa-minus-square-o text-light4"></i> <i class="fa fa-plus-square-o text-purple2"></i> </div>
													Home
												</a> </div>
											<div id="accord1_1" class="panel-collapse collapse in">
												<div class="panel-body"> 
												
												
												<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">1. Slide Option</span></h4>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">This section is the Home page slide section. You can add delete or edit your slide easily.</p>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">[Required Slide]&nbsp;<br />1. Title *<br />2. Description *<br />3. Slide Image [1920 x 1200]*<br />4. Link&nbsp;<sub>(optional)</sub></p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">2. Slide Feature</span></h4>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">This section is the Home page slide sections feature. home page adding some information in 3parts system. [If you enable this section then it will show on a Home page otherwise it will be hidden.]</p>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">Part 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Part 2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Part 3 [schedulling]</p>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">Title&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |&nbsp; Title&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |&nbsp; &nbsp;Title<br />Description&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|&nbsp; Description&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|&nbsp; &nbsp;Name - Time<br />Link&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |&nbsp; Link&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|&nbsp; &nbsp;Name - Time<br />Button Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |&nbsp; Button Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |&nbsp; &nbsp;Name - Time<br />Link&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |&nbsp; Link&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |</p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">3. Header Option</span></h4>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">This section is heading information system. [If you enable this section then it will show on a Home page otherwise it will be hidden.]<br />[Required]<br />Address&nbsp; |&nbsp; Home&nbsp; | Mobile No | Facebook | Twitter | Linkedin | Google plus</p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">3. Body Section&nbsp;<br /></span></h4>
<p><span style="font-family: DauphinPlain;">This section shows some data like one side image and one side some contents.&nbsp;</span><span style="font-family: DauphinPlain; font-weight: bold;">&nbsp;</span>[If you enable this section then it will show on a Home page otherwise it will be hidden.]</p>
<p><span style="font-family: DauphinPlain; font-weight: bold;">[Required] Title | Image [600 x 550] | Description&nbsp;</span></p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">4. Logo &amp; Details&nbsp;</span></h4>
<p>This is an imaging section all are individually section it will show all pages.&nbsp;<br />&nbsp; &nbsp;1. Logo [100 x 100 | 250 x 100] wide image or square image required.<br />&nbsp; &nbsp;2. Company Name [It will show a side of the logo].<br />&nbsp; &nbsp;3. Services Background Image [1920 x 1200] will show the services page.<br />&nbsp; &nbsp;4. Services Background Image [1920 x 1200] it will show the services details page.<br />&nbsp; &nbsp;5. About Us Background Image [1920 x 1200] it will show the about us page.<br />&nbsp; &nbsp;6. Fab Icon [35 x 35] it will show after the heading title section.<br />&nbsp; &nbsp;7. Footer About Us [this is content that will show the all page footer].</p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">5. Recommended Video&nbsp;</span></h4>
<p>This is a video and content system to show the Home page only.<span style="font-family: DauphinPlain; font-weight: bold;">&nbsp;</span>[If you enable this section then it will show on a Home page otherwise it will be hidden.]</p>
<p>[Requerid] Title | Description |Youtube Video link</p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">6. Make a Team&nbsp;</span></h4>
<p>You can make a team that will show only the Home page. [If you enable this section then it will show on a Home page otherwise it will be hidden.] Only 3 Member &amp; contact you can add<br />[Requrid] Name | Designation | image [800 x 800] only 3 member. You can Disable Member<br />[Requrid] Title &amp; Description</p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">6. Newsletter&nbsp;</span></h4>
<p>In this section, you can see all email who put to your site. then you can send mail your own that people for more update new or your services.</p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">7. Terms &amp; Condition</span></h4>
<p>this section is adding your terms and condition.<br />[Requerd] Title | Description</p>
<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">8. Privacy Policy</span></h4>
<p>this section is adding your Privacy Policy.<br />[Requerd] Title | Description</p>
<p>&nbsp;</p>
												
												
												</div>
											</div>
										</div>
										<div class="panel">
											<div class="panel-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accord1_2">
													<div class="accordion-toggle-icon pull-left"> <i class="fa fa-minus-square-o text-light4"></i> <i class="fa fa-plus-square-o text-purple2"></i> </div>
													Services
												</a> </div>
											<div id="accord1_2" class="panel-collapse collapse">
												<div class="panel-body">
												
												
												<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">1. Add a Services</span></h4>
										<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">This section not only shows the Home page also shows our services page.</p>
										<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">[Required Slide]&nbsp;<br />1. Title *<br />2. Short Description *<br />3. Description *<br />4. Slide Image [800 x 450]*</p>
										<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">2. Service View &amp; Edit, Delete&nbsp;</span></h4>
										<p><span style="font-family: DauphinPlain; font-weight: bold;">This page will show all services and you can click the edit button then open a window then you can change contents and make updates and it will save automatically. if you don't want those services then you can delete these services.</span></p>
										<p>&nbsp;</p>
										<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">3. Services Gallery</span></h4>
										<p>This section is an individual services gallery it will show all services images to provide more information.<br /><span style="font-family: DauphinPlain;">[Required Gallery]&nbsp; Title | Image [600 x 400]<br /></span></p>

												 
												 
												 </div>
											</div>
										</div>

										<div class="panel">
											<div class="panel-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accord1_3">
													<div class="accordion-toggle-icon pull-left"> <i class="fa fa-minus-square-o text-light4"></i> <i class="fa fa-plus-square-o text-purple2"></i> </div>
													About Us
												</a> </div>
											<div id="accord1_3" class="panel-collapse collapse">
												<div class="panel-body">
												
												
												<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">1. About Us | Details- 1</span></h4>
										<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">This section will show only the about us page.&nbsp; [If you enable this section then it will show on a Home page otherwise it will be hidden.]</p>
										<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">[Requird] Title | Description | Image [800 x 500]</p>
										<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">2. About Us | Details- 2</span></h4>
										<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">This section will show only the about us page.&nbsp; [If you enable this section then it will show on a Home page otherwise it will be hidden.]</p>
										<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">[Requird] Title | Description | Image [800 x 500]</p>
										<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">3. Make a Team&nbsp;</span></h4>
										<p style="font-family: Helvetica, Arial, sans-serif; font-size: 14px;">You can make a team that will show only the Home page. [If you enable this section then it will show on a Home page otherwise it will be hidden.] Only 4 Member &amp; contact you can add<br />[Requrid] Name | Designation | image [800 x 800] only 4 member. You can Disable Member<br />[Requrid] Title &amp; Description</p>
										<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">4. Gallery</span></h4>
										<p>This section is showing all images in only about pages.<br />[Requied] Title | Image [800 x 800]</p>




												 
												 
												 </div>
											</div>
										</div>


										<div class="panel">
											<div class="panel-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accord1_4">
													<div class="accordion-toggle-icon pull-left"> <i class="fa fa-minus-square-o text-light4"></i> <i class="fa fa-plus-square-o text-purple2"></i> </div>
													Contact Us
												</a> </div>
											<div id="accord1_4" class="panel-collapse collapse">
												<div class="panel-body">
												
												
												<h4 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-family: DauphinPlain; font-weight: bold;">1. Contact Details</span></h4>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">this section will shows data on the contact us page. all are contact information.</p>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">[Requird]&nbsp; Description | Location | Mobile 1,2 | Email | Website | Latitude &amp; Longitude [for google map]</p>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;"><span style="font-weight: bold;">2. Messages</span></p>
<p style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; line-height: 24px;">This section will show only who can message you on the contact page. you can see the Name, Email, Message, dates.</p>




												 
												 
												 </div>
											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	


	
</div>
</div>


</div>




</div>
@endsection