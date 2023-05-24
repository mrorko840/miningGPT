@extends($activeTemplate . 'layouts.master')
@section('content')
    <style>
        .StyleFont {
            font-family: "Times New Roman", Times, serif;
        }

        body {
            text-align: center;
            background-color: #3d5fa5;
        }

        .button {
            position: relative;
            display: inline-block;
            margin: 20px;
        }

        .buttonOff {
            position: relative;
            display: inline-block;
            margin: 20px;
        }

        .button a {
            color: white;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
            font-size: 36px;
            text-align: center;
            text-decoration: none;
            background-color: #FFA12B;
            display: block;
            position: relative;
            padding: 20px 23px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            text-shadow: 1px 2px 6px #0000007a;
            filter: dropshadow(color=#000, offx=0px, offy=1px);
            -webkit-box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #915100;
            -moz-box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #915100;
            box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #915100;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 75px;
        }

        .buttonOff a {
            color: white;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
            font-size: 36px;
            text-align: center;
            text-decoration: none;
            background-color: #bbbbbb;
            display: block;
            position: relative;
            padding: 20px 23px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            text-shadow: 1px 2px 6px #0000007a;
            filter: dropshadow(color=#000, offx=0px, offy=1px);
            -webkit-box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #14141499;
            -moz-box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #14141499;
            box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #14141499;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 75px;
        }

        .button a:active {
            top: 10px;
            background-color: #2b2b2b;

            -webkit-box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #14141499;
            -moz-box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3pxpx 0 #14141499;
            box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #14141499;
        }

        .buttonOff a:active {
            top: 10px;
            background-color: #605d59;

            -webkit-box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #14141499;
            -moz-box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3pxpx 0 #14141499;
            box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #14141499;
        }

        .button:after {
            content: "";
            height: 100%;
            width: 100%;
            padding: 4px;
            position: absolute;
            bottom: -15px;
            left: -4px;
            z-index: -1;
            background-color: #2B1800;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .buttonOff:after {
            content: "";
            height: 100%;
            width: 100%;
            padding: 4px;
            position: absolute;
            bottom: -15px;
            left: -4px;
            z-index: -1;
            background-color: #2B1800;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
    </style>

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
                @if ($general->holiday == Date('D'))
                    <h2 class="text-center">Today is Holiday</h2>
                    <div class="row">
                        <div class="col text-center">
                            <img width="90%" src="{{ asset('assets/templates/basic/assets/img/holiday.png') }}"
                                alt="Holiday">
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12 text-center">
                            @if (auth()->user()->isClick < date('Ymd') && auth()->user()->plan && auth()->user()->expire_date < now())
                                <h5 class="text-primary" id="btnMsg">Click this button to collect
                                    {{ $user->plan?->ads_rate }} {{ $general->cur_sym }}</h5>
                            @endif
                        </div>

                        <div class="col-12 text-center">
                            @if (auth()->user()->isClick < date('Ymd'))
                                @if (auth()->user()->plan && auth()->user()->expire_date > now())
                                    <div id="loadBtn">
                                        <button id="runTask" class="btn btn-lg shadow mineBtn">Collect Reward</button>
                                    </div>
                                @else
                                    <div id="loadBtn">
                                        <button id="runTask" class="btn btn-lg shadow mineBtn">Start Mining</button>
                                    </div>
                                @endif
                            @else
                                <button class="btn btn-lg shadow mineOffBtn">Mining is ON</button>
                            @endif
                        </div>

                        <div class="col-12 py-2 text-center">
                            @if (auth()->user()->isClick < date('Ymd'))
                                <div id="countTimer" class="card mx-auto d-none" style="width: 90%">
                                    <h5 class="text-white mb-0" id="counter"></h5>
                                </div>
                            @else
                                <div id="countTimer" class="card mx-auto" style="width: 90%">
                                    <h5 class="text-white mb-0" id="counter"></h5>
                                </div>
                            @endif
                        </div>

                        <div class="col-12">
                            @if (auth()->user()->isClick < date('Ymd'))
                                <img id="miningOnImg" class="img-fluid shadow" style="border-radius: 20px;" width="90%" src="{{ asset('assets/images/custom-mining/mining-off.png') }}" alt="">
                            @else
                                <img class="img-fluid shadow" style="border-radius: 20px;" width="90%" src="{{ asset('assets/images/custom-mining/mining-on.gif') }}" alt="">
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </main>

        <!-- footer-->
        @include($activeTemplate . 'includes.bottom_nav')



    </body>
@endsection

@push('script')
    <script>
        let isClicked = {{ auth()->user()->isClick ? auth()->user()->isClick : '0' }};
        let adsRate = {{ $user->plan?->ads_rate ? $user->plan?->ads_rate : '0' }};
        let planID = {{ $user->plan?->id ? $user->plan?->id : '0' }};

        let plan = '{{$user->plan}}';
        let expire_date = '{{$user->expire_date}}';

        //userinFo
        const userInfo = function() {
            $.ajax({
                type: "GET",
                url: "{{ route('user.userinfo') }}",
                success: function(res) {
                    console.log(res);
                    isClicked = res.isClick
                    if (res.plan) {
                        adsRate = res.plan.ads_rate;
                        planID = res.plan.id;
                    }
                    $('.user_balance').html(parseFloat(res.balance).toFixed(2) + ' {{ $general->cur_sym }}');
                }
            });
        }

        //run on window load
        userInfo()

        //noTask
        $(document).on('click', '#noTask', function(e) {
            e.preventDefault();
            notifyMsg('You have already collect Todays Reward!', 'error');
        });

        //runTask
        $(document).on('click', '#runTask', function(e) {
            e.preventDefault();
            if (planID > 0 && expire_date > '{{now()}}') {
                if ( isClicked < {{ date('Ymd') }} ) {
                    let reward = adsRate;
                    $.ajax({
                        type: "POST",
                        url: "{{ route('user.runtask') }}",
                        data: {
                            reward: reward
                        },
                        success: function(res) {
                            notifyMsg(res.msg, res.cls);
                            $("#btnMsg").html('');
                            $('#miningOnImg').attr('src', `{{ asset('assets/images/custom-mining/mining-on.gif') }}`);
                            $("#loadBtn").html(
                                `<button class="btn btn-lg shadow mineOffBtn">Mining is ON</button>`
                            );
                            $('#countTimer').removeClass('d-none');

                            userInfo()
                        }
                    });
                } else {
                    notifyMsg('You have already collect Todays Reward!', 'error');
                }
            } else {
                notifyMsg('Upgrade Your Plan at first!', 'warning');
            }
        });


        //create CountDown
        function createCountDown(elementId, sec) {
            var tms = sec;

            var x = setInterval(function() {
                if (isClicked >= {{ date('Ymd') }}) {
                    var distance = tms * 1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById(elementId).innerHTML = days + "d: " + hours + "h " + minutes +
                        "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "{{ __('COMPLETE') }}";

                    }
                    tms--;
                }

            }, 1000);
        }
        createCountDown('counter', {{ \Carbon\Carbon::tomorrow()->diffInSeconds() }});
    </script>
@endpush
