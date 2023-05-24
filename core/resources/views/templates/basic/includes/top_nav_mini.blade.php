<?php 
$user = Auth::user(); 
$noticeCaption = getContent('notice.content',true);
?>

<!-- Fixed navbar -->
<header class="header">
    <div class="row">
        <div class="col-auto px-0">
            <button class="menu-btn btn btn-40 btn-link back-btn" type="button">
                <span class="material-icons">keyboard_arrow_left</span>
            </button>
        </div>
        <div class="text-left col align-self-center">
            <a class="navbar-brand" href="#">
                <h5 class="mb-0">{{ @$pageTitle }}</h5>
            </a>
        </div>
        <div class="ml-auto col-auto">
            <div class="row">
                <div style="padding-top: 6px !important;" class="custom-control custom-switch darkModeSwitch">
                    <input type="checkbox" class="custom-control-input switch-info text-align-center" id="darklayout" >
                    <label class="custom-control-label nightModeImg" for="darklayout">
                        <img width="28px" src="{{asset('assets/images/3d-logo/moon.png')}}" alt="">
                    </label>
                </div>
    
                <a href="notification.html" class=" btn btn-40 btn-link" data-toggle="modal" data-target="#noticeModal">
                    <img width="25px" src="{{asset('assets/images/3d-logo/notice.png')}}" alt="">
                </a>
                <div style="padding-right: 0.5rem !important;" class="mt-1">
                    <a href="{{ route('user.display_profile') }}" class="avatar avatar-30 shadow-sm rounded-circle ml-2 mt-1">
                        <figure class="m-0 background profilePhoto">
                          <img src="{{ getImage(imagePath()['profile']['user']['path'].'/'. @$user->image,imagePath()['profile']['user']['size']) }}" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
@include(activeTemplate() . 'includes.notice_modal')