<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        <!-- Start Top Bar -->

@if($data[34]->value_1=='true')
        <div class="topbar bg-theme">
            <div class="container">
                <div class="row">
         
                    <div class="col-md-8">
                        <ul class="topbar-info list-inline is-hidden-xs t-xs-center t-md-left">
                            <!-- <li class="prl-10">
                                <i class="fa fa-map-marker mr-10 font-16"></i>{{$data[17]->value_1}}</li> -->
                            <li class="prl-10">
                                <i class="fa fa-phone mr-10 font-16"></i>{{$data[18]->value_1}}  </li>
                            <li class="prl-10">
                                <i class="fa fa-envelope mr-10 font-16"></i>{{$data[19]->value_1}}</li>
                        </ul>
                    </div>
              
                    
                    <div class="col-md-4">
                        <ul class="social-icons list-inline font-16  t-xs-center t-md-right is-hidden-sm">
                            <li class="social-icons__item"><a href="{{$data[20]->value_1}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-icons__item"><a href="{{$data[21]->value_1}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-icons__item"><a href="{{$data[22]->value_1}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-icons__item"><a href="{{$data[23]->value_1}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            
                        </ul>
                    </div>

                </div>
            </div>
        </div>
 @endif
        <header id="mainHeader" class="main-header">
            <div class="header-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a style="font-size: 25px; font-weight: bold; color:#1d6d9b;" href="{{url('/')}}"><img src="{{url('')}}/storage/app/{{$data[29]->value_1}}" alt="{{$data[92]->value_1}}"> {{$data[92]->value_1}}</a>
                            </div>
                            <!-- Phone Menu button -->
                            <button id="menu" class="menu is-hidden-md-up"></button>
                        </div>
                        <div class="col-md-9">
                            <nav class="navigation">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('About-Us')}}">About us</a></li>
                                    <li><a href="{{url('Activities-Page')}}">Our Services</a></li>
                                    <!-- <li><a href="{{url('News')}}">News</a></li> -->
                                    <li><a href="{{url('Contract-Us')}}">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->