<?php 
$user = Auth::user(); 
$noticeCaption = getContent('notice.content',true);
?>

<!-- Fixed navbar -->
<header  class="header">
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
        <div class="ml-auto col-auto pl-0">

            {{-- <button type="button" class="btn btn-link btn-40 colorsettings">
                <span class="material-icons">color_lens</span>
            </button> --}}

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
            </div>
        </div>
    </div>
    
</header>


@include(activeTemplate() . 'includes.color_change')
@include(activeTemplate() . 'includes.notice_modal')


