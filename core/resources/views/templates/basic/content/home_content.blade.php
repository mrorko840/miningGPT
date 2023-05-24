<!-- page content start -->
<div class="container pb-3">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner border-custom shadow-sm">

            @php $i=0; @endphp
            @forelse($banners as $item)
                @php
                    $actives = '';
                @endphp

                @if ($i == 0)
                    @php $actives = 'active';@endphp
                @endif
                @php $i=$i+1; @endphp

                <div class="carousel-item <?= $actives ?>">
                    <img class="d-block w-100"
                        src="{{ getImage('assets/images/frontend/banner/' . $item->data_values->image) }}" alt="banner">
                </div>

            @empty
            @endforelse

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Scroling Notice -->
<div class="container mb-3">
    <div class="row mx-0">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row">
                        <div
                            class="col-auto d-flex align-items-center justify-content-center border-custom bg-warning-light text-warning">
                            <span class="material-icons">campaign</span>
                        </div>
                        <div class="col align-items-center px-0 mx-0 pt-1">
                            <marquee behavior="scroll" direction="left">
                                @php
                                    echo $noticeCaption->data_values->scrolingNotice;
                                @endphp
                            </marquee>
                        </div>
                        <div style="font-size: 10px"
                            class="col-auto d-flex align-items-center justify-content-center border-custom bg-default-secondary">
                            <span style="font-size: 17px" class="material-icons pr-1">groups</span>
                            <b id="dynamic_counter"></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container mb-4">

    <div class="row mb-3">

        <div class="col pr-2">

            <a href="{{ route('contact') }}">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col align-self-center pr-0">
                                <h6 class="mb-1">Help Center</h6>
                                <p class="small text-secondary">Click here</p>
                            </div>

                            <div class="col-auto">
                                <div
                                    class="avatar avatar-50 border-0 bg-success-light rounded-circle text-success">
                                    <i class="material-icons vm text-template">privacy_tip</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('income.guide') }}">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col align-self-center pr-0">
                                <h6 class="mb-1">Income Guide</h6>
                                <p class="small text-secondary">Click here</p>
                            </div>

                            <div class="col-auto">
                                <div
                                    class="avatar avatar-50 border-0 bg-warning-light rounded-circle text-warning">
                                    <i class="material-icons vm text-template">table_chart</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>

        </div>

        <div class="col pl-2">

            <a href="{{ route('user.referred') }}">
                <div class="card h-100 border-0">
                    <div class="card-body pb-0">
                        <div class="row align-items-center">
                            <div class="col-12 align-self-center">
                                <h6 class="mb-1">Invite Friends</h6>
                                <p class="small text-secondary">Click here</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pt-0">
                        <div class="text-right">
                            <div class="avatar avatar-100 border-0 rounded text-danger">
                                <div class="background">
                                    <img src="{{ asset($activeTemplateTrue . '/assets/img/home/reffer_home.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="row">

        <div class="col pr-2">

            <a href="{{ $yourLinks->data_values->video }}" target="blank">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col align-self-center pr-0">
                                <h6 class="mb-1">Video Tutorial</h6>
                                <p class="small text-secondary">Click here</p>
                            </div>
                            <div class="col-auto">
                                <div
                                    class="avatar avatar-50 border-0 bg-danger-light rounded-circle text-danger">
                                    <i class="material-icons vm text-template">smart_display</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>

        </div>

        <div class="col pl-2 ">

            <a href="{{ route('blog') }}">
                <div class="card border-0 h-100">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col align-self-center pr-0">
                                <h6 class="mb-1">News</h6>
                                <p class="small text-secondary">Click here</p>
                            </div>
                            <div class="col-auto">
                                <div
                                    class="avatar avatar-50 border-0 bg-purple-light rounded-circle text-purple">
                                    <i class="material-icons vm text-template">newspaper</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>

        </div>

    </div>
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="row">
                <div class="col-3 text-center">
                    <a href="{{ route('income.guide') }}" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/percent.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>Income Guide</p>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="{{ route('plans') }}" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/diamond.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>Membership</p>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="{{ route('user.ptc.index') }}" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/btc-mining-3.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>Start Mining</p>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#appDownloadModal" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/app-store.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>Apps</p>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="{{ route('blog') }}" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/news-paper.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>News</p>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="{{ route('income.guide') }}" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/youtube.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>Tutorial</p>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="{{ route('contact') }}" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/support-24.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>Help Center</p>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="{{ route('pages', 'about-us') }}" class="card-box">
                        <img src="{{ asset('assets/images/3d-logo/call-person.png') }}"
                            style="max-width: 60px; max-height: 60px;" alt="">
                        <p>About Us</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TradingView Widget BEGIN -->
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <div class="tradingview-widget-container">
                <div style="height: 250px;" id="tradingview_b3eeb"></div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3">
    <img class="img-fluid shadow-sm" style="border-radius: 30px;" src="{{asset('assets/images/custom-Img/tradingview.gif')}}" alt="">
</div>

<!-- Swiper Our Reviews-->
<div class="container mb-4">
    <div class="row mb-3">
        <div class="col">
            <h6 class="text-white mb-0">Our Reviews</h6>
        </div>
    </div>
    <div class="swiper-container swiper-users ">
        <div class="swiper-wrapper">
            @forelse($fake_reviews as $review)
                <div class="swiper-slide">
                    <div class="card h-100" style="width: 320px;">
                        <div class="card-body pb-1">
                            <div class="row">
                                <div class="col">
                                    <i style="font-size: 30px" class="las la-feather-alt"></i>
                                    <p class="my-2">{{ @$review->data_values->review_text }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer pt-0">
                            <div class="row mt-3">
                                <div class="col-auto">
                                    <img class="rounded-circle img-fluid img-thumbnail" style="width: 50px; height: 50px" src="{{ getImage('assets/images/frontend/fake_review/' . @$review->data_values->image) }}" alt=""/>
                                </div>
                                <div class="col pl-0">
                                    <h6>{{ @$review->data_values->name }}</h6>
                                    <p class="text-secondary">{{ showDateTime(@$review->updated_at, 'd-m-Y, h:i a') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </div>
</div>



<!-- TradingView Widget -->
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
    new TradingView.widget({
        "autosize": true,
        "symbol": "BINANCE:BTCUSDT",
        "interval": "1",
        "timezone": "Asia/Almaty",
        "theme": "dark",
        "style": "1",
        "locale": "en",
        "toolbar_bg": "#f1f3f6",
        "enable_publishing": false,
        "hide_legend": true,
        "allow_symbol_change": true,
        "save_image": false,
        "container_id": "tradingview_b3eeb"
    });
</script>
<!-- TradingView Widget END -->