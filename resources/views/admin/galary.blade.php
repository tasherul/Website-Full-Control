@extends('admin._layout.master')



@section('contant')


<div id="content">
	<div class="row">

		<div class="col-md-6">
			<form action="{{url('galary-process')}}" method="POST" enctype='multipart/form-data'>
				{{ csrf_field() }}


				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Gallary </span> </div>
					<div class="panel-body">

						@include('admin._layout.message')

						<div class="cmxform" id="altForm">
							<div class="form-group">
								<label for="name">Title</label>
								<input id="name" name="titel" type="text" class="form-control" placeholder="Enter Slider Title" />
							</div>
							<div class="form-group">
								<label> Gallary Image </label>
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<input class="submit btn btn-success pull-right" type="submit" value="Submit" />
							</div>
						</div>
					</div>
				</div>
			</form>






		</div>
		<div class="col-md-6">




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
								<th class="text-center hidden-xs">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php $i=0; @endphp
							@foreach($data as $key)
							@php $i++; @endphp
							<tr>
								<td><span class="xedit">@php echo $i; @endphp</span></td>
								<td><img src="storage/app/{{$key->image}}" width="100" height="100" /> </td>
								<td>{{$key->title}}</td>								
								<td class="hidden-xs text-center">
									<div class="btn-group">
										<a href="delect-galary/{{$key->id}}" title="Delete" class="btn bg-red3 btn-gradient btn-sm"> <span class="glyphicon glyphicon-trash"></span> </a>
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