@extends('frontend._layout.master')
@section('title')
ACTIVITIES
@endsection
@section('content')
<main id="mainContent" class="main-content">
    <!-- Start Hero Area -->
    <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="{{url('')}}/storage/app/{{$data[87]->value_1}}">
        <div class="container t-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="section-top-title">
                        <h1 class="t-uppercase font-45">Our Services</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}"><i class="fa fa-home mr-10"></i>Home</a></li>
                            <li class="active">Our Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-20 row-tb-20">
                <div class="page-content col-md-12 col-sm-12 col-xs-12">
                    <!-- Blog Area -->
                    <div class="blog-area blog-list">
                        <div class="row row-tb-20">
                            <!-- Blog Post -->
                            @foreach($act as $key)

                            <div class="blog-post col-xs-12">
                                <article class="entry">
                                    <div class="row row-rl-0 row-tb-0 row-md-cell">
                                        <div class="col-xs-12 col-md-6 col-lg-5">
                                            <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="storage/app/{{$key->activities_image}}">
                                            </figure>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-lg-7 prl-15 prl-md-20 ptb-20 ptb-md-30">
                                            <div class="entry-wrapper">
                                                <header class="entry-header">
                                                    <div class="entry-meta mb-10">
                                                        <ul class="tag-info list-inline">
                                                            <li><i class="mr-5 fa fa-calendar"></i>{{$key->date}} {{$key->month}} {{$key->year}}</li>

                                                        </ul>
                                                    </div>
                                                    <h4 class="entry-title mb-10 mb-md-15">
                                                        <a href="{{url('Activities-Details')}}/{{$key->id}}/{{$key->slug}}">{{ Illuminate\Support\Str::limit($key->title, 70) }}</a>
                                                    </h4>
                                                </header>
                                                <div class="entry-content">
                                                    <p class="entry-summary" style="margin-bottom: 60px;">{{ Illuminate\Support\Str::limit($key->short_description, 400) }}</p>
                                                </div>
                                                <footer class="entry-footer text-right">
                                                    <a href="{{url('Activities-Details')}}/{{$key->id}}/{{$key->slug}}" class="more-link btn btn-sm btn-o">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            

                            @endforeach
                            
                        </div>
                        <!-- End Blog Area -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>


@endsection