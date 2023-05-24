@extends($activeTemplate . 'layouts.master')
@section('content')
@php
    $fake_reviews = getContent('fake_review.element');
@endphp



<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="analytics">
    <!-- Top navbar -->
    @include($activeTemplate . 'includes.side_nav')

    
    <div class="backdrop"></div>


    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        @include($activeTemplate . 'includes.top_nav')

        <!-- page content start -->
        
        
        <!-- Balance Card -->
        @include('templates.basic.component.balance_card')

        <div class="container text-center overflow-hidden">
            <canvas id="mixedchartjs"></canvas>
        </div>
        <div class="main-container">

            <!-- Analytics -->
            <div class="container mb-4">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="doghnutchart" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Total Earnings</p>
                                <h6>{{ $general->cur_sym }} {{ showAmount($total['earn'] + $total_commission) }}</h6>
                                {{-- <p class="text-success">{{ intval(@$widget['win_raito']) }}% <span class="material-icons small">call_made</span></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="doghnutchart3" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Total Invest</p>
                                <h6>{{ $general->cur_sym }} {{ showAmount($total_invest) }}</h6>
                                {{-- <p class="text-danger">{{ intval(@$widget['loss_raito']) }}% <span class="material-icons small">call_received</span></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-none d-md-block" hidden>
                        <div class="card" hidden>
                            <div class="card-body">
                                <canvas id="doghnutchart4" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Send</p>
                                <h6>$ 2051.00</h6>
                                <p class="text-success">10% <span class="material-icons small">call_made</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-none d-md-block" hidden>
                        <div class="card" hidden>
                            <div class="card-body">
                                <canvas id="doghnutchart5" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Received</p>
                                <h6>$ 1200.00 </h6>
                                <p class="text-danger">-5% <span class="material-icons small">call_received</span></p>
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>
        
    </main>

    <!-- footer-->
    @include($activeTemplate . 'includes.bottom_nav')


    
</body>

@endsection

@push('script')
<script src="{{ asset('assets/admin/js/vendor/apexcharts.min.js') }}"></script>

<script>
    (function ($) {
        "use strict";
        // apex-bar-chart js
        var options = {
        series: [{
        name: '<p class="text-primary">Clicks</p>',
        data: [
            @foreach($chart['click'] as $key => $click)
                {{ $click }},
            @endforeach
        ]
        }, {
        name: '<p class="text-success">Earn Amount</p>',
        data: [
                @foreach($chart['amount'] as $key => $amount)
                    {{ $amount }},
                @endforeach
        ]
        }],
        chart: {
        type: 'bar',
        height: 580,
        toolbar: {
            show: false
        }
        },
        plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
        },
        dataLabels: {
        enabled: false
        },
        stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
        },
        xaxis: {
        categories: [
        @foreach($chart['amount'] as $key => $amount)
                    '{{ $key }}',
                @endforeach
        ],
        },
        fill: {
        opacity: 1
        },
        tooltip: {
        y: {
            formatter: function (val) {
            return val
            }
        }
        }
        };
        var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
        chart.render();
            function createCountDown(elementId, sec) {
                var tms = sec;
                var x = setInterval(function() {
                    var distance = tms*1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                    }
                    tms--;
                }, 1000);
            }
        createCountDown('counter', {{\Carbon\Carbon::tomorrow()->diffInSeconds()}});
    })(jQuery);
</script>
@endpush