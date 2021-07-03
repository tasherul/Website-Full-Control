@extends('admin._layout.master')



@section('contant')
<div id="content">

    <div class="col-md-6">
        <form action="{{url('body-section-process')}}" method="POST" enctype='multipart/form-data'>
            {{ csrf_field() }}


            <div class="panel">
                <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span>Body Section </span> </div>
                <div class="panel-body">

                    @include('admin._layout.message')

                    <div class="cmxform" id="altForm">
                        <div class="form-group">
                            <div class="row">

                            

                                <div class="col-md-5">

                                    <label for="name">If this Section Enable then It will show in Home Page</label>
                                    @if($data[33]->value_1=='true')
                                    <input name="enable" type="checkbox" checked class="form-control" />
                                    @else
                                    <input name="enable" type="checkbox" class="form-control" />
                                    @endif

                                </div>

                                <div class="col-md-4"> <img src="storage/app/{{$data[32]->value_1}}" width="150" height="150" /></div>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input id="name" name="title" type="text" class="form-control" placeholder="title" value="{{$data[30]->value_1}}" />
                        </div>
                        <div class="form-group">
                            <label for="wage">Description</label>
                            <textarea name="discription" id="markitup" class="form-control" placeholder="video discription" rows="20">{{$data[31]->value_1}}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label> Side Image </label>
                                    <input type="file" name="Side_image" class="form-control" placeholder="link" value="{{$data[25]->value_1}}">
                                </div>
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