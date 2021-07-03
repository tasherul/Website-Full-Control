@extends('admin._layout.master')



@section('contant')
<div id="content">
			
					<div>
						<form action="{{url('Header-Insert-Process')}}" method="POST" enctype='multipart/form-data'>
						{{ csrf_field() }}


						<div class="panel">
							<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span>Header </span> </div>
							<div class="panel-body">

								@include('admin._layout.message')

								<form class="cmxform" id="altForm" method="get">
									<div class="form-group">
										<label for="name">Enable</label>
										<label for="name">If this Section Enable then It will show in Home Page</label>
                                        @if($data[34]->value_1=='true')
										    <input name="enable" type="checkbox" checked class="form-control"  />
                                        @else
                                            <input name="enable" type="checkbox" class="form-control"  />
                                        @endif
									</div>
									<div class="form-group">
										<label for="name">Address</label>
										<input id="name" name="address" type="text" class="form-control" placeholder="Enter Address" value="{{$data[17]->value_1}}" />
									</div>
									<div class="form-group">
										<label for="wage">Mobile</label>
										<input id="wage" name="mobile" type="text" class="form-control" placeholder="Enter Mobile" value="{{$data[18]->value_1}}" />
									</div>
									<div class="form-group">
										<label> Email </label>
										<input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{$data[19]->value_1}}">
									</div>
									<div class="form-group">
										<label> Facebook</label>
										<input type="text" class="form-control" name="link_1" placeholder="Enter Facebook" value="{{$data[20]->value_1}}">
									</div>
									<div class="form-group">
										<label> Twitter</label>
										<input type="text" class="form-control" name="link_2" placeholder="Enter Twitter Link" value="{{$data[21]->value_1}}">
									</div>
									<div class="form-group">
										<label> Linkedin</label>
										<input type="text" class="form-control" name="link_3" placeholder="Enter Linkedin Link" value="{{$data[22]->value_1}}">
									</div>
									<div class="form-group">
										<label> Google-plus</label>
										<input type="text" class="form-control" name="link_4" placeholder="Enter Google plus Link" value="{{$data[23]->value_1}}">
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