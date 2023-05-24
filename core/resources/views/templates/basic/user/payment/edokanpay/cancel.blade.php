@extends($activeTemplate . 'layouts.master')
@section('content')

    <body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="addmoney">
        <!-- Top navbar -->
        {{-- @include($activeTemplate . 'includes.side_nav') --}}

        <!-- Begin page content -->
        <main class="flex-shrink-0 main">
            <!-- Fixed navbar -->
            @include($activeTemplate . 'includes.top_nav_mini')

            <div class="main-container h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-md-6 col-lg-4 align-self-center text-center my-3 mx-auto">
                            <img src="{{asset('assets/images/3d-logo/payment-failed.png')}}" alt="">
                            <h2 class="text-white">Payment Failed!</h2>
                            <h6 class="text-secondary mb-3">Unfortunately, your order has been not placed.</h6>
                            <p class="text-secondary">Thank you.Try again..</p>
                            <a href="{{route('user.home')}}" class="btn btn-info btn-sm">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>

        </main>



        <!-- footer-->
        {{-- @include($activeTemplate . 'includes.bottom_nav') --}}


    </body>
@endsection