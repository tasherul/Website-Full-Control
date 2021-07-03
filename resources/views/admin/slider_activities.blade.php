@extends('admin._layout.master')



@section('contant')

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">

		<form action="{{url('Activities-Slider-Update')}}" method="POST" enctype='multipart/form-data'>
			{{ csrf_field() }}
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="modal-title"><i class="fa fa-lock pr5"></i> Activities Slider Update</div>
				</div>
				<div class="modal-body">
					<form class="cmxform" id="altForm" method="get">
						<div id="login-avatar"> <img  id="img" width="150" height="112" alt="avatar"> </div>
						<div class="form-group">
							<input type="hidden" name="hidden_id" id='hidden_id'>
							<input type="hidden" name="hidden_img" id='hidden_img'>


								<div class="form-group">
								<label for="name">Activities</label>

								<select name="activities_id" id="name" class="form-control">
								  <option value="">Select Activities</option>
								  @foreach($show_act as $key)
								  <option value="{{$key->id}}">{{$key->title}}</option>
								  @endforeach
								</select>
							</div>
									
								</div>
								<div class="form-group">
									<label for="wage">Slider Title</label>
									<input id="description" name="discription" type="text" class="form-control" placeholder="Enter Slider Discription"/>
								</div>
								<div class="form-group">
									<label> Slider Image </label>
									<input type="file" name="slider_image" class="form-control">
								</div>
								
								
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Update</button>
				</div>
			</div>
		</form>

	</div>
</div>

<div id="content">
	<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="{{url('Activities-Slider-Insert-Process')}}" method="POST" enctype='multipart/form-data'>
				{{ csrf_field() }}


				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Home Slider </span> </div>
					<div class="panel-body">

						@include('admin._layout.message')

						<form class="cmxform" id="altForm" method="get">
							<div class="form-group">
								<label for="name">Activities</label>

								<select name="activities_id" id="cars" class="form-control">
								  <option value="0">Select Activities</option>
								  @foreach($show_act as $key)
								  <option value="{{$key->id}}">{{$key->title}}</option>
								  @endforeach
								</select>
							</div>
							<div class="form-group">
								<label> Tittle </label>
								<input type="text" name="activities_titel" class="form-control">
							</div>
							
							<div class="form-group">
								<label> Slider Image </label>
								<input type="file" name="slider_image" class="form-control">
							</div>
							
							<div class="form-group">
								<input class="submit btn btn-success pull-right" type="submit" value="Submit" />
							</div>
						</form>
					</div>
				</div>
			</form>






		</div>
		<div class="col-md-12">




			<div class="panel panel-visible">
				<div class="panel-heading">
					<div class="panel-title hidden-xs"> <span class="glyphicon glyphicon-tasks"></span> Slider View</div>
				</div>
				<div class="panel-body pbn">
					<table class="table table-striped table-bordered table-hover" id="datatable">
						<thead>

							<tr>
								<th>SN</th>
								<th class="hidden-xs">Activities</th>
								<th>Slider Tittle</th>
								<th>Slider Image</th>
								
								<th class="text-center hidden-xs">Actions</th>
							</tr>
						</thead>
						@php $i=0; @endphp
						@foreach($slider_act as $key)
						@php $i++; @endphp
							<tr>
								<td> @php echo $i; @endphp</td>
								<td>{{$key->title}}</td>
								<td>{{$key->act_s_titel}}</td>
								
								<td><img src="storage/app/{{$key->image}}" width="100" height="100" /> </td>
								<td class="hidden-xs text-center">
									<div class="btn-group">
										<a href="#" onclick="_show({{$key->id}},'{{$key->title}}','{{$key->act_s_titel}}','{{$key->image}}','{{$key->act_id}}')" title="Edit" data-toggle="modal" data-target="#formModal" class="btn bg-grey2 btn-gradient btn-sm"> <span class="glyphicons glyphicon-pencil"></span> </a>
										<a href="{{url('activities-slider-delete/'.$key->id) }}" title="Delete" class="btn bg-red3 btn-gradient btn-sm"> <span class="glyphicon glyphicon-trash"></span> </a>
									</div>
								</td>
								
							</tr>
						@endforeach

						</table>
				</div>
			</div>



<script>
	function _show(id,title,act_s_titel,image,act_id)
	{
		//alert(act_s_titel);
		$('#name').val(act_id); 
		$('#description').val(act_s_titel); 
		
		$('#hidden_id').val(id); 
		$('#hidden_img').val(image); 
		document.getElementById('img').src='storage/app/'+image; 
       
	}
</script>





		</div>
	</div>
	</section>
</div>


@endsection