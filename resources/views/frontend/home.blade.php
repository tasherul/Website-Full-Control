@extends('frontend._layout.master')
@section('title')
HOME
@endsection
@section('content')
    <main id="mainContent" class="main-content">
            <!-- Start Hero Area -->
            <section class="section hero-area" data-bg-img="assets/images/slider/05.jpg">
                <div class="hero-slider owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000">

                	@foreach($slider as $key)
                    <div class="hero-slider-item" data-bg-img="{{url('')}}/storage/app/{{$key->image}}">
                        <div class="hero-overlay">
                            <div class="hero-overlay-wrapper">
                                <div class="pos-tb-center hero-overlay-inner">
                                    <div class="container t-xs-center t-md-left">
                                        <div class="row row-tb-20">
                                            <div class="col-md-8">
                                                
                                                <h1 class="t-uppercase mb-20">{{$key->titel}}</h1>
                                                <h5 class="mb-30 color-lighter">{{Illuminate\Support\Str::limit($key->discription, 100) }} </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </section>
            <!-- End Hero Area -->
            <!-- Start Features Boxes Area -->
            @if($data[50]->value_1=='true')
            <section class="section features-boxes-area hero-features-boxes">
                <div class="container">
                    <div class="row row-md-cell color-white">
                        <div class="col-md-4 valign-top bg-theme">
                            <div class="features-boxe-single prl-10 pt-20 pb-15">
                                <h4 class="mb-20 t-uppercase">{{$data[0]->value_1}}</h4>
                                <p class="mb-20">{{$data[1]->value_1}}</p>
                                <a href="{{$data[4]->value_1}}" class="btn btn-o btn-rev" target="_blank">{{$data[3]->value_1}}</a>
                            </div>
                        </div>
                        <div class="col-md-4 valign-top bg-blue-dark">
                            <div class="features-boxe-single prl-10 pt-20 pb-15">
                                <h4 class="mb-20 t-uppercase">{{$data[5]->value_1}}</h4>
                                <p class="mb-20">{{$data[6]->value_1}}</p>
                                <a href="{{$data[9]->value_1}}" class="btn btn-o btn-rev" target="_blank">{{$data[8]->value_1}}</a>
                            </div>
                        </div>
                        <div class="col-md-4 valign-top bg-blue-darker">
                            <div class="features-boxe-single prl-10 pt-20 pb-15">
                                <h4 class="mb-10 t-uppercase">{{$data[10]->value_1}}</h4>
                                <ul class="opening-hours">
                                    <li>{{$data[11]->value_1}}<span class="float-right">{{$data[12]->value_1}}</span></li>
                                    <li>{{$data[13]->value_1}} <span class="float-right">{{$data[14]->value_1}}</span></li>
                                    <li>{{$data[15]->value_1}} <span class="float-right">{{$data[16]->value_1}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            <!-- End Features Boxes Area -->
            <!-- Start About Us Area -->
             @if($data[33]->value_1=='true')
            <section class="section about-us-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="who-we-are">
                                
                                <h2 class="font-24 mb-20">{{$data[30]->value_1}}</h2>
                                @php echo $data[31]->value_1 @endphp
                                
                            </div>
                        </div>
                        <div class="col-md-6 t-xs-center t-md-center">
                            <img src="storage/app/{{$data[32]->value_1}}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            @endif
            <!-- End About Us Area -->
            <!-- Start Features Area -->
                        <!-- End Features Area -->
            <!-- Start Services Area -->
           

            <!-- End Services Area -->
            <!-- Start Video Area -->
            @if($data[24]->value_1=='true')
            <section class="section video-area bg-gray">
                <div class="container">
                    <h2 class="is-hidden">Hospital Video</h2>
                    <div class="row">
                        <div class="col-sm-6 col-content ptb-60">
                            
                            <h3 class="t-uppercase mb-20">{{$data[27]->value_1}}</h3>
                            @php echo $data[26]->value_1 @endphp
                            <a href="{{$data[25]->value_1}}" class="btn iframe-lightbox">Watch Video</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-6 col-video" data-bg-img="storage/app/{{$data[77]->value_1}}">
                    <a href="{{$data[25]->value_1}}" class="iframe-lightbox">
                        <div class="play"></div>
                    </a>
                </div>
            </section>
            @endif
            <!-- End Video Area -->
            <!-- Start appointment Area -->
           	<section class="section services-area ptb-60">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                            <h2 class="section-title mb-20 font-22 t-uppercase">Our Activities</h2>
                            <div class="heart-line">
                                <img src="assets/img/icon.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	@foreach($activities as $key)
                        <div class="col-md-4">
                            <div class="service-single"	>
                                <div class="service-thumb">
                                    <img src="storage/app/{{$key->activities_image}}" alt="" style="height: 358px;">
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-10 t-uppercase color-theme">{{ Illuminate\Support\Str::limit($key->title, 75) }}</h5>
                                    <p class="color-mid mb-15">{{ Illuminate\Support\Str::limit($key->short_description, 100) }}</p>
                                    <a class="btn btn-o btn-sm btn-rounded" href="{{url('Activities-Details')}}/{{$key->id}}/{{$key->slug}}">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </section>
            <!-- Start appointment Area -->
            <!-- Start Our Team Area -->
            @if($data[35]->value_1=='true')
            <section class="section team-area pt-80 pb-40 bg-gray">
                <div class="container">
                    <div class="team-members row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <h2 class="font-22 t-uppercase mb-15">{{$data[36]->value_1}}</h2>
                                <div class="heart-line mb-15">
                                    <img src="assets/img/icon.png" alt="Awesome Image">
                                </div>
                                <div class="color-mid mb-20">@php echo $data[37]->value_1 @endphp
                                </div>
                                	
                            </div>
                        </div>
                         @if($data[38]->value_1=='true')
                        <div class="col-md-3 col-sm-6">
                            <div class="single-member">
                                <div class="single-member-header">
                                    <img src="storage/app/{{$data[41]->value_1}}" alt="" style="height: 263px;">
                                    <div class="single-member-overlay t-center">
                                        <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-member-content">
                                    <h5 class="mb-10 font-15 t-uppercase">{{$data[39]->value_1}}</h5>
                                    <h6 class="color-mid font-12 t-uppercase mb-5">{{$data[40]->value_1}}</h6>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if($data[42]->value_1=='true')
                        <div class="col-md-3 col-sm-6">
                            <div class="single-member">
                                <div class="single-member-header">
                                    <img src="storage/app/{{$data[45]->value_1}}" alt="" style="height: 263px;">
                                    <div class="single-member-overlay t-center">
                                        <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-member-content">
                                    <h5 class="mb-10 font-15 t-uppercase">{{$data[43]->value_1}}</h5>
                                    <h6 class="color-mid font-12 t-uppercase mb-5">{{$data[44]->value_1}}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[46]->value_1=='true')
                        <div class="col-md-3 col-sm-6">
                            <div class="single-member">
                                <div class="single-member-header">
                                    <img src="storage/app/{{$data[49]->value_1}}" alt="" style="height: 263px;"> 
                                    <div class="single-member-overlay t-center">
                                        <ul class="social-icons list-inline is-inline-block pos-tb-center">
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-member-content">
                                    <h5 class="mb-10 font-15 t-uppercase">{{$data[47]->value_1}}</h5>
                                    <h6 class="color-mid font-12 t-uppercase mb-5">{{$data[48]->value_1}}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            @endif
            <!-- End Our Team Area -->
            <!-- Start Testimonials Area -->
            
            <!-- End Testimonials Area -->
            <!-- Start Subscribe Area  -->
            <section class="section subscribe-area ptb-80" data-bg-img="assets/images/background/bg-02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        	
                            <div class="get-quotes-content text-center color-white row">
                                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-center">
                                    <h2 class="mb-20">Sign up to our newsletter</h2>
                                    <h6 class="mb-30"></h6>
                                    <div class="row">

                                        <div class="col-lg-10 col-md-11 col-xs-center">
                                            <div class="subscribe-form">
                                                <form action="{{url('Insert-Newsletter')}}" method="post">
													{{ csrf_field() }}
                                                    <input class="form-control input-lg" type="email" name="email" placeholder="Enter Your Email Address" required="">
                                                    <button type="submit" class="btn btn-lg btn-rounded">Subscribe</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Subscribe Area  -->
			<section class="section portifolio-area portifolio-area-3">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                            <h2 class="section-title mb-20 font-22 t-uppercase">OUR GELLARY</h2>
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

<br>
            @if(false)
            <!-- Start Latest News Area  -->
            <section class="section portifolio-area portifolio-area-3 ptb-60">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                            
                            <h2 class="section-title mb-20 font-22 t-uppercase">OUR NEWS</h2>
                            <div class="heart-line">
                                <img src="assets/img/icon.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                 
                <div class="container">
                    <!-- Blog Area -->
                    <div class="blog-area blog-grid">
                        <div class="row row-tb-15">
                            @foreach($news as $key)
                            <div class="col-md-4 col-sm-6">
                                <div class="entry">
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="storage/app/{{$key->image}}">
                                        <div class="entry-media-overlay">
                                            <div class="pos-center">
                                                <a class="link" href="{{url('News-Details')}}/{{$key->id}}/{{$key->slug}}"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="entry-date">{{$key->date}}<span class="month">{{$key->month}}</span></div>
                                    </figure>
                                    <div class="entry-content">
                                        <span class="entry-info is-block mb-5">
                                            <span class="mr-10"><i class="fa fa-clock-o mr-5"></i>{{$key->date}} {{$key->month}} {{$key->year}}</span>
                                        
                                        <h2 class="entry-title"><a href="blog_single.html">{{ Illuminate\Support\Str::limit($key->title, 75) }}</a></h2>
                                        <p class="color-mid mb-20">{{ Illuminate\Support\Str::limit($key->short_description, 100) }}</p>
                                        <div class="entry-more">
                                           	
                                            <a href="{{url('News-Details')}}/{{$key->id}}/{{$key->slug}}" class="btn btn-sm btn-rounded btn-o">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <!-- End Blog Area -->
                    <!-- Blog Pagination -->
                    
                    <!-- End Blog Pagination -->
                </div>
            </div>
                        
                   
            </section>
            @endif
            <!-- End Latest News section  -->
            
        </main>
@endsection
