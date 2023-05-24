@php
    $yourLinks = getContent('links.content', true);
@endphp
<!-- footer-->
<div class="footer">
    <div class="row no-gutters justify-content-center">
        <div class="col">
            <a href="{{ route('home') }}" class="{{ request()->path() == '/' ? 'active' : '' }}">
                <img class="img-fluid footer-icon" src="{{ asset('assets/images/3d-logo/home-3.png') }}" alt="">
                <p>Home</p>
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
            <a href="{{ route('plans') }}"
                class="{{ request()->path() == 'plans' ? 'active jumpBtn' : '' }}">
                <img class="img-fluid footer-icon-middle" src="{{ asset('assets/images/3d-logo/diamond.png') }}" alt="">
            </a>
        </div>
        <div class="col">
            <a href="{{ route('user.register') }}" class="{{ request()->path() == 'user/ptc' ? 'active' : '' }}">
                <img class="img-fluid footer-icon" src="{{ asset('assets/images/3d-logo/signup-2.png') }}" alt="">
                <p>Sign-Up</p>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('user.login') }}"
                class="{{ request()->path() == 'user/display-profile' ? 'active' : '' }}">
                <img class="img-fluid footer-icon" src="{{ asset('assets/images/3d-logo/door.png') }}" alt="">
                <p>Login</p>
            </a>
        </div>
    </div>
</div>
