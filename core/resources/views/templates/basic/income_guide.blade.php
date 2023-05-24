@extends($activeTemplate .'layouts.frontend')
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
            
            <!--Membership Plan Details-->
            <div class="container mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="subtitle pb-0 mb-0">
                            <div class="avatar avatar-40 bg-default-light text-default rounded mr-2">
                                <span class="material-icons vm">
                                    diamond
                                </span>
                            </div>
                            Membership Plan Details
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-default">
                                        <th scope="col">VIP</th>
                                        <th class="text-center" scope="col">{{ $general->cur_text }}</th>
                                        <th class="text-center" scope="col">Daily Income</th>
                                        <th class="text-center" scope="col">Monthly Income</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($plans as $item)
                                    <tr class="text-default">
                                        <th scope="row">{{ $item->name }}</th>
                                        <td class="text-center">{{ showAmount($item->price) }}</td>
                                        <td class="text-center">{{ showAmount($item->ads_rate) }}</td>
                                        <td class="text-center">{{ showAmount(($item->ads_rate) * 30) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--Reffer commission list-->
            <div class="container mb-4">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 border-0 bg-danger-light rounded-circle text-danger">
                                    <i class="material-icons vm text-template">share</i>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <h6 class="mb-1">Refer and Earn Rewards</h6>
                                <p class="small text-secondary">Share your referal link and start earning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Deposit-->
            @if ( @$general->deposit_commission )
                <div class="container mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h6>Deposit Refer Commission</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-default">
                                            <th scope="col">Level</th>
                                            <th scope="col" class="text-center">Bonus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($referrals['deposit'] as $item)
                                            <tr class="text-default">
                                                <th scope="row">Level {{ $item->level }}</th>
                                                <td class="text-center">{{ $item->percent }}%</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!--Membership-->
            @if ( @$general->plan_subscribe_commission )
                <div class="container mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h6>Plan Refer Commission</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-default">
                                            <th scope="col">Level</th>
                                            <th scope="col" class="text-center">Bonus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($referrals['plan'] as $item)
                                            <tr class="text-default">
                                                <th scope="row">Level {{ $item->level }}</th>
                                                <td class="text-center">{{ $item->percent }}%</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!--Ads-->
            @if ( @$general->ptc_view_commission )
                <div class="container mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h6>Mining Refer Commission</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-default">
                                            <th scope="col">Level</th>
                                            <th scope="col" class="text-center">Bonus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($referrals['ads'] as $item)
                                            <tr class="text-default">
                                                <th scope="row">Level {{ $item->level }}</th>
                                                <td class="text-center">{{ $item->percent }}%</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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