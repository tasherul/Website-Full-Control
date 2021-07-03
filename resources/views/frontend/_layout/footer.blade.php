 <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
 <footer class="main-footer pt-60">
            <div class="container">
                <div class="footer-widgets">
                    <div class="row row-masnory">
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget">
                                <h2>About us</h2>
                                <p class="mb-10 text-justify">{{$data[28]->value_1}}</p>
                                <ul class="social-icons list-inline">
                                    <li class="social-icons__item pt-10"><a href="{{$data[20]->value_1}}"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons__item pt-10"><a href="{{$data[21]->value_1}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons__item pt-10"><a href="{{$data[22]->value_1}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-icons__item pt-10"><a href="{{$data[23]->value_1}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    </i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget">
                                <h2>Quick Links</h2>
                                <ul class="opening-hours">
                                    <li><a href="{{url('About-Us')}}" style="color: #fff;">About Us</a></li>
                                    <li><a href="{{url('Activities-Page')}}" style="color: #fff;">Activities</a></li>
                                    <li><a href="{{url('News')}}" style="color: #fff;">News</a></li>
                                    <li><a href="{{url('Contract-Us')}}}" style="color: #fff;">Contact Us</a></li>
                                    <li><a href="{{url('Terms-and-Condition')}}" style="color: #fff;">Terms & Condition</a></li>
                                    <li><a href="{{url('Privacy-Policys')}}" style="color: #fff;">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget get-in-touch">
                                <h2>{{$data[10]->value_1}}</h2>
                                <ul class="opening-hours">
                                    <li>{{$data[11]->value_1}} <span class="float-right">{{$data[12]->value_1}}</span></li>
                                    <li>{{$data[13]->value_1}} <span class="float-right">{{$data[14]->value_1}}</span></li>
                                    <li>{{$data[15]->value_1}}<span class="float-right">{{$data[16]->value_1}}</span></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget instagram-widget">
                                <h2>Contact</h2>
                                <p><b>Email:</b> {{$data[19]->value_1}}</p>
                                <p><b>Mobile:</b> {{$data[18]->value_1}}</p>
                                <p><b>Address:</b> {{$data[17]->value_1}}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <h6 class="copyright">&copy; All rights reserved. </h6>
                </div>
            </div>
        </footer>
        <!-- –––––––––––––––[ END FOOTER ]––––––––––– -->