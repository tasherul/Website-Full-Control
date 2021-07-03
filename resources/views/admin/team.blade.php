@extends('admin._layout.master')



@section('contant')
<div id="content">

    <div class="col-md-8">
        <form action="{{url('team-section-process')}}" method="POST" enctype='multipart/form-data'>
            {{ csrf_field() }}


            <div class="panel">
                <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span>Make a Team </span> </div>
                <div class="panel-body">

                    @include('admin._layout.message')

                    <div class="cmxform" id="altForm">

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-5">

                                    <label for="name">If this Section Enable then It will show in Home Page</label>
                                    @if($data[35]->value_1=='true')
                                    <input name="enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input id="name" name="title" type="text" class="form-control" placeholder="title" value="{{$data[36]->value_1}}" />
                        </div>
                        <div class="form-group">
                            <label for="wage">Description</label>
                            <textarea name="discription" id="markitup" class="form-control" placeholder="video discription" rows="15">{{$data[37]->value_1}}</textarea>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">

                                    <label for="name">Enable Member 1</label>
                                    @if($data[38]->value_1=='true')
                                    <input name="mamber_1_enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="mamber_1_enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="member_1_name" type="text" class="form-control" placeholder="title" value="{{$data[39]->value_1}}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Degignation</label>
                                    <input id="name" name="member_1_deg" type="text" class="form-control" placeholder="title" value="{{$data[40]->value_1}}" />
                                </div>
                                <div class="form-group">

                                    <label> Side Image </label>
                                    <input type="file" name="member_1_image" class="form-control" placeholder="link" >
                                </div>
                            </div>
                            <div class="col-md-2">
                            <img src="storage/app/{{$data[41]->value_1}}" width="100%"  />
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">

                                    <label for="name">Enable Member 2</label>
                                    @if($data[42]->value_1=='true')
                                    <input name="mamber_2_enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="mamber_2_enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="member_2_name" type="text" class="form-control" placeholder="title" value="{{$data[43]->value_1}}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Degignation</label>
                                    <input id="name" name="member_2_deg" type="text" class="form-control" placeholder="title" value="{{$data[44]->value_1}}" />
                                </div>
                                <div class="form-group">

                                    <label> Side Image </label>
                                    <input type="file" name="member_2_image" class="form-control" placeholder="link">
                                </div>
                            </div>
                            <div class="col-md-2">
                            <img src="storage/app/{{$data[45]->value_1}}" width="100%"  />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">

                                    <label for="name">Enable Member 3</label>
                                    @if($data[46]->value_1=='true')
                                    <input name="mamber_3_enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="mamber_3_enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="member_3_name" type="text" class="form-control" placeholder="title" value="{{$data[47]->value_1}}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Degignation</label>
                                    <input id="name" name="member_3_deg" type="text" class="form-control" placeholder="title" value="{{$data[48]->value_1}}" />
                                </div>
                                <div class="form-group">

                                    <label> Side Image </label>
                                    <input type="file" name="member_3_image" class="form-control" placeholder="link" >
                                </div>
                            </div>
                            <div class="col-md-2">
                            <img src="storage/app/{{$data[49]->value_1}}" width="100%"  />
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