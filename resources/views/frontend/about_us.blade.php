@extends('frontend._layout.master')
@section('title')
ABOUT US
@endsection
@section('content')
 <main id="mainContent" class="main-content">
            <!-- Start Hero Area -->
            @if($data[51]->value_1=='true')
            <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="{{url('')}}/storage/app/{{$data[86]->value_1}}">
                <div class="container t-center">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                            <div class="section-top-title">
                                <h1 class="t-uppercase font-45">About Us</h1>
                                
                                <ol class="breadcrumb">
                                    <li><a href="{{url('/')}}"><i class="fa fa-home mr-10"></i>Home</a></li>
                                    <li class="active">About Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            <!-- End Hero Area -->
            <!-- Start About Us Area -->
            @if($data[51]->value_1=='true')
            <section class="section about-us-area about-us-area-1 ptb-60">
                <div class="container">
                    <div class="row row-tb-15">
                        <div class="col-sm-6">
                            
                            <h2 class="font-22 mb-15">{{$data[52]->value_1}}</h2>

                            @php echo $data[53]->value_1 @endphp
                            
                            
                        </div>

                        <div class="col-sm-6">
                            <img src="storage/app/{{$data[54]->value_1}}" alt="">
                        </div>
                    </div>
                </div>
            </section>
             @endif
            <!-- End About Us Area -->
            <!-- start about section  -->
            @if($data[55]->value_1=='true')
            <div class="section about-us-area about-us-area-2 ptb-60 bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-images">
                            <div class="about-images">
                                <img src="storage/app/{{$data[58]->value_1}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-content">
                            
                            <h2 class="mb-15 font-22 t-uppercase">{{$data[56]->value_1}}</h2>
                            @php echo $data[57]->value_1 @endphp
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- end about section  -->
            <!-- Start About Company Area -->
            <section class="section portifolio-area portifolio-area-3 ptb-60">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                            
                            <h2 class="section-title mb-20 font-22 t-uppercase">OUR GALLARY</h2>
                            <div class="heart-line">
                                <img src="assets/img/icon.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                
                    <div class="portifolio-wrapper row row-tb-15" >
                    @foreach($galary as $key)
                        <div class="col-md-4 col-sm-6 mix class1 class3">
                            <div class="portifolio-single">
                                <figure class="work-img">
                                    <img src="storage/app/{{$key->image}}" alt="" style="width: 360px;height: 240px">
                                </figure>
                                <div class="portifolio-hover">
                                    <div class="inner-hover pos-tb-center">
                                        <h4 class="t-uppercase mb-20">{{$key->title}}</h4>
                                        <div class="portifolio-icons">
                                            <a class="portifolio-icon" href="storage/app/{{$key->image}}" target="_blank">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        
                    </div>
                </div>
            </section>
            <!-- End  About Company Area -->
            <!-- Start Our Team Area -->
            @if($data[59]->value_1=='true')
            <section class="section team-area pt-80 pb-40 bg-gray">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                            
                            <h2 class="section-title mb-20 font-22 t-uppercase">{{$data[60]->value_1}}</h2>
                            <div class="heart-line">
                                <img src="assets/img/icon.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                    <div class="team-members row">
                        @if($data[61]->value_1=='true')
                        <div class="col-md-3 col-sm-6">
                            <div class="single-member">
                                 
                                <div class="single-member-header">
                                    <img src="storage/app/{{$data[64]->value_1}}" alt="" style="height: 263px;">
                                    <div class="single-member-overlay t-center">
                                        <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="single-member-content">
                                    <h5 class="mb-10 font-15 t-uppercase"><a href="">{{$data[62]->value_1}}</a></h5>
                                    <h6 class="color-mid font-12 t-uppercase mb-5">{{$data[63]->value_1}}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[65]->value_1=='true')
                        <div class="col-md-3 col-sm-6">
                            <div class="single-member">
                                <div class="single-member-header">
                                    <img src="storage/app/{{$data[68]->value_1}}" alt="" style="height: 263px;">
                                    <div class="single-member-overlay t-center">
                                        <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-member-content">
                                    <h5 class="mb-10 font-15 t-uppercase"><a href="">{{$data[66]->value_1}}</a></h5>
                                    <h6 class="color-mid font-12 t-uppercase mb-5">{{$data[67]->value_1}}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[69]->value_1=='true')
                        <div class="col-md-3 col-sm-6">
                            <div class="single-member">
                                <div class="single-member-header">
                                    <img src="storage/app/{{$data[72]->value_1}}" alt="" style="height: 263px;">
                                    <div class="single-member-overlay t-center">
                                        <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-member-content">
                                    <h5 class="mb-10 font-15 t-uppercase"><a href="">{{$data[70]->value_1}}</a></h5>
                                    <h6 class="color-mid font-12 t-uppercase mb-5">{{$data[71]->value_1}}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                         @if($data[73]->value_1=='true')
                        <div class="col-md-3 col-sm-6">
                            <div class="single-member">
                                <div class="single-member-header">
                                    <img src="storage/app/{{$data[76]->value_1}}" alt="" style="height: 263px;">
                                    <div class="single-member-overlay t-center">
                                        <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-member-content">
                                    <h5 class="mb-10 font-15 t-uppercase"><a href="">{{$data[74]->value_1}}</a></h5>
                                    <h6 class="color-mid font-12 t-uppercase mb-5">{{$data[75]->value_1}}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                </div>
            </section>
            @endif
            <!-- End Our Team Area -->
            <!-- Start Gallery Area  -->
            
            <!-- end Gallery section  -->
        </main>
@endsection
