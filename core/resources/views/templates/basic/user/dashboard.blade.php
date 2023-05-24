@extends($activeTemplate.'layouts.master')
@section('content')
@include('templates.basic.liveonline')
@php
    $kycInfo = getContent('kyc_info.content',true);
    $fake_reviews = getContent('fake_review.element');
    $noticeCaption = getContent('notice.content',true);
    $banners = getContent('banner.element');
    $yourLinks = getContent('links.content', true);
@endphp

<!-- App download Modal -->
@include($activeTemplate . 'includes.app_down_modal')


<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    <!-- Top navbar -->
    @include($activeTemplate . 'includes.side_nav')

    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        @include($activeTemplate . 'includes.top_nav')

        <!-- Balance Card -->
        @include('templates.basic.component.balance_card')

        <div class="main-container">
            <!-- Home Content -->
            @include('templates.basic.content.home_content')
            <!-- End Home Content -->
            

            {{-- 


            <div class="container mb-4">
                
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-around">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 border-0 bg-warning-light rounded-circle text-warning">
                                            <i class="material-icons vm text-template">savings</i>
                                        </div>
                                    </div>
                                    <div align="left" class="col-3 align-self-center pl-0">
                                        <h6 class="mb-1">{{ $general->cur_sym }} {{ showAmount($total_invest) }}</h6>
                                        <p class="small text-secondary">Total Invest</p>
                                    </div>
                                    
                                    <div align="right" class="col-3 align-items-center pr-0 border-left">
                                        <h6 class="mb-1">{{ $general->cur_sym }} {{ showAmount($total['earn'] + $total_commission) }}</h6>
                                        <p class="small text-secondary">Total Earn</p>
                                    </div>
                                    <div class="col-auto pl-0">
                                        <div class="avatar avatar-40 border-0 bg-success-light rounded-circle text-success">
                                            <i class="material-icons vm text-template">currency_exchange</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-around">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 border-0 bg-danger-light rounded-circle text-danger">
                                            <i class="material-icons vm text-template">supervised_user_circle</i>
                                        </div>
                                    </div>
                                    <div align="left" class="col-3 align-self-center pl-0">
                                        <h6 class="mb-1">{{ $general->cur_sym }} {{ showAmount($total_commission) }}</h6>
                                        <p class="small text-secondary">Team Earn</p>
                                    </div>
                                    
                                    <div align="right" class="col-3 align-items-center pr-0 border-left">
                                        <h6 class="mb-1">{{ $general->cur_sym }} {{ showAmount($today['earn']) }}</h6>
                                        <p class="small text-secondary">Today Earn</p>
                                    </div>
                                    <div class="col-auto pl-0">
                                        <div class="avatar avatar-40 border-0 bg-default-light rounded-circle text-default">
                                            <i class="material-icons vm text-template">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- PWA add to home display -->
            <div class="container mb-4">
                <div class="card" id="addtodevice">
                    <div class="card-body text-center">
                        <div class="row mb-3">
                            <div class="col-10 col-md-4 mx-auto"><img src="{{ asset($activeTemplateTrue . 'assets/img/install-app.png') }}" alt="" class="mw-100"></div>
                        </div>

                        <h5 class="text-dark">Add to <span class="font-weight-bold">Home screen</span></h5>
                        <p class="text-secondary">See  as in fullscreen on your device.</p>
                        <button data-toggle="modal" data-target="#appDownloadModal" class="btn btn-sm btn-default px-4 rounded" id="addtohome">Install</button>
                    </div>
                </div>
            </div>
            <!-- PWA add to home display --> 
            
            --}}

            <!--Reffer Code Copy-->
            <div class="container mb-4 d-none">
                <div class="alert alert-success d-none" id="successmessage">Refferal link copied</div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="refferal Link"
                        value="{{ route('user.register') }}/{{ auth()->user()->username }}" id="link">
                    <div class="input-group-append">
                        {{-- <button class="btn btn-default rounded" type="button" id="basic-addon2"
                            onclick="copyRefLink()">Copy link</button> --}}
                    </div>
                </div>
            </div>

            <div class="container ">
                <div class="row" hidden>
                    <div class="col text-center" >
                        <h5 class="subtitle">Most Exciting Feature</h5>
                        <p class="text-secondary">Take a look at our services</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- footer-->
    @include($activeTemplate . 'includes.bottom_nav')


    
</body>


@endsection
@push('script')
<script src="{{ asset('assets/admin/js/vendor/apexcharts.min.js') }}"></script>
<script>
    "use strict";

    $('.main-wrapper').addClass('section--bg');

    "use strict";

    //hidden copy
    function copyReferLink(value) {
        var tempInput = document.createElement("input");
        tempInput.style = "position: absolute; left: -1000px; top: -1000px";
        tempInput.value = value;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        notify('success', "Copied: " + tempInput.value);
    }

    const copyRefLink = () => {
        var copyText = document.getElementById("link");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        notify('success', "Copied: " + copyText.value);
    }
</script>
<script>
    // (function ($) {
    //     "use strict";
    //     // apex-bar-chart js
    //     var options = {
    //     series: [{
    //     name: 'Clicks',
    //     data: [
    //         @foreach($chart['click'] as $key => $click)
    //             {{ $click }},
    //         @endforeach
    //     ]
    //     }, {
    //     name: 'Earn Amount',
    //     data: [
    //             @foreach($chart['amount'] as $key => $amount)
    //                 {{ $amount }},
    //             @endforeach
    //     ]
    //     }],
    //     chart: {
    //     type: 'bar',
    //     height: 580,
    //     toolbar: {
    //         show: false
    //     }
    //     },
    //     plotOptions: {
    //     bar: {
    //         horizontal: false,
    //         columnWidth: '55%',
    //         endingShape: 'rounded'
    //     },
    //     },
    //     dataLabels: {
    //     enabled: false
    //     },
    //     stroke: {
    //     show: true,
    //     width: 2,
    //     colors: ['transparent']
    //     },
    //     xaxis: {
    //     categories: [
    //     @foreach($chart['amount'] as $key => $amount)
    //                 '{{ $key }}',
    //             @endforeach
    //     ],
    //     },
    //     fill: {
    //     opacity: 1
    //     },
    //     tooltip: {
    //     y: {
    //         formatter: function (val) {
    //         return val
    //         }
    //     }
    //     }
    //     };
    //     var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
    //     chart.render();
    //         function createCountDown(elementId, sec) {
    //             var tms = sec;
    //             var x = setInterval(function() {
    //                 var distance = tms*1000;
    //                 var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //                 var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //                 var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //                 var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    //                 document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
    //                 if (distance < 0) {
    //                     clearInterval(x);
    //                     document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
    //                 }
    //                 tms--;
    //             }, 1000);
    //         }
    //     createCountDown('counter', {{\Carbon\Carbon::tomorrow()->diffInSeconds()}});
    // })(jQuery);
</script>
@endpush


