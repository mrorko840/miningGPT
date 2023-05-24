@extends($activeTemplate.'layouts.master')
@section('content')

@php
    $yourLinks = getContent('links.content', true);
    $total_task = $user->daily_limit;
    if ($total_task > 0) {
        $remain_task_ratio = 100 * (($total_task - $user->clicks->where('view_date',Date('Y-m-d'))->count()) / $total_task);
        $complete_task_ratio = 100 * ($user->clicks->where('view_date',Date('Y-m-d'))->count() / $total_task);
    }
@endphp

<!-- App download Modal -->
@include('templates.basic.includes.app_down_modal')
    
<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="addmoney">

        @include(activeTemplate().'includes.side_nav')
        
        <!-- Cover Photo -->
        {{-- <div style="background-image: url({{ getImage('assets/images/user/cover/'.$user->cover_image) }})" class="coverPhoto"></div>
        <div class="text-right">
            <form id="coverImgForm">
                <div class="avatar-edit">
                    <input type='file' class="coverPicUpload" id="cover_image" name="cover_image" accept=".png, .jpg, .jpeg" hidden/>
                    <label id="coverPhotoSpin" 
                        style="position: inherit;" 
                        class="text-white bg-orange coverEdit" 
                        for="cover_image">
                        <span  class="material-icons">photo_camera</span>
                    </label>
                </div>
            </form>
        </div> --}}

        <!-- Begin page content -->
        <main class="flex-shrink-0 main has-footer">
            <!-- Fixed navbar -->
            @include(activeTemplate().'includes.top_nav')

            <div class="main-container">

                <div class="container">

                    <!-- Profile Wallet Card -->
                    <div class="card border-0 mb-3">
                        <div class="card-header pb-0 mt-2">
                            <div class="row align-items-end">
                                <div class="col-6 text-left">
                                    <img src="{{asset('assets/images/user/profile')}}/{{$user->image ? $user->image : 'dummy-profile.png'}}"  class="img-thumbnail rounded-circle" style="width: 70px" alt="img">
                                    <h6 class="text-no-shadow mt-1">{{ __($user->fullname) }}</h6>
                                </div>
                                <div class="col-6 text-right">
                                    <h6 class="badge badge-warning">
                                        @if($user->plan)
                                            @if($user->expire_date > now()) 
                                                {{ __($user->plan->name) }} 
                                            @endif 
                                            
                                            @if($user->expire_date < now()) 
                                                <span>(@lang('Expired'))</span> 
                                            @endif
                                        @else
                                            @lang('No Plan')
                                        @endif
                                    </h6>
                                    <h6 class="mb-0 text-no-shadow">My Balance</h6>
                                    <h3 class="text-warning">{{ $general->cur_sym }} {{ showAmount($user->balance) }}</h3>
                                </div>
                            </div>
                        </div>
                        <hr class="my-1">
                        <div class="card-footer">
                            <div class="row align-items-center">
                                <div class="col-6 text-center" style="border-right: 2px dashed #dee2e6 !important">
                                    <h5 class="text-shadow">{{ showAmount($user->deposits->where('status',1)->sum('amount')) }} {{ $general->cur_sym }}</h5>
                                    <span class="text-secondary">Total Deposit</span>
                                </div>
                                <hr>
                                <div class="col-6 text-center" style="border-left: 2px dashed #dee2e6 !important">
                                    <h5 class="text-shadow">{{ showAmount($user->withdrawals->where('status',1)->sum('amount')) }} {{ $general->cur_sym }}</h5>
                                    <span class="text-secondary">Total Withdraw</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card items -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <div class="card-item" data-toggle="modal" data-target="#depositModal">
                                        <img src="{{asset('assets/images/3d-logo/deposit-2.png')}}" alt="">
                                        <p>Deposit</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="card-item" 
                                        @if ($general->balance_transfer == 0) 
                                            onclick="notifyMsg('User balance transfer currently disabled!','error')" 
                                        @else 
                                            data-toggle="modal" data-target="#transferModal" 
                                        @endif >
                                        <img src="{{asset('assets/images/3d-logo/transfer-2.png')}}" alt="">
                                        <p>Transfer</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="card-item" data-toggle="modal" data-target="#withdrawModal">
                                        <img src="{{asset('assets/images/3d-logo/wallet-3.png')}}" alt="">
                                        <p>Withdraw</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6 text-center" style="border-right: 2px dashed #dee2e6 !important">
                                    <h5 class="text-shadow">{{ showAmount(@$total_invest) }} {{ $general->cur_sym }}</h5>
                                    <span class="text-secondary">Total Invest</span>
                                </div>
                                <hr>
                                <div class="col-6 text-center" style="border-left: 2px dashed #dee2e6 !important">
                                    <h5 class="text-shadow">{{ showAmount(@$earn['total'] + @$total_commission) }} {{ $general->cur_sym }}</h5>
                                    <span class="text-secondary">Total Earnings</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center">
                                <div class="col-6 text-center" style="border-right: 2px dashed #dee2e6 !important">
                                    <h5 class="text-shadow">{{ showAmount(@$total_commission) }} {{ $general->cur_sym }}</h5>
                                    <span class="text-secondary">Team Earnings</span>
                                </div>
                                <hr>
                                <div class="col-6 text-center" style="border-left: 2px dashed #dee2e6 !important">
                                    <h5 class="text-shadow">{{ showAmount(@$earn['today']) }} {{ $general->cur_sym }}</h5>
                                    <span class="text-secondary">Today Earnings</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Settings -->
                    <div class="card mb-3">
                        <div class="card-header border-bottom">
                            <h6 class="mb-0">Account</h6>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-top">
                                <div class="col-3 text-center pr-1">
                                    <a href="{{ route('user.profile.setting') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/profile-2.png')}}" alt="">
                                        <p>Profile</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center px-1">
                                    <a href="{{ route('user.address.setting') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/address-1.png')}}" alt="">
                                        <p>Address</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center px-1">
                                    <a href="{{ route('user.change.password') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/key.png')}}" alt="">
                                        <p>Password</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center pl-1">
                                    <a href="{{ route('user.withdraw.password') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/pin-lock-2.png')}}" alt="">
                                        <p>W-Pin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reports -->
                    <div class="card mb-3">
                        <div class="card-header border-bottom">
                            <h6 class="mb-0">Reports</h6>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-top">
                                <div class="col-3 text-center pr-1">
                                    <a href="{{ route('user.commissions') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/money-graph.png')}}" alt="">
                                        <p>Commission Logs</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center px-1">
                                    <a href="{{ route('user.transactions') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/trx.png')}}" alt="">
                                        <p>Transaction Logs</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center px-1">
                                    <a href="{{ route('user.deposit.history') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/history-2.png')}}" alt="">
                                        <p>Deposit History</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center pl-1">
                                    <a href="{{ route('user.withdraw.history') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/clock.png')}}" alt="">
                                        <p>Withdraw History</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Others -->
                    <div class="card mb-0">
                        <div class="card-header border-bottom">
                            <h6 class="mb-0">Others</h6>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-top">
                                <div class="col-3 text-center pr-1">
                                    <a href="{{ route('user.referred') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/team-3.png')}}" alt="">
                                        <p>My Team</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center px-1">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#appDownloadModal" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/app-store.png')}}" alt="">
                                        <p>Apps</p>
                                    </a>
                                </div>
                                <div class="col-3 text-center px-1">
                                    <a href="{{ route('user.logout') }}" class="card-box">
                                        <img src="{{asset('assets/images/3d-logo/logout-2.png')}}" alt="">
                                        <p>Log Out</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>

        <!-- QrCode Modal -->

        <div class="modal fade" id="QrCodeModal" tabindex="-1" role="dialog" aria-labelledby="QrCodeModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="QrCodeModalCenterTitle">Invite with - QR Code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div align="center" class="modal-body">
                        <img src="https://chart.googleapis.com/chart?cht=qr&chl={{ route('user.register') }}/{{ auth()->user()->username }}&chs=180x180&choe=UTF-8&chld=L|2" alt="QR Code">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

</body>

@include(activeTemplate() . 'includes.bottom_nav')

@push('style-custom')
    <style>
        .blalnceCardBtn {
            height: 50px !important; 
            width: 50px !important; 
            box-shadow: 0 0 0.5rem 0px #00000040 !important;
            border-radius: 1.3rem !important;
            color: #fff !important;
            align-items: center !important;
            justify-content: center !important;
        }
        .coverPhoto{
            margin-top: 60px !important;
            background-size: cover;
            background-repeat: no-repeat;
            height: 170px;
            width: 100%;
            background-position: center;
            position: cover;
        }

        .top-220 {
            margin-top: -220px;
        }

        .profile-thumb {
            padding: 0.18rem !important;
            background-color: #3d5fa5 !important;
            border: 1px solid #3d5fa5 !important;
            max-width: 100%;
            height: auto;
            transition: ease all 0.5s;
            -webkit-transition: ease all 0.5s;
        }

        .darkmode .profile-thumb {
            background-color: #0f0b04 !important;
            border: 1px solid #0f0b04 !important;
        }
    </style>
    <style>
        .avatar-edit label {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            text-align: center;
            line-height: 41px;
            border: 3px solid #3d5fa5;
            font-size: 18px;
            cursor: pointer;
            position: absolute;
            transition: ease all 0.5s;
            -webkit-transition: ease all 0.5s;
        }
        .avatar-edit{
            transition: ease all 0.5s;
            -webkit-transition: ease all 0.5s;
        }
        .darkmode .avatar-edit {
            background-color: #040910;
        }
        .darkmode .avatar-edit label {
            border: 3px solid #040910 !important;
        }
        .imgEdit {
            margin-left: 6.3rem !important;
            margin-top: -2.6rem !important;
        }
        .coverEdit {
            margin-right: 0.3rem !important;
            margin-top: -45px !important;
        }
    </style>
@endpush

@push('script')
    <script>

        $(".profilePicUpload").on('change', function(e) {
            e.preventDefault();
            //loading
            $('.loadProfilePhoto').attr('src', "{{asset('assets/images/profile_loading.gif')}}");
            $.ajax({
                method: "POST",
                url: "{{route('user.profile.photo')}}",
                data: new FormData($("#imgForm")[0]),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function (res) {
                    console.log(res.msg);
                    $('.loadProfilePhoto').attr('src', "{{route('home')}}/"+res.img);
                    // $('.profilePhoto').attr('style', '');
                    $('.profilePhoto').attr('style', "background-image: url('{{route('home')}}/"+res.img+"');");
                    notifyMsg(res.msg,res.cls)
                },
                error: function (err) {
                    let msg = err.responseJSON['message'];
                    notifyMsg(msg,'error')
                }
            });

        });

        //cover-photo Upload//
        $(".coverPicUpload").on('change', function(e) {
            e.preventDefault();
            //loading
            $('.coverPhoto').attr('style', "background-image: url('{{asset('assets/images/cover_loading.gif')}}');");
            $.ajax({
                method: "POST",
                url: "{{route('user.cover.photo')}}",
                data: new FormData($("#coverImgForm")[0]),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function (res) {
                    console.log(res.msg);
                    notifyMsg(res.msg,res.cls);
                    $('.coverPhoto').attr('style', "background-image: url('{{route('home')}}/"+res.img+"');");
                },
                error: function (err) {
                    let msg = err.responseJSON['message'];
                    notifyMsg(msg,'error')
                }
            });

        });
    </script>
@endpush
@endsection
