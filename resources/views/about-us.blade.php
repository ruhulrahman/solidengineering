@extends('index')
@section('content')
@section('title', 'About Us')
    <!-- ##### Breadcumb Area Start ##### -->
    @include('include/breadcumb')
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Our Management Team</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ asset('public') }}/img/bg-img/team2.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="{{ asset('public') }}/img/icons/prize.png" alt="">
                                <h4>Rashid Khanom Minni</h4>
                                <p>Chairman</p>
                            </div>
                            <div class="address">
                                <h6><img src="{{ asset('public') }}/img/icons/phone-call.png" alt=""> 01711130480</h6>
                                <h6><img src="{{ asset('public') }}/img/icons/envelope.png" alt=""> chairman@solidengineering.com.bd</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ asset('public') }}/img/bg-img/mahbub.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="{{ asset('public') }}/img/icons/prize.png" alt="">
                                <h4>Sarder Mahbubur Rahman
                                <p>M. Com (Management), Dhaka University</p>
                                <p>Adviser</p>
                            </div>
                            <div class="address">
                                <h6><img src="{{ asset('public') }}/img/icons/phone-call.png" alt=""> 01711130480</h6>
                                <h6><img src="{{ asset('public') }}/img/icons/envelope.png" alt=""> mahbub@solidengineering.com.bd</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ asset('public') }}/img/bg-img/rahman.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="{{ asset('public') }}/img/icons/prize.png" alt="">
                                <h4>Engr. Md. Abdur Rahman</h4>
                                <p>B.Sc Engineering (Civil)</p>
                                <p>Director</p>
                            </div>
                            <div class="address">
                                <h6><img src="{{ asset('public') }}/img/icons/phone-call.png" alt=""> 01997-002244</h6>
                                <h6 style="font-size: 12px;"><img src="{{ asset('public') }}/img/icons/envelope.png" alt=""> engr.arahman@solidengineering.com.bd</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ asset('public') }}/img/bg-img/malek.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="{{ asset('public') }}/img/icons/prize.png" alt="">
                                <h4>Engr. Md. Abdul Malek</h4>
                                <p>B.Sc Engineering (Civil)</p>
                                <p>Director</p>
                            </div>
                            <div class="address">
                                <h6><img src="{{ asset('public') }}/img/icons/phone-call.png" alt=""> 01712-774250</h6>
                                <h6><img src="{{ asset('public') }}/img/icons/envelope.png" alt=""> engr.malek@solidengineering.com.bd</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->
@endsection