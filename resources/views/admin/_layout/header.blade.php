<header class="navbar navbar-fixed-top">
		<div class="navbar-branding"> <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span> 
		<a class="navbar-brand" href="../">
		@php 
		$dt = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
		@endphp
		<img width="40px" height="40px" src="storage/app/{{$dt[29]->value_1}}">  {{$dt[92]->value_1}}</a></div>
		<div class="navbar-left">
			<div class="navbar-divider"></div>
			<!-- <div id="settings_menu"> <span class="glyphicons glyphicons-settings dropdown-toggle cursor" data-toggle="dropdown"></span>
				<ul class="dropdown-menu" role="menu">
					<li><a href="javascript:void(0);"><span class="glyphicons glyphicons-user text-red2 mr15"></span>Users</a></li>
					<li><a href="javascript:void(0);"><span class="glyphicons glyphicons-cargo text-purple2 mr15"></span>Servers</a></li>
					<li><a href="javascript:void(0);"><span class="glyphicons glyphicons-history text-grey2 mr15"></span>Crons</a></li>
				</ul>
			</div>
			<div id="language_menu"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="flag-xs flag-us"></span> <span class="small va-m">US</span> <i class="fa fa-angle-down text-dark"></i> </a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="javascript:void(0);"><span class="flag-xs flag-in"></span> Hindu</a></li>
					<li><a href="javascript:void(0);"><span class="flag-xs flag-tr"></span> Turkish</a></li>
					<li><a href="javascript:void(0);"><span class="flag-xs flag-es"></span> Spanish</a></li>
				</ul>
			</div> -->
		</div>
		<div class="navbar-right">
			<!-- <div class="navbar-search">
				<input type="text" id="HeaderSearch" placeholder="Search..." value="Search...">
			</div> -->
		
			<!-- <div class="navbar-menus">
				<div class="btn-group" id="alert_menu">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicons glyphicons-bell"></span> <b>3</b> </button>
					<ul class="dropdown-menu media-list" role="menu">
						<li class="dropdown-header">Recent Alerts<span class="pull-right glyphicons glyphicons-bell"></span></li>
						<li class="p15 pb10">
							<ul class="list-unstyled">
								<li><span class="glyphicons glyphicons-bell text-orange2 fs16 mr15"></span><b>CEO</b> lunch meeting Tuesday</li>
								<li class="pt10"><span class="glyphicons glyphicons-facebook text-blue2 fs16 mr15"></span>Facebook likes are at <b>4,100</b></li>
								<li class="pt10"><span class="glyphicons glyphicons-paperclip text-teal2 fs16 mr15"></span>Mark <b>uploaded</b> 3 new Docs</li>
								<li class="pt10"><span class="glyphicons glyphicons-gift text-purple2 fs16 mr15"></span>It's <b>Marks</b> 34th Birthday</li>
								<li class="pt10"><span class="glyphicons glyphicons-cup text-red2 fs16 mr15"></span>Best new employee awarded to <b>Jessica</b></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="btn-group" id="comment_menu">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicons glyphicons-display"></span> <b>7</b> </button>
					<div class="dropdown-menu" role="menu">
						<ul class="nav nav-tabs tabs-border-bottom" role="tablist">
							<li class="active"><a href="#header_tab1" role="tab" data-toggle="tab">Messages</a></li>
							<li><a href="#header_tab2" role="tab" data-toggle="tab">Tickets</a></li>
							<li><a href="#header_tab3" role="tab" data-toggle="tab">Todo List</a></li>
						</ul>

						<div class="tab-content pn border-none dropdown-persist">
							<div class="tab-pane active" id="header_tab1">
								<div class="dropdown-submenu dropdown-persist">
									<div class="row">
										<div class="col-xs-8">
											<input class="dropdownSearch" type="text" placeholder="Search...">
										</div>
										<div class="col-xs-4">
											<div class="cBox cBox-inline ml20">
												<input type="checkbox" id="headercBox1" name="check" value="None" />
												<label for="headercBox1">Delete</label>
											</div>
										</div>
									</div>
								</div>
								<div class="p15">
									<div class="media border-none"> <a class="pull-left" href="#"> <img class="media-object thumbnail thumbnail-sm rounded" src="img/avatars/2.jpg" alt="..."> </a>
										<div class="media-body">
											<h5 class="media-heading mbn">Simon Rivers <small class="text-light5"> - 3 hours ago</small></h5>
											<p class="text-muted"> Hey Louis, I was wondering if</p>
										</div>
									</div>
									<div class="media mt10 border-none"> <a class="pull-left" href="#"> <img class="media-object thumbnail thumbnail-sm rounded border-online" src="img/avatars/6.jpg" alt="..."> </a>
										<div class="media-body">
											<h5 class="media-heading mbn">Tracy Rope <small class="text-light5"> - 8 hours ago</small></h5>
											<p class="text-muted"> Bam baby get at, I was</p>
										</div>
									</div>
									<div class="media mt10 border-none"> <a class="pull-left" href="#"> <img class="media-object thumbnail thumbnail-sm rounded border-online" src="img/avatars/8.jpg" alt="..."> </a>
										<div class="media-body">
											<h5 class="media-heading mbn">Courtney Dash <small class="text-light5"> - 3 days ago</small></h5>
											<p class="text-muted"> I was wonde awesome brief </p>
										</div>
									</div>
									<div class="media mt10 border-none"> <a class="pull-left" href="#"> <img class="media-object thumbnail thumbnail-sm rounded border-light5" src="img/avatars/2.jpg" alt="..."> </a>
										<div class="media-body">
											<h5 class="media-heading mbn">Simon Rivers <small class="text-light5"> - 3 hours ago</small></h5>
											<p class="text-muted mbn"> Hey Louis, I was wondering </p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="header_tab2">
								<div class="dropdown-submenu dropdown-persist">
									<div class="cBox cBox-inline cBox-orange ml15 p1">
										<input type="checkbox" id="headercBox2" name="check" value="None" />
										<label for="headercBox2">Closed</label>
									</div>
									<div class="cBox cBox-inline cBox-purple">
										<input type="checkbox" id="headercBox3" name="check" value="None" />
										<label for="headercBox3">Low</label>
									</div>
									<div class="cBox cBox-inline cBox-blue">
										<input type="checkbox" id="headercBox4" name="check" value="None" />
										<label for="headercBox4">Med</label>
									</div>
									<div class="cBox cBox-inline cBox-red2 cBox-gradient">
										<input type="checkbox" id="headercBox5" name="check" value="None" checked />
										<label for="headercBox5">Urgent</label>
									</div>
								</div>
								<div class="sortable mt10 mb10">
									<div class="todo-item table-layout p8">
										<div class="todo-handle va-m">
											<div class="v-handle"></div>
										</div>
										<div class="todo-body va-m"><b class="text-muted">[Ticket #1]</b> - Validation Errors <small class="text-blue2"> [read more..]</small></div>
									</div>
									<div class="todo-item table-layout p8">
										<div class="todo-handle va-m">
											<div class="v-handle"></div>
										</div>
										<div class="todo-body va-m"><b class="text-muted">[Ticket #2]</b> - User Profile Debug<small class="text-blue2"> [read more..]</small></div>
									</div>
									<div class="todo-item table-layout p8">
										<div class="todo-handle va-m">
											<div class="v-handle"></div>
										</div>
										<div class="todo-body va-m"><b class="text-muted">[Ticket #3]</b> - User hacked <small class="text-blue2"> [read more..]</small></div>
									</div>
									<div class="todo-item table-layout p8">
										<div class="todo-handle va-m">
											<div class="v-handle"></div>
										</div>
										<div class="todo-body va-m"><b class="text-muted">[Ticket #4]</b> - Mailbox Debug <small class="text-blue2"> [read more..]</small></div>
									</div>
									<div class="todo-item table-layout p8">
										<div class="todo-handle va-m">
											<div class="v-handle"></div>
										</div>
										<div class="todo-body va-m"><b class="text-muted">[Ticket #5]</b> - User Profile Debug<small class="text-blue2"> [read more..]</small></div>
									</div>
									<div class="todo-item table-layout p8">
										<div class="todo-handle va-m">
											<div class="v-handle"></div>
										</div>
										<div class="todo-body va-m"><b class="text-muted">[Ticket #6]</b> - User Profile Debug<small class="text-blue2"> [read more..]</small></div>
									</div>
									<div class="todo-item table-layout p8">
										<div class="todo-handle va-m">
											<div class="v-handle"></div>
										</div>
										<div class="todo-body va-m"><b class="text-muted">[Ticket #7]</b> - User Profile Debug<small class="text-blue2"> [read more..]</small></div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="header_tab3">
								<div class="dropdown-submenu dropdown-persist">
									<div class="row">
										<div class="col-xs-12">
											<input class="dropdownSearch" type="text" placeholder="Create New Item...">
										</div>
									</div>
								</div>
								<div class="ticket-item table-layout">
									<div class="ticket-handle va-m">
										<div class="cBox ml10">
											<input type="checkbox" id="headercBox7" name="check" value="None" />
											<label for="headercBox7"></label>
										</div>
									</div>
									<div class="ticket-body p10 va-m"><b class="text-muted">[#2]</b> - IE8 Profile Drag Errors <span class="label label-sm bg-grey2 ml10">Javascript</span></div>
								</div>
								<div class="ticket-item table-layout">
									<div class="ticket-handle va-m">
										<div class="cBox ml10">
											<input type="checkbox" id="headercBox6" name="check" value="None" />
											<label for="headercBox6"></label>
										</div>
									</div>
									<div class="ticket-body p10 va-m"><b class="text-muted">[#1]</b> - Validation Errors on USCM testing facitiliy <small class="text-red2">- Urgent</small></div>
								</div>
								<div class="ticket-item table-layout">
									<div class="ticket-handle va-m">
										<div class="cBox ml10">
											<input type="checkbox" id="headercBox9" name="check" value="None" />
											<label for="headercBox9"></label>
										</div>
									</div>
									<div class="ticket-body p10 va-m"><b class="text-muted">[#4]</b> - CSS Problems with Tables <span class="label label-sm bg-orange2 ml10">CSS</span></div>
								</div>
								<div class="ticket-item table-layout">
									<div class="ticket-handle va-m">
										<div class="cBox ml10">
											<input type="checkbox" id="headercBox10" name="check" value="None" />
											<label for="headercBox10"></label>
										</div>
									</div>
									<div class="ticket-body p10 va-m"><b class="text-muted">[#5]</b> - PHP Form validation errors occuring on email page<span class="label label-sm bg-purple2 ml10">PHP</span></div>
								</div>
								<div class="ticket-item table-layout">
									<div class="ticket-handle va-m">
										<div class="cBox ml10">
											<input type="checkbox" id="headercBox8" name="check" value="None" />
											<label for="headercBox8"></label>
										</div>
									</div>
									<div class="ticket-body p10 pb15 va-m"><b class="text-muted">[#3]</b> - Mailbox Validation Errors on Firefox</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="btn-group" id="toggle_sidemenu_r">
					<button type="button"> <span class="glyphicons glyphicons-parents"></span> </button>
				</div>
			</div> -->
		</div>
	</header>