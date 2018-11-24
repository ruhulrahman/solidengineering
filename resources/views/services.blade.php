@extends('index')
@section('content')
@section('title', 'Service')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('include/breadcumb')
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Meet The Team Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url({{ asset('public') }}/img/bg-img/cta.jpg)">
        <div class="container services">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Services We Provide</h2>
                        <p><b>"Solid Engineering"</b> is devoted to ensure highest quality of all the work. All members of Solid Engineering, specially design & operation are very hard to work & implement the quality of all works at every stage. Solid Engineering is committed to present a faultless beautiful works to all valuable clients, which is only posible thorough whole hearted cooperation & sincere work of all members of this family.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                
                <!-- Single Services -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-services mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <h2>Engineering</h2>
                        <ul>
                            <li>Rajuk and Municiple Approval Drawing</li>
                            <li>Architectural Design</li>
                            <li>Structural Design</li>
                            <li>Plumbing Design</li>
                            <li>Electrial Design</li>
                            <li>3D View</li>
                            <li>Digital Survey</li>
                            <li>Soil Test</li>
                            <li>Project Management</li>
                            <li>Project Supervision</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Services -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-services mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <h2>Interior</h2>
                        <ul>
                            <li>Interior Design</li>
                            <li>Interior Implementation</li>
                            <li>Exterior Design</li>
                            <li>Kitchen Fittings & Accessories</li>
                            <li>Office Decoration</li>
                            <li>Furniture</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Services -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-services mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <h2>Construction</h2>
                        <ul>
                            <li>Building Construction</li>
                            <li>Steel Structure</li>
                            <li>Bridge & Culvert</li>
                            <li>Grill Supply</li>
                            <li>Thai Aluminum and Glasses Works</li>
                            <li>All type of SS Works</li>
                            <li>Ornamental Construction</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->

@endsection