@php
$dt = Session::get('admin'); 
$data = DB::table('admin')->where('id','=' ,$dt->id)->select('*')->get()->first();
@endphp


<aside id="sidebar_left">
			<div class="user-info">
				<div class="media"> <a class="pull-left" href="#">
					<div class="media-object border border-purple br64 bw2 p2"> <img class="br64" src="storage/app/@php echo $data->image; @endphp" alt=""> </div>
				</a>
				<div class="mobile-link"> <span class="glyphicons glyphicons-show_big_thumbnails"></span> </div>
				<div class="media-body">
					<h5 class="media-heading mt5 mbn fw700 cursor">@php echo $data->Full_name;  @endphp<span class="caret ml5"></span></h5>
					<div class="media-links fs11"><a href="#">Menu</a><i class="fa fa-circle text-muted fs3 p8 va-m"></i><a href="logout">Sign Out</a></div>
				</div>
			</div>
		</div>
		<div class="user-divider"></div>
		<div class="user-menu" style="height: auto;">
			<div class="row text-center">
				<div class="col-xs-4"> <a href="dashbord"> <span class="glyphicons glyphicons-home fs22 text-blue2"></span>
					<h5 class="fs11">Home</h5>
				</a> </div>

				<div class="col-xs-4"> <a href="Profile"> <span class="glyphicons glyphicons-user fs22 text-blue2"></span>
					<h5 class="fs11">Profile</h5>
				</a> </div>

				<div class="col-xs-4"> <a href="logout"> <span class="glyphicon glyphicon-off fs22 text-green2"></span>
					<h5 class="fs11">Logout</h5>
				</a> </div>
				
				
			</div>
			
		</div>
		<div class="sidebar-menu">
			<ul class="nav">
				
				<li class="active"> <a href="dashbord"><span class="glyphicon glyphicon-qrcode"></span><span class="sidebar-title">Dashboard</span></a> </li>
				
				<li> <a class="accordion-toggle " href="#resources"><span class="glyphicon glyphicon-home"></span><span class="sidebar-title">Home</span><span class="caret"></span></a>
					<ul id="resources" class="nav sub-nav">
						<li><a class="ajax-disable" href="{{url('Home-Slider')}}"><span class="glyphicon glyphicon-sound-stereo"></span> Slider </a></li>
						<li class="divider"></li>
						<li><a class="ajax-disable" href="{{url('Slider-Feature')}}"><span class="glyphicon glyphicon-sound-dolby"></span> Slider Feature</a></li>
						<li><a class="ajax-disable" href="{{url('Header')}}"><span class="glyphicon glyphicon-resize-horizontal"></span> Header</a></li>
						<li><a class="ajax-disable" href="{{url('Body-Section')}}"><span class="glyphicon glyphicon-credit-card"></span> Body Section</a></li>
						<li><a class="ajax-disable" href="{{url('Logo-Details')}}"><span class="glyphicon glyphicon-copyright-mark"></span> Logo & Details</a></li>
						<li><a class="ajax-disable" href="{{url('Video')}}"><span class="glyphicon glyphicon-play"></span> Recommended Video</a></li>
						<li><a class="ajax-disable" href="{{url('Team')}}"><span class="glyphicon glyphicon-plus"></span> Make Team</a></li>
						<li><a class="ajax-disable" href="{{url('Newsletter')}}"><span class="glyphicon glyphicon-book"></span> NewsLetter</a></li>
						<li><a class="ajax-disable" href="{{url('Terms-Condition')}}"><span class="glyphicon glyphicon-book"></span> Terms & Condition</a></li>
						<li><a class="ajax-disable" href="{{url('Privacy-Policy')}}"><span class="glyphicon glyphicon-book"></span> Privacy Policy</a></li>
					</ul>
				</li>
				<!-- <li> <a class="accordion-toggle" href="#sideOne"><span class="glyphicon glyphicon-book"></span><span class="sidebar-title">News</span><span class="caret"></span></a>
					<ul id="sideOne" class="nav sub-nav">
						<li><a href="{{url('News-Add')}}"><span class="glyphicon glyphicon-list-alt"></span> Add News</a></li>
						<li><a href="{{url('News-view')}}"><span class="glyphicon glyphicon-list-alt"></span> View News</a></li>
						
					</ul>
				</li> -->
				<li> <a class="accordion-toggle" href="#sideTwo"><span class="glyphicons glyphicons-vcard"></span><span class="sidebar-title">Our Services</span><span class="caret"></span></a>
					<ul id="sideTwo" class="nav sub-nav">
						<li><a href="{{url('Activities')}}"><span class="glyphicons glyphicons-link"></span> Add Services</a></li>
						<li><a href="{{url('View-Activities')}}"><span class="glyphicons glyphicons-pencil"></span> View Services</a></li>
						<li><a href="{{url('Add-Slider-Activities')}}"><span class="glyphicon glyphicon-sort"></span> Slider Services</a></li>
						
					</ul>
				</li>
				<li> <a class="accordion-toggle" href="#sideTwo"><span class="glyphicon glyphicon-screenshot"></span><span class="sidebar-title">About Us</span><span class="caret"></span></a>
					<ul id="sideTwo" class="nav sub-nav">
						<li><a href="{{url('About-Details-1')}}"><span class="glyphicons glyphicons-link"></span> About Details 1</a></li>
						<li><a href="{{url('About-Details-2')}}"><span class="glyphicons glyphicons-pencil"></span> About Details 2</a></li>
						<li><a href="{{url('About-Members')}}"><span class="glyphicon glyphicon-plus"></span> Members</a></li>
						<li><a href="{{url('About-Galary')}}"><span class="glyphicon glyphicon-picture"></span> Gallary</a></li>
						
					</ul>
				</li>

				<li> <a class="accordion-toggle" href="#sideTwo"><span class="glyphicons glyphicons-vcard"></span><span class="sidebar-title">Contact Us</span><span class="caret"></span></a>
					<ul id="sideTwo" class="nav sub-nav">
						<li><a href="{{url('Contact-Details')}}"><span class="glyphicons glyphicons-link"></span>Contact Details</a></li>
						<li><a href="{{url('Contact-Messages')}}"><span class="glyphicon glyphicon-envelope"></span>Messages</a></li>
						
					</ul>
				</li>

				
			</ul>
		</div>
	</aside>