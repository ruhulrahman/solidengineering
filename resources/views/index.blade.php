@include('include/header')

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                @include("include/menu")
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    
    <!-- Main Content here -->
    @yield('content')

@include('include/footer')