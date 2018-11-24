<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title  -->
    <title>Solid Engineering</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('public/img/core-img/favicon.ico') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/style.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:solid.engineeringbd@gmail.com">Email: solid.engineeringbd@gmail.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+8801711130480">01711-130480, 01997-002244, 01712-774250</a>
                    </div>
                </div>
            </div>
        </div>