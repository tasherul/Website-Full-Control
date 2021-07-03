@extends('admin._layout.master')



@section('contant')
<div id="content">

    <div>
        <form action="{{url('logo-aboutus')}}" method="POST" enctype='multipart/form-data'>
            {{ csrf_field() }}


            <div class="panel">
                <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span>Logo & Footer About Us </span> </div>
                <div class="panel-body">

                    @include('admin._layout.message')

                    <form class="cmxform" id="altForm" method="get">
                        <div class="row">

                         <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">Upload Logo</label>
                            <input id="name" name="logo_image" type="file" class="form-control" /></br>
                            <img src="storage/app/{{$data[29]->value_1}}" width="100" height="100" alt="" />
                        </div>

                       

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">Company Name</label>
                            <input  name="logoName" value="{{$data[92]->value_1}}" type="test" class="form-control" />
                        </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">About Us Background Image</label>
                            <input id="name" name="about_us_image" type="file" class="form-control" /></br>
                            <img src="storage/app/{{$data[86]->value_1}}" alt="" style="width: 100px;height: 100px" />
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">Services Background Image</label>
                            <input id="name" name="activities" type="file" class="form-control" /></br>
                            <img src="storage/app/{{$data[87]->value_1}}" alt="" style="width: 100px;height: 100px" />
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">Services Details Background Image</label>
                            <input id="name" name="activities_d_image" type="file" class="form-control" /></br>
                            <img src="storage/app/{{$data[88]->value_1}}" alt=""style="width: 100px;height: 100px" />
                        </div>
                            </div>

                            <!-- <div class="col-md-6">
                               <div class="form-group">
                                    <label for="name">News Background Image</label>
                                    <input id="name" name="news_image" type="file" class="form-control" /></br>
                                    <img src="storage/app/{{$data[89]->value_1}}" alt="" style="width: 100px;height: 100px" />
                                </div> 
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                    <label for="name">News Details Background Image</label>
                                    <input id="name" name="news_details_image" type="file" class="form-control" /></br>
                                    <img src="storage/app/{{$data[90]->value_1}}" alt="" style="width: 100px;height: 100px" />
                                </div> 
                            </div> -->

                            <div class="col-md-6">
                               <div class="form-group">
                                    <label for="name">Fav Icon</label>
                                    <input id="name" name="fav_icon" type="file" class="form-control" /></br>
                                    <img src="storage/app/{{$data[91]->value_1}}" alt="" style="width: 100px;height: 100px"/>
                                </div> 
                            </div>
                        </div>

                         <div class="form-group">
                                    <label for="name">Footer About</label>
                                    <textarea id="name" name="footer_about"  class="form-control" rows="10" >{{$data[28]->value_1}}"</textarea>
                                   
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