@extends('admin._layout.master')



@section('contant')
<div id="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('contact-details-Process')}}" method="POST">
				@csrf
				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Contact Details </span> </div>
					<div class="panel-body">
						@include('admin._layout.message')	
						<div class="cmxform" id="altForm" method="get">
							<div class="form-group">
								<label for="name">Description</label>
								<input value="{{$data[78]->value_1}}" name="description" type="text" class="form-control" placeholder="Enter Slider Title" />
                            </div>
                            
							<div class="form-group">
								<label for="name">Contact Location</label>
								<input   value="{{$data[79]->value_1}}"  name="location" type="text" class="form-control" placeholder="Enter Slider Title" />
							</div>
							<div class="form-group">
								<label for="name">Mobile no 1</label>
								<input   value="{{$data[80]->value_1}}"  name="mobile1" type="text" class="form-control" placeholder="Enter Slider Title"  />
							</div>
                            
                            <div class="form-group">
								<label for="name">Mobile no 2</label>
								<input  value="{{$data[81]->value_1}}"  name="mobile2" type="text" class="form-control" placeholder="Enter Slider Title"  />
                            </div>
                            
                            <div class="form-group">
								<label for="name">Email</label>
								<input value="{{$data[82]->value_1}}"  name="email" type="email" class="form-control" placeholder="Enter Slider Title" />
							</div>
                            
                            <div class="form-group">
								<label for="name">Website</label>
								<input  value="{{$data[83]->value_1}}"  name="website" type="text" class="form-control" placeholder="Enter Slider Title" />
                            </div>
                            
							<div class="form-group">
								<label for="name">Latitude</label>
								<input   value="{{$data[84]->value_1}}"  name="latitude" type="text" class="form-control" placeholder="Enter Slider Title" />
							</div>
                            
                            <div class="form-group">
								<label for="name">Longitude</label>
								<input   value="{{$data[85]->value_1}}"  name="longitude" type="text" class="form-control" placeholder="Enter Slider Title" />
							</div>
							
							<div class="form-group">
								<input class="submit btn btn-success" type="submit" value="Update Data" />
							</div>
						</div>
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