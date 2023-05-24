@extends($activeTemplate . 'layouts.frontend')
@section('content')

    <body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">

        <style>
            a {
                text-decoration: none !important;
                text-decoration-color: none !important;
            }
        </style>

        <!-- Begin page content -->
        <main class="flex-shrink-0 main has-footer">
            <!-- Fixed navbar -->
            @include($activeTemplate . 'includes.home.top_nav_mini')

            <div class="main-container">

                <!-- page content start -->

                <div class="container mb-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="border-custom"
                                src="{{ getImage('assets/images/frontend/blog/' . $blog->data_values->image) }}" width="100%"
                                alt="image">
                            <div class="text-center text-info">
                                <span class="date">{{ $blog->created_at->format('d') }}</span>
                                <span class="month">{{ $blog->created_at->format('M') }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="blog-details__title">{{ __($blog->data_values->title) }}</h4>
                            <p>@php echo $blog->data_values->description @endphp</p>
                        </div>
                    </div>
                </div>

                <!-- Recent News -->
                <div class="container mb-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="text-center mb-0">-= Recent News =-</h6>
                        </div>
                    </div>
                    @foreach ($latests as $blog)
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-60 rounded">
                                            <div class="background">
                                                <img src="{{ getImage('assets/images/frontend/blog/' . $blog->data_values->image) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">
                                            <a href="{{ route('blogDetail', $blog->id) }}">
                                                {{ __($blog->data_values->title) }}
                                            </a>
                                        </h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>

        <!-- footer-->
        @auth
            @include($activeTemplate . 'includes.bottom_nav')
        @endauth
        @guest
            @include($activeTemplate . 'includes.home.bottom_nav')
        @endguest
    </body>
    
@endsection

@push('fbComment')
    @php echo loadExtension('fb-comment') @endphp
@endpush
