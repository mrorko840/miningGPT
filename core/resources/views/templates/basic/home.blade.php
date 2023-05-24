    @auth
        @php
            header('Location: user/dashboard');
            die();
        @endphp
    @endauth


    @extends($activeTemplate . 'layouts.frontend')
    @section('content')
        @include('templates.basic.liveonline')
        @php
            $banners = getContent('banner.element');
            $yourLinks = getContent('links.content', true);
            $fake_reviews = getContent('fake_review.element');
            $noticeCaption = getContent('notice.content', true);
        @endphp

        <!-- App download Modal -->
        @include('templates.basic.includes.app_down_modal')

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
                @include($activeTemplate . 'includes.home.top_nav')

                <div class="main-container">

                    <!-- Home Content -->
                    @include('templates.basic.content.home_content')
                    <!-- End Home Content -->

                </div>
            </main>

            <!-- footer-->
            @include($activeTemplate . 'includes.home.bottom_nav')

        </body>

        @if ($sections->secs != null)
            @foreach (json_decode($sections->secs) as $sec)
                @include($activeTemplate . 'sections.' . $sec)
            @endforeach
        @endif
    @endsection