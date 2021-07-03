@extends('admin._layout.master')



@section('contant')
<div id="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('Activities-Insert-Process')}}" method="POST" enctype='multipart/form-data'>
				@csrf
				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Add Services </span> </div>
					<div class="panel-body">
						@include('admin._layout.message')	
						<form class="cmxform" id="altForm" method="get">
							<div class="form-group">
								<label for="name">Title</label>
								<input id="name" name="title" type="text" class="form-control" placeholder="Enter Slider Title" required />
							</div>
							<div class="form-group">
								<label for="name">Short Description</label>
								<input id="name" name="short_description" type="text" class="form-control" placeholder="Enter Short Description" required />
							</div>
							<div class="form-group">
								<label for="wage">Description</label>
								<textarea id="markitup" name="description" rows="10"> </textarea>

							</div>

							<div class="form-group">
								<label for="name">Services Image</label>
								<input id="name" name="activities_image" type="file" class="form-control" placeholder="Enter Slider Title" required />
							</div>
							
							<div class="form-group">
								<input class="submit btn btn btn-success pull-right" type="submit" value="Submit" />
							</div>
						</form>
					</div>
				</div>
			</form>
		</div>
	</div>
	</section>
</div>

<script type="text/javascript">
	function _ck() {
		alert('ok');
	}

</script>

@endsection