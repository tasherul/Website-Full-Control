@extends('frontend._layout.master')
@section('title')
Our Activities
@endsection
@section('content')
<main id="mainContent" class="main-content">
    <!-- Start Hero Area -->
    <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="{{url('')}}/storage/app/{{$data[88]->value_1}}">
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
    <!-- Start Project Details Area -->
    <section class="section service-details-area pt-60">
        <div class="container">
            <div class="mb-40">
                <h2 class="section-title mb-10 font-22 t-uppercase">{{$act_details->title}}</h2>
                <h5 class="section-body">{{$act_details->short_description}}</h5>

            </div>
            <div class="mb-20">
                <div class="row row-rl-0">
                    <div class="col-md-12">
                        <img src="{{url('')}}/storage/app/{{$act_details->activities_image}}" alt="" style="width: 100%">
                    </div>

                </div>
            </div>
            <div class="row pb-30">
                <div class="col-xs-12 mb-20">
                    <!-- <h3 class="t-uppercase mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3> -->
                    @php echo $act_details->Discription @endphp
                </div>


            </div>
            <hr style="margin: 0px;">
        </div>
    </section>
    <!-- End Project Details Area -->
    <!-- Start Services Area -->






    <section class="section portifolio-area portifolio-area-3">
                <div class="container">
                    <div class="row mb-30 mt-20">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                            <h2 class="section-title mb-20 font-22 t-uppercase">OUR GELLARY</h2>
                            <div class="heart-line">
                                <img src="{{url('')}}/assets/img/icon.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                 
                    <div class="portifolio-wrapper row row-tb-15" >
                    @foreach($act_slider as $key)
                        <div class="col-md-4 col-sm-6 mix class1 class3">
                            <div class="portifolio-single">
                                <figure class="work-img">
                                    <img src="{{url('')}}/storage/app/{{$key->image}}" alt="" style="width: 360px;height: 240px">
                                </figure>
                                <div class="portifolio-hover">
                                    <div class="inner-hover pos-tb-center">
                                        <h4 class="t-uppercase mb-20">{{$key->titel}}</h4>
                                        <div class="portifolio-icons">
                                            <a class="portifolio-icon" href="{{url('')}}storage/app/{{$key->image}}" target="_blank">
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


    <section class="section services-area pt-40">
        <div class="container">
            <div class="mb-40">
                <h2 class="section-title mb-10 font-22 t-uppercase">Related Services</h2>
            </div>
            @foreach($related as $key)
            <div class="row mb-40">
                <div class="col-md-4 col-sm-6">
                    <div class="service-single">
                        <div class="service-thumb">
                            <img src="{{url('')}}/storage/app/{{$key->activities_image}}" alt="" style="width: 358;height: 238px">
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
            <hr>
        </div>
    </section>
    <!-- End Pricing Table Area  -->
</main>
@endsection