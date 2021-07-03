@extends('admin._layout.master')



@section('contant')
<div id="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('password-chenge')}}" method="POST" enctype='multipart/form-data'>
            {{ csrf_field() }}
				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Profile </span> </div>
					<div class="panel-body">
						@include('admin._layout.message')	
						<div class="cmxform" id="altForm" method="get">
                        @php $dt = Session::get('admin'); 
                        
                        $data = DB::table('admin')->where('id','=' ,$dt->id )->select('*')->get()->first();
                        @endphp
                        <div class="form-group">
								<label for="name">Name</label>
								<input  name="name" type="text" class="form-control" placeholder="name" value="{{$data->Full_name}}" required />
							</div>
                            <input  name="hinndenpass" type="hidden"  value="{{$data->Password}}"  />
                            <input  name="hinndenid" type="hidden"  value="{{$data->id}}"  />

                            <div class="form-group">
								<label for="name">username</label>
								<input  name="username" type="text" class="form-control" value="{{$data->user_name}}" placeholder="new password" required />
                            </div>
                            
							<div class="form-group">
								<label for="name">New Password</label>
								<input  name="newpass" type="text" class="form-control" placeholder="new password"  />
							</div>

							<div class="form-group">
								<label for="name">Confirm Password</label>
								<input  name="confirmpass" type="text" class="form-control" placeholder="confirm password"  />
                            </div>
                            
                            <div class="form-group">
								<label for="name">Profile Photo</label>
								<input  name="image" type="file" class="form-control" />
                            </div>
							
							<div class="form-group">
								<input class="submit btn bg-purple pull-right" type="submit" value="Submit" />
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