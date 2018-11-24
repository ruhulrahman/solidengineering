@extends('index')
@section('content')
@section('title', 'Company Vision')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('include/breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url({{ asset('public') }}/img/bg-img/cta.jpg)">
        <div class="container strategy">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <h2>Our Vision</h2>
                        <p>To provide best quality and innovation ideas to every client's needs with ideas to fit any budget with on-time delivery. The department vision is to continue to achieve national and international recognition through innovation in civil and environmental engineering education and research, and through the impact of our research and alumni in three focus areas: advanced infrastructure systems; environmental engineering, sustainability, and science; and mechanics, materials and computing. Our vision includes our department being a collegial, collaborative and welcoming environment in which to learn and work.
</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->
@endsection