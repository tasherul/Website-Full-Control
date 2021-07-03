<!DOCTYPE html>
<html>

<!-- Mirrored from admindesigns.com/demos/fusion/theme/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2018 17:41:49 GMT -->

<head>

  <meta charset="utf-8">
  <title>Fusion - A Responsive HTML5 Admin UI Template Theme</title>
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

  <link rel="shortcut icon" href="img/favicon.ico">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body class="minimal login-page">
  <script>
    var boxtest = localStorage.getItem('boxed');
    if (boxtest === 'true') {
      document.body.className += ' boxed-layout';
    }
  </script>
  <a href="{{url('/')}}" id="return-arrow"> <i class="fa fa-arrow-circle-left fa-3x text-light"></i> <span class="text-light"> Home  </span> </a>

  <div id="main">
    <div id="content">
      <div class="row">
        <div id="page-logo"> <h2 style="color: #fff;">Admin Panel</h2> </div>
      </div>
      <div class="row">

                  
        <form action="{{url('login_process')}}" method="POST">
        	@csrf
	        <div class="panel-bg">
	          <div class="panel">
	            <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock text-purple2"></span> Login </span> </div>
	            <div class="panel-body">
	         @if(count($errors)>0)
				<div class="alert alert-danger">
    				@foreach($errors->all() as $errors)
        				<li>{{$errors}}</li>
    				@endforeach
				</div>
			@endif

			@if(session('success'))
    			<div class="alert alert-success">
        		{{session('success')}}
    		</div>
			@endif

			@if(session('error'))
    		<div class="alert alert-danger">
        	{{session('error')}}
    		</div>
			@endif


			@if(session('message'))
    		<div class="alert alert-success">
        	{{session('message')}}
    		</div>
			@endif


			@if(session('delete_message'))
    		<div class="alert alert-danger">
        	{{session('delete_message')}}
    		</div>
			@endif
	              <div class="form-group">
	                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
	                  <input type="text" class="form-control" name="user_name" placeholder="User Name">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span> </span>
	                  <input type="password" class="form-control" name="password" placeholder="Password">
	                </div>
	              </div>
	            </div>

					
	            <div class="panel-footer">  <!--<span class="text-muted fs12 lh30"><a> Forgotten Password?</a></span>  -->
	            	<button type="submit" class="btn btn-sm bg-purple2 pull-right"><i class="fa fa-home"></i> Login</button>

	              <div class="clearfix"></div>
	            </div>
	          </div>
	        </div>
        </form>

      </div>
    </div>
  </div>

  <div class="overlay-black"></div>

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

  <script type="text/javascript" src="{{asset('assets')}}/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="{{asset('assets')}}/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script type="text/javascript" src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="{{asset('assets')}}/vendor/plugins/backstretch/jquery.backstretch.min.js"></script>

  <script type="text/javascript" src="{{asset('assets')}}/js/utility/spin.min.js"></script>
  <script type="text/javascript" src="{{asset('assets')}}/js/utility/underscore-min.js"></script>
  <script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>
  <script type="text/javascript" src="{{asset('assets')}}/js/ajax.js"></script>
  <script type="text/javascript" src="{{asset('assets')}}/js/custom.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {

      "use strict";

      // Init Theme Core     
      Core.init();

      // Enable Ajax Loading     
      Ajax.init();

      // Init Full Page BG(Backstretch) plugin
      $.backstretch("img/stock/splash/2.jpg");



    });
  </script>
</body>

<!-- Mirrored from admindesigns.com/demos/fusion/theme/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2018 17:41:50 GMT -->

</html>