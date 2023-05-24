@php
    $yourLinks = getContent('links.content', true);
@endphp
<!-- footer-->
<div class="footer">
    <div class="row no-gutters justify-content-center">
        <div class="col">
            <a href="{{ route('home') }}" class="{{ request()->path() == 'user/dashboard' ? 'active jumpBtn' : '' }}">
                <img class="img-fluid footer-icon" src="{{ asset('assets/images/3d-logo/home-3.png') }}" alt="">
                <p>Dashboard</p>
            </a>
        </div>
        <div class="col">
            <a href="{{ $yourLinks->data_values->telegram }}"
                class="{{ request()->path() == 'user/analytics' ? 'active jumpBtn' : '' }}">
                <img class="img-fluid footer-icon" src="{{ asset('assets/images/3d-logo/telegram.png') }}"
                    alt="">
                <p>Telegram</p>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('user.ptc.index') }}"
                class="{{ request()->path() == 'user/ptc' ? 'active jumpBtn' : '' }}">
                <img class="img-fluid footer-icon-middle" src="{{ asset('assets/images/3d-logo/btc-mining-7.png') }}"
                    alt="">
            </a>
        </div>
        <div class="col">
            <a href="{{ route('plans') }}"
                class="{{ request()->path() == 'plans' ? 'active jumpBtn' : '' }}">
                <img class="img-fluid footer-icon" src="{{ asset('assets/images/3d-logo/diamond.png') }}" alt="">
                <p>Plans</p>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('user.display_profile') }}"
                class="{{ request()->path() == 'user/display-profile' ? 'active jumpBtn' : '' }}">
                <img class="img-fluid footer-icon" src="{{ asset('assets/images/3d-logo/user-4.png') }}" alt="">
                <p>Profile</p>
            </a>
        </div>
    </div>
</div>


{{-- <div class="footer">
    <div class="row no-gutters justify-content-center">
        <div class="col">
            <a href="{{ route('home') }}" class="{{ request()->path() == 'user/dashboard' ? 'active jumpBtn' : '' }}">
                <i class="material-icons">home</i>
                <p>Dashboard</p>
            </a>
        </div>
        <div class="col">
            <a href="{{ $yourLinks->data_values->telegram }}" class="{{ request()->path() == 'user/analytics' ? 'active jumpBtn' : '' }}">
                <i class="material-icons">telegram</i>
                <p>Telegram</p>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('plans') }}" class="text-center d-flex justify-content-center">
            <div id="diamond" style="height: 56px; width: 56px; margin-top: -23px;" class="rounded-circle shadow d-flex align-items-center {{ request()->path() == 'plans' ? 'bg-orange-light text-orange jumpBtnMdl' : 'bg-ash-light text-ash' }}">
                <i 
                    style="font-size: 30px; width: 40px;" 
                    class="material-icons">diamond</i>
            </div>
            
            </a>
        </div>
        <div class="col">
            <a href="{{ route('user.ptc.index') }}" class="{{ request()->path() == 'user/ptc' ? 'active jumpBtn' : '' }}">
                <i class="material-icons">redeem</i>
                <p>Rewards</p>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('user.display_profile') }}" class="{{ request()->path() == 'user/display-profile' ? 'active jumpBtn' : '' }}">
                <i class="material-icons">account_circle</i>
                <p>Profile</p>
            </a>
        </div>
    </div>
</div> --}}

{{-- <script>
setInterval(() => {
    setTimeout(() => {
        $(".jumpBtn").attr('style', "margin-top: -5px; transition: ease all 0.5s; -webkit-transition: ease all 0.4s;");
    }, 900);
    $(".jumpBtn").attr('style', "margin-top: 0px; transition: ease all 0.5s; -webkit-transition: ease all 0.4s;");
}, 1400);
</script>
<script>
setInterval(() => {
    setTimeout(() => {
        $(".jumpBtnMdl").attr('style', "height: 56px; width: 56px; margin-top: -28px; transition: ease all 0.5s; -webkit-transition: ease all 0.4s;");
    }, 900);
    $(".jumpBtnMdl").attr('style', "height: 56px; width: 56px; margin-top: -23px; transition: ease all 0.5s; -webkit-transition: ease all 0.4s;");
}, 1400);
</script> --}}
