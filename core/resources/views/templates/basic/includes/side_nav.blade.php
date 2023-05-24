<?php $user = Auth::user(); ?>


<!-- menu main -->
<div class="main-menu">
    <div class="row mb-4 no-gutters">
        <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span
                    class="material-icons">chevron_left</span></button></div>
        <div class="col-auto">
            <div class="avatar avatar-40 rounded-circle position-relative">
                <figure class="background profilePhoto">
                    <img src="{{ getImage(imagePath()['profile']['user']['path'].'/'. @$user->image,imagePath()['profile']['user']['size']) }}" alt="LOGO">
                </figure>
            </div>
        </div>
        <div class="col pl-3 text-left align-self-center">
            <h6 class="mb-1">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</h6>
            <p class="small text-default-secondary">{{ Auth::user()->username }}</p>
        </div>
    </div>
    <div class="menu-container">
        <div class="row mb-4">
            <div class="col">
                <h4 class="mb-1 font-weight-normal user_balance">{{ $general->cur_sym }} {{ showAmount($user->balance) }}</h4>
                <p class="text-default-secondary">My Balance</p>
            </div>
            <div class="col-auto">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#depositModal" class="btn btn-default btn-40 rounded-circle border-0 dpbtnSidebar"><i
                        class="material-icons">add</i></a>
            </div>
        </div>

        <ul class="nav nav-pills flex-column ">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('user.home') }}">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/home-3.png')}}" alt="">
                        Home
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.analytics') }}">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/money-graph.png')}}" alt="">
                        Analytics
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.referred') }}">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/team-3.png')}}" alt="">
                        Refer Friends
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link dpbtnSidebar" href="javascript:void(0)" data-toggle="modal" data-target="#depositModal">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/deposit-2.png')}}" alt="">
                        Add Fund
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link dpbtnSidebar" href="javascript:void(0)" data-toggle="modal" data-target="#withdrawModal">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/wallet-3.png')}}" alt="">
                        Withdraw Fund
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.profile.setting') }}">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/profile-2.png')}}" alt="">
                        Profile Settings
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.transactions') }}">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/trx.png')}}" alt="">
                        Transactions
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ticket.open') }}">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/support-24.png')}}" alt="">
                        Contact Admin
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages', 'about-us') }}">
                    <div>
                        <img width="20px" class="nav-icons" src="{{asset('assets/images/3d-logo/call-person.png')}}" alt="">
                        About Us
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
        </ul>
        <div class="text-center">
            <a href="{{ route('user.logout') }}" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
        </div>
    </div>
</div>
<div class="backdrop"></div>

@push('script')
    <script>
        $(document).on('click', '.dpbtnSidebar', function () {
            $('.backdrop').click();
        });
    </script>
@endpush