@extends('index')
@section('content')
@section('title', 'Contact')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('include/breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday - Thursday</span> <span>09 AM - 5 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Friday</span> <span>Closed</span></li>
                            </ul>
                        </div> -->
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="{{ asset('public') }}/img/icons/phone-call.png" alt=""> 01711-130480, 01997-002244, 01712-774250</h6>
                            <h6><img src="{{ asset('public') }}/img/icons/envelope.png" alt=""> solid.engineeringbd@gmail.com</h6>
                            <h6><img src="{{ asset('public') }}/img/icons/location.png" alt=""> House#21, Road#2, Block#A, Dhaka Uddan, Mohammadpur, Dhaka</h6>

                            <p><a href="https://www.linkedin.com/in/solid-engineering-bd-9517a9174" target="_blank"><i class="fa fa-linkedin"></i> : linkedin.com/in/solid-engineering-bd-9517a9174</a></p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="text" id="contact-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="contact-number" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn south-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row map">
                <div class="col-12">
                    <!-- Google Maps
                    <div id="googleMap" class="googleMap">
                     </div>
                    -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341.99354300101464!2d90.34527065751902!3d23.764388877788534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1b03a99f39f%3A0x8316f55bc88089d5!2sSolid+Engineering!5e1!3m2!1sen!2sbd!4v1543145365366" frameborder="0" style="border:0" allowfullscreen></iframe>
                   
                </div>
            </div>
        </div>
    </div>
@endsection