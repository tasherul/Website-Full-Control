@extends('admin._layout.master')



@section('contant')
<div id="content">

    <div class="col-md-8">
        <form action="{{url('About-Members-Process')}}" method="POST" enctype='multipart/form-data'>
            {{ csrf_field() }}


            <div class="panel">
                <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span>Make a Member </span> </div>
                <div class="panel-body">

                    @include('admin._layout.message')

                    <div class="cmxform" id="altForm">

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-5">

                                    <label for="name">If this Section Enable then It will show in Home Page</label>
                                    @if($data[59]->value_1=='true')
                                    <input name="enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input id="name" name="title" type="text" class="form-control" placeholder="title" value="{{$data[60]->value_1}}" />
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">

                                    <label for="name">Enable Member 1</label>
                                    @if($data[61]->value_1=='true')
                                    <input name="mamber_1_enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="mamber_1_enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="member_1_name" type="text" class="form-control" placeholder="title" value="{{$data[62]->value_1}}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Designation</label>
                                    <input id="name" name="member_1_deg" type="text" class="form-control" placeholder="title" value="{{$data[63]->value_1}}" />
                                </div>
                                <div class="form-group">

                                    <label> Side Image </label>
                                    <input type="file" name="member_1_image" class="form-control" placeholder="link" >
                                </div>
                            </div>
                            <div class="col-md-2">
                            <img src="storage/app/{{$data[64]->value_1}}" width="100%"  />
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">

                                    <label for="name">Enable Member 2</label>
                                    @if($data[65]->value_1=='true')
                                    <input name="mamber_2_enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="mamber_2_enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="member_2_name" type="text" class="form-control" placeholder="title" value="{{$data[66]->value_1}}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Designation</label>
                                    <input id="name" name="member_2_deg" type="text" class="form-control" placeholder="title" value="{{$data[67]->value_1}}" />
                                </div>
                                <div class="form-group">

                                    <label> Side Image </label>
                                    <input type="file" name="member_2_image" class="form-control" placeholder="link">
                                </div>
                            </div>
                            <div class="col-md-2">
                            <img src="storage/app/{{$data[68]->value_1}}" width="100%"  />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">

                                    <label for="name">Enable Member 3</label>
                                    @if($data[69]->value_1=='true')
                                    <input name="mamber_3_enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="mamber_3_enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="member_3_name" type="text" class="form-control" placeholder="title" value="{{$data[70]->value_1}}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Designation</label>
                                    <input id="name" name="member_3_deg" type="text" class="form-control" placeholder="title" value="{{$data[71]->value_1}}" />
                                </div>
                                <div class="form-group">

                                    <label> Side Image </label>
                                    <input type="file" name="member_3_image" class="form-control" placeholder="link" >
                                </div>
                            </div>
                            <div class="col-md-2">
                            <img src="storage/app/{{$data[72]->value_1}}" width="100%"  />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">

                                    <label for="name">Enable Member 4</label>
                                    @if($data[73]->value_1=='true')
                                    <input name="mamber_4_enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="mamber_4_enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="member_4_name" type="text" class="form-control" placeholder="title" value="{{$data[74]->value_1}}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Designation</label>
                                    <input id="name" name="member_4_deg" type="text" class="form-control" placeholder="title" value="{{$data[75]->value_1}}" />
                                </div>
                                <div class="form-group">

                                    <label> Side Image </label>
                                    <input type="file" name="member_4_image" class="form-control" placeholder="link" >
                                </div>
                            </div>
                            <div class="col-md-2">
                            <img src="storage/app/{{$data[76]->value_1}}" width="100%"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="submit btn btn-success pull-right" type="submit" value="Update" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>









@endsection