@extends('index')
@section('content')
@section('title', 'Company Strategy')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('include/breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url({{ asset('public') }}/img/bg-img/cta.jpg)">
        <div class="container strategy">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <h2>Our Strategy</h2>
                        <p><b>Purpose:</b> To provide best quality and innovation ideas to every client's needs with ideas to fit any budget with on-time delivery</p>
                        <p><b>Core Values:</b> We always ensure to assign the highly skilled professionals. We make it a point to complete the project on-time. We never say no to any creative inputs of our most valuable clients and believe in the statement of "Consumer is the King".</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->
@endsection