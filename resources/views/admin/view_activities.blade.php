@extends('admin._layout.master')



@section('contant')
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">

		<form action="{{url('activities-Update')}}" method="POST" enctype='multipart/form-data'>
			{{ csrf_field() }}
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="modal-title"><i class="fa fa-lock pr5"></i> Activities Update</div>
				</div>
				<div class="modal-body">
					<form class="cmxform" id="altForm" method="get">
						<div id="login-avatar"> <img  id="img" width="150" height="112" alt="avatar"> </div>
						<div class="form-group">
							<input type="hidden" name="hidden_id" id='hidden_id'>
							<input type="hidden" name="hidden_img" id='hidden_img'>


									<label for="name">Title</label>
									<input id="title" name="title" type="text" class="form-control" placeholder="Enter Slider Title" />
								</div>
								<div class="form-group">
								<label for="wage">Description</label>
								<textarea id="markitup2" name="description" rows="10"> </textarea>

							</div>
							<div class="form-group">
									<label> Activities Image </label>
									<input type="file" name="activities_image" class="form-control">
							</div>
								
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>

	</div>
</div>
<div id="content">
	<div class="row">
		<div class="col-md-12">
			
				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Activities View </span> </div>

@include('admin._layout.message')	
					<div class="panel-body pbn">
					<table class="table table-striped table-bordered table-hover" id="datatable">
						<thead>
							<tr>
								<th>SN</th>
								<th class="hidden-xs">image</th>
								<th class="hidden-xs">Title</th>
								
								<th class="visible-lg">Description</th>
								<th class="hidden-xs hidden-sm">Slug</th>
								<th class="text-center hidden-xs">Actions</th>
							</tr>
						</thead>
						<tbody>
					@foreach($show_news as $key)
							<tr>
								
								<td>{{$key->id}}</td>
								<td><img src="storage/app/{{$key->activities_image}}" width="100" height="100" /> </td>
								<td>{{$key->title}}</td>
								<td>{{$key->Discription}}</td>
								<td>{{$key->slug}}</td>
								<td class="hidden-xs text-center">
									<div class="btn-group">
										<a href="#" onclick="_show({{$key->id}})" title="Edit" data-toggle="modal" data-target="#formModal" class="btn bg-grey2 btn-gradient btn-sm"> <span class="glyphicons glyphicon-pencil"></span> </a>
										<a href="{{url('activities-delete/'.$key->id) }}" title="Delete" class="btn bg-red3 btn-gradient btn-sm"> <span class="glyphicon glyphicon-trash"></span> </a>
									</div>
								</td>
								
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>


					</div>
				</div>
			
		</div>
	</div>
	</section>
</div>

<script>
	function _show(id) {
		$.ajax({
          type: "GET",
          url: 'activities_update_view/'+id,
          dataType: 'JSON',
          error: function (xhr, status, error) {
            var errorMessage = xhr.status + ': ' + xhr.statusText;
            alert(errorMessage);
          },
          success: function (data) {
          //alert(data.id);  
		$('#hidden_id').val(data.id)
		$('#title').val(data.title)
		$('#markitup2').val(data.Discription)
		$('#hidden_img').val(data.activities_image)
		document.getElementById('img').src='storage/app/'+data.activities_image; 


          
        
      }
      });

	}
	
</script>

@endsection