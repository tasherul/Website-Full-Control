@extends('admin._layout.master')



@section('contant')
<div id="content">

    <div class="col-md-12">
        <form action="{{url('Privacy-Policy-Process')}}" method="POST" >
            {{ csrf_field() }}


            <div class="panel">
                <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Privacy Policy </span> </div>
                <div class="panel-body">

                    @include('admin._layout.message')

                    <div class="cmxform" id="altForm">

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input id="name" name="title" type="text" class="form-control" placeholder="title" value="{{$data[95]->value_1}}" />
                        </div>
                        <div class="form-group">
                            <label for="wage">Description</label>
                            <textarea name="discription" id="markitup" class="form-control" placeholder="video discription" rows="20">{{$data[96]->value_1}}</textarea>
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