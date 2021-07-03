<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<title>Admin Panel</title>
<meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
<meta name="description" content="Fusion - A Responsive HTML5 Admin UI Template Theme">
<meta name="author" content="AdminDesigns">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>

<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/vendor.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/theme.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/utility.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/custom.css">

<link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico">
</head>
<body class="dashboard-page">


@include('admin._layout.header')

<div id="main">
	@include('admin._layout.sidebar')

	<section id="content_wrapper">
		   @yield('contant')    
	</section>


























<script type="text/javascript" src="{{asset('assets')}}/vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/jquery/jquery_ui/jquery-ui.min.js"></script> 
<script type="text/javascript" src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/raphael/raphael.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/morris/morris.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/datatables/js/datatables.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/clndr/clndr.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/clndr/moment.js"></script>

<script type="text/javascript" src="{{asset('assets')}}/vendor/editors/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/editors/summernote/summernote.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/editors/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/vendor/editors/markitup/sets/default/set.js"></script>


<script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/jqueryflot/jquery.flot.min.js"></script>

<script type="text/javascript" src="{{asset('assets')}}/js/utility/spin.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/utility/underscore-min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/ajax.js"></script>

<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
tinymce.init({
  selector: 'textarea#markitup',
  plugins: 'code',
  height: 500,
  extended_valid_elements: 'img[class=myclass|!src|border:0|alt|title|width|height|style]',
  invalid_elements: 'strong,b,em,i',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

  </script>
<!-- <script type="text/javascript" src="{{asset('assets')}}/js/custom.js"></script> -->


<script type="text/javascript">

	jQuery(document).ready(function () {
	  
	// "use strict";

	     // Init Theme Core 	  
	     Core.init();

	     // Enable Ajax Loading 	  
	     Ajax.init();

		 // Dashboard Widgets Slidedown
		 $('.dashboard-widget-tray .btn:first-child').on('click', function() {
		 	$('#widget-dropdown').slideToggle('fast'); 
		 });

		 $("#markitup2").markItUp(mySettings);

// Init Summernote
$('.summernote').summernote({
	height: 255, //set editable area's height
	focus: false //set focus editable area after Initialize summernote
});
	  // Init Markitup Editor
	 

	    // Init Datatables with Tabletools Addon	
  $('#datatable').dataTable( {
	"aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ -1 ] }],
	"oLanguage": { "oPaginate": {"sPrevious": "", "sNext": ""} },
	"iDisplayLength": 5,
	"aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
	"sDom": 'T<"panel-menu dt-panelmenu"lfr><"clearfix">tip',
	"oTableTools": {
		"sSwfPath": "vendor/plugins/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
	}
  });	
  
  // Add Placeholder text to datatables filter bar
  $('.dataTables_filter input').attr("placeholder", "Enter Filter Terms Here....");
  
  // Manually Init Chosen on Datatables Filters
  $("select[name='datatable_length']").chosen();	
  
  // Init Xeditable Plugin
  $.fn.editable.defaults.mode = 'popup';
  $('.xedit').editable();
 
 
  });
</script>
</body>


</html>
