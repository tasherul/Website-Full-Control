@extends('frontend._layout.master')
@section('title')
Our Activities
@endsection
@section('content')
<main id="mainContent" class="main-content">
    <!-- Start Hero Area -->
    <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="{{url('')}}/storage/app/p&p.jpg">
        <div class="container t-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="section-top-title">
                        <h1 class="t-uppercase font-45">Privacy Policy</h1>
                        
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
                <h2 class="section-title mb-10 font-22 t-uppercase">{{$data[95]->value_1}}</h2>

            </div>

            <div class="row pb-30">
                <div class="col-xs-12 mb-20">
                    <!-- <h3 class="t-uppercase mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3> -->
                    @php echo $data[96]->value_1 @endphp
                </div>


            </div>
            <hr style="margin: 0px;">
        </div>
    </section>
    <!-- End Project Details Area -->
    <!-- Start Services Area -->






    <!-- End Pricing Table Area  -->
</main>
@endsection