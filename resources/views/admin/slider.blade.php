@extends('admin._layout.master')



@section('contant')

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">

		<form action="{{url('Home-Slider-Update')}}" method="POST" enctype='multipart/form-data'>
			{{ csrf_field() }}
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="modal-title"><i class="fa fa-lock pr5"></i> Home Slider Update</div>
				</div>
				<div class="modal-body">
					<form class="cmxform" id="altForm" method="get">
						<div id="login-avatar"> <img  id="img" width="150" height="112" alt="avatar"> </div>
						<div class="form-group">
							<input type="hidden" name="hidden_id" id='hidden_id'>
							<input type="hidden" name="hidden_img" id='hidden_img'>


									<label for="name">Title</label>
									<input id="name" name="titel" type="text" class="form-control" placeholder="Enter Slider Title" />
								</div>
								<div class="form-group">
									<label for="wage">Description</label>
									<input id="description" name="discription" type="text" class="form-control" placeholder="Enter Slider Description"/>
								</div>
								<div class="form-group">
									<label> Slider Image </label>
									<input type="file" name="slider_image" class="form-control">
								</div>
								
								<div class="form-group">
									<label> Link </label>
									<input type="text" id="link" class="form-control" name="link" placeholder="Enter Link">
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
			<form action="{{url('Slider-Insert-Process')}}" method="POST" enctype='multipart/form-data'>
				{{ csrf_field() }}


				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Home Slider </span> </div>
					<div class="panel-body">

						@include('admin._layout.message')

						<form class="cmxform" id="altForm" method="get">
							<div class="form-group">
								<label for="name">Title</label>
								<input id="name" name="titel" type="text" class="form-control" placeholder="Enter Slider Title" required />
							</div>
							<div class="form-group">
								<label for="wage">Description</label>
								<input id="wage" name="discription" type="text" class="form-control" placeholder="Enter Slider Discription" required />
							</div>
							<div class="form-group">
								<label> Slider Image </label>
								<input type="file" name="slider_image" class="form-control">
							</div>
							<div class="form-group">
								<label> Link </label>
								<input type="text" class="form-control" name="link" placeholder="Enter Link">
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
								<th class="hidden-xs">Image</th>
								<th>Title</th>
								<th class="visible-lg">Short Description</th>
								<th class="hidden-xs hidden-sm">Link</th>
								<th class="text-center hidden-xs">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php $i=0; @endphp
							@foreach($slide as $key)
							@php $i++; @endphp
							<tr>
								<td><span class="xedit">@php echo $i; @endphp</span></td>
								<td><img src="storage/app/{{$key->image}}" width="100" height="100" /> </td>
								<td>{{$key->titel}}</td>
								<td class="visible-lg">{{$key->discription}}</td>
								<td>{{$key->link}}</td>
								<td class="hidden-xs text-center">
									<div class="btn-group">
										<a href="#" onclick="_show({{$key->id}},'{{$key->image}}','{{$key->titel}}','{{$key->discription}}','{{$key->link}}' )" title="Edit" data-toggle="modal" data-target="#formModal" class="btn bg-grey2 btn-gradient btn-sm"> <span class="glyphicons glyphicon-pencil"></span> </a>

										<a href="delect-slide/{{$key->id}}" title="Delete" class="btn bg-red3 btn-gradient btn-sm"> <span class="glyphicon glyphicon-trash"></span> </a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>



<script>
	function _show(id,image,title,discription,link)
	{
		$('#name').val(title); 
		$('#description').val(discription); 
		$('#link').val(link); 
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