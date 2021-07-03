@extends('admin._layout.master')



@section('contant')

<div id="content">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-resize-full"></span> Slider Feature  </span>
									<ul class="nav panel-tabs">
										<li  class="hidden-xs"><a href="#tab4" data-toggle="tab">Slider Feature 2</a></li>
										<li class="active"> <a href="#tab5" data-toggle="tab">Slider Feature 1</a></li>
										<li ><a href="#tab6" class="expanding-bars-btn" data-toggle="tab">Schedule</a></li>
									</ul>
								</div>
								<div class="panel-body alerts-panel">
									<div class="tab-content border-none pn">
										<div id="tab4" class="tab-pane">
											<h4 class="panel-body-title">ADD SLIDER FEATURE 2</h4>
					<form action="{{url('Slider-Fetcher-Insert2')}}" method="POST" enctype='multipart/form-data'>
						@csrf
						<div class="panel">
							<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Field Validation </span> </div>
							<div class="panel-body">
								

								<form class="cmxform" id="altForm" method="get">
									<div class="form-group">
										<label for="name">Title</label>
										<input id="name" name="titel2" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[5]->value_1}}" />
									</div>
									<div class="form-group">
										<label for="wage">Description</label>
										<input id="wage" name="discription2" type="text" class="form-control" placeholder="Enter Slider Discription" value="{{$data[6]->value_1}}" />
									</div>
									
									<div class="form-group">
										<label> Link </label>
										<input type="text" class="form-control" name="link2" placeholder="Enter Link" value="{{$data[7]->value_1}}">
									</div>
									<div class="form-group">
										<label> Button Name </label>
										<input type="text" class="form-control" name="button_name2" placeholder="Enter Link" value="{{$data[8]->value_1}}">
									</div>
									<div class="form-group">
										<label> Button Link </label>
										<input type="text" class="form-control" name="button_link2" placeholder="Enter Link" value="{{$data[9]->value_1}}">
									</div>
									<div class="form-group">
										<input class="submit btn btn-success pull-right" type="submit" value="Update" />
									</div>
								</form>
							</div>
						</div>
					</form>
					</div>
					<div id="tab5" class="tab-pane active">
					<h4 class="panel-body-title">ADD SLIDER FEATURE 1</h4>
					<form action="{{url('Slider-Fetcher-Insert')}}" method="POST" enctype='multipart/form-data'>
						@csrf
						<div class="panel">
							<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Field Validation </span> </div>
							<div class="panel-body">
								
								<form class="cmxform" id="altForm" method="get">

									<div class="form-group">
										<label for="name">Enable</label>
										<label for="name">If this Section Enable then It will show in Home Page</label>
                                        @if($data[50]->value_1=='true')
										    <input name="enable" type="checkbox" checked class="form-control"  />
                                        @else
                                            <input name="enable" type="checkbox" class="form-control"  />
                                        @endif
									</div>

									<div class="form-group">
										<label for="name">Title</label>
										<input id="name" name="titel" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[0]->value_1}}" />
									</div>
									<div class="form-group">
										<label for="wage">Description</label>
										<input id="wage" name="discription" type="text" class="form-control" placeholder="Enter Slider Discription" value="{{$data[1]->value_1}}" />
									</div>
									
									<div class="form-group">
										<label> Link </label>
										<input type="text" class="form-control" name="link" placeholder="Enter Link" value="{{$data[2]->value_1}}">
									</div>
									<div class="form-group">
										<label> Button Name </label>
										<input type="text" class="form-control" name="button_name" placeholder="Enter Link" value="{{$data[3]->value_1}}">
									</div>
									<div class="form-group">
										<label> Button Link </label>
										<input type="text" class="form-control" name="button_link" placeholder="Enter Link" value="{{$data[4]->value_1}}">
									</div>
									<div class="form-group">
										<input class="submit btn btn-success pull-right" type="submit" value="Update" />
									</div>
								</form>
							</div>
						</div>
					</form>
										</div>
										<div id="tab6" class="tab-pane ">
											<h4 class="panel-body-title">ADD SCHEDULE</h4>
											
					<form action="{{url('Schedule-Insert')}}" method="POST" enctype='multipart/form-data'>
						@csrf
						<div class="panel">
							<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Field Validation </span> </div>
							<div class="panel-body">
								@include('admin._layout.message')
								<form class="cmxform" id="altForm" method="get">
									<div class="form-group">
										<label for="name">Schedule Title</label>
										<input id="name" name="s_titel" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[10]->value_1}}" />
									</div>
									
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
										<label for="name">Schedule Name 1</label>
										<input id="name" name="s_name_1" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[11]->value_1}}" />
									</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
										<label for="name">Schedule Time</label>
										<input id="name" name="s_time_1" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[12]->value_1}}" />
									</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
										<label for="name">Schedule Name 2</label>
										<input id="name" name="s_name_2" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[13]->value_1}}" />
									</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
										<label for="name">Schedule Time</label>
										<input id="name" name="s_time_2" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[14]->value_1}}" />
									</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
										<label for="name">Schedule Name 3</label>
										<input id="name" name="s_name_3" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[15]->value_1}}" />
									</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
										<label for="name">Schedule Time</label>
										<input id="name" name="s_time_3" type="text" class="form-control" placeholder="Enter Slider Title" value="{{$data[16]->value_1}}" />
									</div>
										</div>
										
									</div>
									<div class="form-group">
										<input class="submit btn btn-success pull-right" type="submit" value="Update" />
									</div>
								</form>
							</div>
						</div>
					</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						

													
														
														
													

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

	<script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script> 
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="vendor/bootstrap/plugins/holder/holder.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/plugins/paginator/bootstrap-paginator.js"></script>
	<script type="text/javascript" src="vendor/plugins/gritter/jquery.gritter.min.js"></script>

	<script type="text/javascript" src="js/utility/spin.min.js"></script>
	<script type="text/javascript" src="js/utility/underscore-min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function () {

	"use strict";

     // Init Theme Core 	  
     Core.init();

     // Enable Ajax Loading 	  
     Ajax.init();     
     
	//expanding progress bars demo
	$('.expanding-bars-pane .progress-bar').each(function (i,element) {
		var pbarWidth = i + 1;
		$(this).animate({width: (pbarWidth * 25) + '%' });
	});

	//pager and pagination toggle sizes
	var pagerOptions = [];
	var pagerToggle = $(".toggle-pager-style .pager-style-option");
	var pagerCount = $(pagerToggle).length;	
	
	
	$(pagerToggle).each(function (index, element){
		var optionVal = $(element).data('opt');
		
		// gather options and push to array
		pagerOptions.push(optionVal);
		
		// on last loop filter for uniqueness
		if (index == pagerCount - 1) {
			jQuery.unique(pagerOptions);
		}

	});
	
	$(pagerToggle).click(function () {
		var pagerStyle = $(this).data('opt');
		var pagerSize = $(this).data('size');
		var Options = pagerOptions.join(" ");	
		
		$('#pager-examples').find("ul").removeClass('pager-sm pager-lg').addClass('pager-' + pagerStyle); 
		$('#pagination-examples').find("ul").removeClass('pagination-sm pagination-lg').addClass('pagination-' + pagerStyle); 
		$('#pager-title').text('Pagers - ' + pagerSize); 
		$('#pagination-title').text('Paginations - ' + pagerSize); 
		$('#paginator-title').text('Dynamic Pagination - ' + pagerSize); 
		// remove active class from options and add
		// the class to the newly clicked option
		$(this).siblings().removeClass("active");
		$(this).addClass("active");
		
	});
	
    // paginator options
    var options = {
    	currentPage: 3,
    	totalPages: 10,
    	shouldShowPage:function(type, page, current){
    		switch(type)
    		{
    			case "first":
    			case "last":
    			return false;
    			default:
    			return true;
    		}
    	},
    	onPageChanged: function(e,oldPage,newPage){
    		$('#paginator-content').text("Current page changed, old: "+oldPage+" new: "+newPage);
    	}
    }
	// init paginator
	$('#paginator-example').bootstrapPaginator(options);
	
	// init tooltip
	$('.tooltip-demo').tooltip({
		selector: "[data-toggle=tooltip]",
		container: "body"
	})
	
	// init popover
	$("[data-toggle=popover]").popover({html:true})
	
	// popover auto close timer  
	$('.popover-demo button').on('show.bs.popover', function () {
		var This = $(this);
		
		var animate = window.setTimeout( function(){
			$(This).popover('hide')
		},3500);
	}); 
	
	$('#add-sticky').click(function(){
		var unique_id = $.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'This is a sticky notice!',
				// (string | mandatory) the text inside the notification
				text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				// (string | optional) the image to display on the left
				image: 'img/avatars/1.jpg',
				// (bool | optional) if you want it to fade out on its own or just sit there
				sticky: true,
				// (int | optional) the time you want it to be alive for before fading out
				time: '',
				// (string | optional) the class name you want to apply to that specific message
				class_name: 'my-sticky-class'
			});
		return false;

	});

	$('#add-regular').click(function(){
		$.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'This is a regular notice!',
				// (string | mandatory) the text inside the notification
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				// (string | optional) the image to display on the left
				image: 'img/avatars/1.jpg',
				// (bool | optional) if you want it to fade out on its own or just sit there
				sticky: false,
				// (int | optional) the time you want it to be alive for before fading out
				time: ''
			});
		return false;
	});

	$('#add-max').click(function(){
		$.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'This is a notice with a max of 3 on screen at one time!',
                // (string | mandatory) the text inside the notification
                text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                // (string | optional) the image to display on the left
                image: 'img/avatars/1.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (function) before the gritter notice is opened
                before_open: function(){
                	if($('.gritter-item-wrapper').length == 3)
                	{
                        // Returning false prevents a new gritter from opening
                        return false;
                    }
                }
            });
		return false;
	});

	$('#add-without-image').click(function(){
		$.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'This is a notice without an image!',
				// (string | mandatory) the text inside the notification
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.'
			});
		return false;
	});

	$('#add-gritter-light').click(function(){
		$.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'This is a light notification',
                // (string | mandatory) the text inside the notification
                text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                class_name: 'gritter-light'
            });
		return false;
	});

	$('#add-with-callbacks').click(function(){
		$.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'This is a notice with callbacks!',
				// (string | mandatory) the text inside the notification
				text: 'The callback is...',
				// (function | optional) function called before it opens
				before_open: function(){
					alert('I am called before it opens');
				},
				// (function | optional) function called after it opens
				after_open: function(e){
					alert("I am called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + e);
				},
				// (function | optional) function called before it closes
				before_close: function(e, manual_close){
					var manually = (manual_close) ? 'The "X" was clicked to close me!' : '';
					alert("I am called before it closes: I am passed the jQuery object for the Gritter element... \n" + manually);
				},
				// (function | optional) function called after it closes
				after_close: function(e, manual_close){
					var manually = (manual_close) ? 'The "X" was clicked to close me!' : '';
					alert('I am called after it closes. ' + manually);
				}
			});
		return false;
	});

	$('#add-sticky-with-callbacks').click(function(){
		$.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'This is a sticky notice with callbacks!',
				// (string | mandatory) the text inside the notification
				text: 'Sticky sticky notice.. sticky sticky notice...',
				// Stickeh!
				sticky: true,
				// (function | optional) function called before it opens
				before_open: function(){
					alert('I am a sticky called before it opens');
				},
				// (function | optional) function called after it opens
				after_open: function(e){
					alert("I am a sticky called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + e);
				},
				// (function | optional) function called before it closes
				before_close: function(e){
					alert("I am a sticky called before it closes: I am passed the jQuery object for the Gritter element... \n" + e);
				},
				// (function | optional) function called after it closes
				after_close: function(){
					alert('I am a sticky called after it closes');
				}
			});
		return false;

	});

	$("#remove-all").click(function(){
		$.gritter.removeAll();
		return false;

	});

	$("#remove-all-with-callbacks").click(function(){
		$.gritter.removeAll({
			before_close: function(e){
				alert("I am called before all notifications are closed.  I am passed the jQuery object containing all  of Gritter notifications.\n" + e);
			},
			after_close: function(){
				alert('I am called after everything has been closed.');
			}
		});
		return false;
	});

});
</script>

@endsection