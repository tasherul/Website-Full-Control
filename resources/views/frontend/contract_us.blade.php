@extends('frontend._layout.master')
@section('title')
CONTACT US
@endsection
@section('content')
  <main id="mainContent" class="main-content">
            <!-- Start Hero Area -->
            <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="{{url('')}}/assets/img/banner1.jpg">
                <div class="container t-center">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                            <div class="section-top-title">
                                <h1 class="t-uppercase font-45">CONTACT US</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{url('/')}}"><i class="fa fa-home mr-10"></i>Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Hero Area -->
            <!-- Start Contact US Area -->
            <section class="section contact-us-area pt-60" id="contact">
                <div class="container">
                    <div class="row mb-40">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center">
                            <h2 class="section-title mb-20 font-22 t-uppercase">Contact US</h2>
                            <div class="heart-line mb-20">
                                <img src="assets/img/icon.png" alt="Awesome Image">
                            </div>
                            <p class="color-mid">{{$data[78]->value_1}}</p>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-md-4 col-sm-6 mb-30">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="lnr lnr-map-marker"></i>
                                </div>
                                <h5 class="t-uppercase mb-10">Our Location</h5>
                                <p class="color-mid">{{$data[17]->value_1}} <br> {{$data[79]->value_1}} </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-30">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="lnr lnr-phone"></i>
                                </div>
                                <h5 class="t-uppercase mb-10">Call Us</h5>
                                <p class="color-mid">Phone : {{$data[80]->value_1}} <br> Mobile : {{$data[81]->value_1}} </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-30">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="lnr lnr-laptop-phone"></i>
                                </div>
                                <h5 class="t-uppercase mb-10">Connect Online</h5>
                                <p class="color-mid">Email : {{$data[82]->value_1}} <br> Website : {{$data[83]->value_1}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-md-cell row-rl-0 pb-20 pb-md-60">
                        <div class="col-md-6 col-md-push-6 pb-40 pb-md-0">
                            <div class="google-map col-absolute-cell embed-responsive">
                                <iframe class="google-map-iframe embed-responsive-item" src="https://maps.google.com/maps?q={{$data[84]->value_1}},{{$data[85]->value_1}}&amp;z=4&amp;output=embed"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6 pr-20 pr-md-30 pl-xs-0 pb-40 pb-md-0">
                            <div class="contact-form">
                                <form action="{{url('send_message')}}" method="post">
                                	@csrf
                                    <div class="row row-tb-10">
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" placeholder="Name" name="name" id="contactName" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" placeholder="Email" name="email" id="contactEmail" required>
                                        </div>
                                        
                                        <div class="col-xs-12">
                                            <textarea class="form-control" rows="5" placeholder="Your Message" name="message" id="contactMessage" required ></textarea>
                                        </div>
                                        <div class="col-xs-12">
                                            <button class="btn btn-lg btn-block" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact US Area -->
        </main>
@endsection
