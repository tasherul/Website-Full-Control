@extends('frontend._layout.master')
@section('title')
NEWS
@endsection
@section('content')
<main id="mainContent" class="main-content">
            <!-- Start Hero Area -->
            <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="{{url('')}}/storage/app/{{$data[89]->value_1}}">
                <div class="container t-center">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                            <div class="section-top-title">
                                <h1 class="t-uppercase font-45">Our News</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{url('/')}}"><i class="fa fa-home mr-10"></i>Home</a></li>
                                    <li class="active">News</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Hero Area -->
            <div class="page-container ptb-60">
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
                                        
                                        <h2 class="entry-title"><a href="{{url('News-Details')}}/{{$key->id}}/{{$key->slug}}">{{Illuminate\Support\Str::limit($key->title,75) }}</a></h2>
                                        <p class="color-mid mb-20">{{Illuminate\Support\Str::limit($key->short_description, 100) }}  </p>
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
        </main>
@endsection
