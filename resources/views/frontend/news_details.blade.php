@extends('frontend._layout.master')
@section('title')
NEWS DETAILS
@endsection
@section('content')
<main id="mainContent" class="main-content">
            <!-- Start Hero Area -->
            <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="{{url('')}}/storage/app/{{$data[90]->value_1}}">
                <div class="container t-center">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                            <div class="section-top-title">
                                <h1 class="t-uppercase font-45">News Details</h1>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="fa fa-home mr-10"></i>Home</a></li>
                                    <li class="active">News Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Hero Area -->
            <div class="page-container">
                <div class="container">
                    <div class="row row-rl-20 row-tb-20">
                        <div class="page-content col-xs-12 col-md-9 col-sm-8">
                            <!-- Blog Area -->
                            <div class="blog-area blog-classic blog-single">
                                <div class="row row-tb-20">
                                    <!-- Blog Post -->
                                    <div class="blog-post col-xs-12">
                                        <article class="entry">
                                            <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{url('')}}/storage/app/{{$news_details->image}}">
                                                <div class="entry-date">{{$news_details->date}} {{$news_details->month}} {{$news_details->year}}</div>
                                            </figure>
                                            <div class="entry-wrapper pt-20 pt-md-30 pb-15">
                                                <header class="entry-header">
                                                    <div class="entry-meta mb-10">
                                                        <ul class="tag-info list-inline">
                                                            <li><i class="mr-5 fa fa-calendar"></i>{{$news_details->date}} {{$news_details->month}} {{$news_details->year}}</li>
                                                            
                                                        </ul>
                                                    </div>
                                                <h2 class="section-title mb-10 font-22 t-uppercase">{{$news_details->title}}</h2>
                                                <h5 class="section-body">{{$news_details->short_description}}</h5>
                                                </header>
                                                <div class="entry-content">
                                                    @php echo $news_details->Discription @endphp
                                                    
                                                </div>
                                            </div>
                                            
                                        </article>
                                      
                                        <hr>
                                       
                                                                            </div>
                                    <!-- End Blog Post -->
                                </div>
                            </div>
                            <!-- End Blog Area -->
                        </div>
                        <div class="page-sidebar col-md-3 col-sm-4 col-xs-12">
                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    
                                    <div class="col-xs-12">
                                        <!-- Recent Posts -->
                                        <div class="widget recent-posts pb-20">
                                            <h3 class="widget-title h-title">Related News</h3>
                                            <div class="widget-body ptb-30">
                                                @foreach($related as $key)
                                                <div class="recent-post media">
                                                    <div class="post-thumb media-left">
                                                        <a href="{{url('News-Details')}}/{{$key->id}}/{{$key->slug}}">
                                                            <img class="media-object" src="{{url('')}}/storage/app/{{$key->image}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mb-5">
                                                            <a href="{{url('News-Details')}}/{{$key->id}}/{{$key->slug}}">{{Illuminate\Support\Str::limit($key->title, 50) }}</a>
                                                        </p>
                                                        <span class="color-theme"><i class="fa fa-calendar mr-5"></i> {{$key->date}} {{$key->month}} {{$key->year}}</span>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                        <!-- End Recent Posts -->
                                    </div>
                                    
                                  
                                  
                                    
                                </div>
                            </aside>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
