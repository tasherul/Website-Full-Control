@extends('admin._layout.master')



@section('contant')
<div id="content">

	<div class="col-md-8">
		<form action="{{url('video-process')}}" method="POST" enctype='multipart/form-data'>
			{{ csrf_field() }}


			<div class="panel">
				<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span>RECOMMENDED VIDEO </span> </div>
				<div class="panel-body">

					@include('admin._layout.message')

					<form class="cmxform" id="altForm" method="get">
						<div class="form-group">

<div class="row">
							<div class="col-md-5">
								<label for="name">Enable</label>
								@if($data[24]->value_1=='true')
								<input name="enable" type="checkbox" checked class="form-control" />
								@else
								<input name="enable" type="checkbox" class="form-control" />
								@endif
							</div>
							<div class="col-md-4"> <img src="storage/app/{{$data[77]->value_1}}" width="150" height="150" /></div>
							</div>

						</div>
						<div class="form-group">
							<label for="name">Title</label>
							<input id="name" name="title" type="text" class="form-control" placeholder="title" value="{{$data[27]->value_1}}" />
						</div>
						<div class="form-group">
							<label for="wage">Discription</label>
							<textarea name="discription" id="markitup" class="form-control" placeholder="video discription" rows="20">{{$data[26]->value_1}}</textarea>
						</div>
						<div class="form-group">
							<label> Link </label>
							<input type="text" name="link" class="form-control" placeholder="link" value="{{$data[25]->value_1}}">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label> Video Thumbnail </label>
									<input type="file" name="thumbnail" class="form-control">
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









@endsection