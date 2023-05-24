<style>

    /* body-section */
    body {
        background-color: #221e77;
    }
    /* Bottom Nav */
    .footer .footer-icon {
        max-width: 35px;
        max-height: 35px;
    }

    .footer .footer-icon-middle {
        max-width: 60px;
        max-height: 60px;
        margin-top: -13px;
    }

    /* header-section */
    .header {
        background: rgba( 255, 255, 255, 0.1 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 8px );
        border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    }
    .header.active {
        background: rgba( 255, 255, 255, 0.1 );
    }


    .main {
        background-image: url('{{asset('assets/images/custom-Img/main-bg.png')}}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center top;
    }
    .main .main-container {
        background: rgba( 255, 255, 255, 0.1 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        /* backdrop-filter: blur( 2.5px ); */
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 2.5px );
        border-radius: 25px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        color: #fff;
    }

    /* sidebar-section */
    .menu-overlay .main-menu {
        background: rgba( 255, 255, 255, 0.1 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 10px );
        -webkit-backdrop-filter: blur( 10px );
        border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    }
    .menu-overlay .main-menu .menu-container .nav-pills .nav-item .nav-link.active {
        background: linear-gradient(to bottom, #e24194 0%, #2d1a67 100%);
        color: #ffffff;
    }
    .menu-overlay .main-menu .menu-container .nav-pills .nav-item .nav-link.active:hover {
        background: linear-gradient(to top, #e24194 0%, #2d1a67 100%);
        color: #ffffff;
    }
    .btn-default {
        background: linear-gradient(to bottom, #e24194 0%, #2d1a67 100%);
        color: #ffffff;
    }
    .btn-default:hover {
        background: linear-gradient(to top, #e24194 0%, #2d1a67 100%);
        color: #ffffff;
    }
    .btn-default:focus {
        background: linear-gradient(to top, #e24194 0%, #2d1a67 100%);
        color: #ffffff;
    }

    .nav-icons {
        margin-right: 10px;
    }

    /* card */
    .card {
        background-color: rgba( 255, 255, 255, 0.1 );
        color: #fff;
        background: rgba( 255, 255, 255, 0.1 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 8px );
        border-radius: 25px;
        border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    }

    .card-item {
        cursor: pointer;
    }
    .card-item img {
        max-width: 70px;
        max-height: 70px;
    }
    .card-item p {
        color: #d6d6d6;
        font-size: 12px;
        padding-top: 5px;
        text-shadow: #4a2fa9 1px 0 10px;
    }
    .card-box {
        cursor: pointer;
    }
    .card-box img {
        padding: 8px;
        max-width: 50px;
        max-height: 50px;
        background: rgb(148 255 253 / 34%);
        box-shadow: 0 2px 5px 0 rgb(31 38 135 / 41%);
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 8px );
        border-radius: 15px;
        border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    }
    .card-box img:hover {
        background: rgb(148 255 253 / 16%);
    }
    .card-box img::after {
        background: rgb(148 255 253 / 16%);
    }
    .card-box p {
        color: #d6d6d6;
        font-size: 10px;
        padding-top: 5px;
        text-shadow: #4a2fa9 1px 0 10px;
    }

    /* text-section */
    a:hover {
        color: #969696;
    }


    .text-shadow , .text-default, 
    .text-primary, .text-white, .text-info, 
    .text-warning, .text-danger, .text-success, .text-dark {
        text-shadow: #4a2fa9 1px 0 10px;
    }
    .text-default {
        color: #fff;
    }
    .text-primary {
        color: #4cecf7 !important;
    }
    .text-white {
        color: #fff !important;
    }
    .text-secondary {
        color: #ededed !important;
    }

    /* footer-section */
    .footer {
        background: rgba( 255, 255, 255, 0.1 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 8px );
        border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    }
    .footer a:not(.btn).active {
        color: #ffc107;
        border-color: #ffffff00 !important;
    }
    .footer a:not(.btn) {
        padding: 10px 3px !important;
        text-align: center;
        color: #ffffff;
        display: block;
        text-decoration: none;
        border-top: 4px solid transparent;
    }

    /* icon-section */
    .material-icons, .text-no-shadow {
        text-shadow: #492fa900 0 0 0;
    }

    /* modal-section */
    .modal-content {
        color: #fff;
        background-color: rgba( 255, 255, 255, 0.1 );
        background: rgba( 255, 255, 255, 0.1 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 8px );
        border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    }

    /* list-group */
    .list-group-item {
        background-color: #fff0;
    }
    .list-group-item-action {
        color: #ffffff;
    }

    /* badge-section */
    .trxAmount {
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 8px;
        padding-right: 8px;
        background: #ffffffa8;
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 4.5px );
        -webkit-backdrop-filter: blur( 4.5px );
        border-radius: 30px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
    }

    .badge {
        border-radius: 30px;
        padding-top: 5px;
        padding-left: 7px;
        padding-right: 6px;
        padding-bottom: 3px;
    }
    .badge-warning {
        color: #ffc107;
        border: 1px solid #ffc107;
        background: rgba( 255, 193, 7, 0.2 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 11px );
        -webkit-backdrop-filter: blur( 11px );
    }
    .badge-success {
        color: #09ff41;
        border: 1px solid #09ff41;
        background: #28a74633;
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 11px );
        -webkit-backdrop-filter: blur( 11px );
    }
    .badge-danger {
        color: #ff6015;
        border: 1px solid #ff6015;
        background: #dc354633;
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 11px );
        -webkit-backdrop-filter: blur( 11px );
    }
    .badge-info {
        color: #15fdff;
        border: 1px solid #15fdff;
        background: #35dccc33;
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 11px );
        -webkit-backdrop-filter: blur( 11px );
    }

    /* button-section */
    .btn {
        border-radius: 30px;
    }



    /* Mine-section */
    .mineBtn {
        display: inline-block;
        outline: 0;
        border: 0;
        cursor: pointer;
        will-change: box-shadow,transform;
        background: radial-gradient( 100% 100% at 100% 0%, #89E5FF 0%, #5468FF 100% );
        box-shadow: 0px 2px 4px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%) !important;
        padding: 0 32px;
        border-radius: 30px;
        color: #fff;
        height: 48px;
        font-size: 18px;
        text-shadow: 0 1px 0 rgb(0 0 0 / 40%);
        transition: box-shadow 0.15s ease,transform 0.15s ease;
    }

    .mineBtn:hover {
        color: #fff;
        box-shadow: 0px 4px 8px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #3c4fe0;
        transform: translateY(-2px);
    }
    .mineBtn:active{
        color: #fff;
        box-shadow: inset 0px 3px 7px #3c4fe0;
        transform: translateY(2px);
    }

    .mineOffBtn {
        display: inline-block;
        outline: 0;
        border: 0;
        cursor: pointer;
        will-change: box-shadow,transform;
        background: radial-gradient( 100% 100% at 100% 0%, #d7d7d7 0%, #c6c6c6 100% );
        box-shadow: 0px 2px 4px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%) !important;
        padding: 0 32px;
        border-radius: 30px;
        color: #fff;
        height: 48px;
        font-size: 18px;
        text-shadow: 0 1px 0 rgb(0 0 0 / 40%);
        transition: box-shadow 0.15s ease,transform 0.15s ease;
    }
    .mineOffBtn:hover {
        color: #fff;
        box-shadow: 0px 4px 8px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #3c4fe0;
        transform: translateY(-2px);
    }
    .mineOffBtn:active{
        color: #fff;
        box-shadow: inset 0px 3px 7px #3c4fe0;
        transform: translateY(2px);
    }

    .glass-box {
        padding: 8px;
        margin-left: 15px;
        margin-right: 15px;
        background: rgb(148 255 253 / 34%);
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 8px );
        -webkit-backdrop-filter: blur( 8px );
        border-radius: 15px;
        border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    }

    /* Form-section */
    .form-control {
        color: #ffffff;
        background-color: #0000000f;
    }
    .form-control::placeholder {
        color: #e7e7e7ce;
        opacity: 1;
    }
    .form-control:focus {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.155);
    }
    .float-label .form-control-label {
        color: #ffffff;
        left: 10px;
    }
    .float-label .form-control {
        border-radius: 30px;
        padding-left: 13px;
    }
    .form-control:disabled, .form-control[readonly] {
        background-color: #e9ecef61;
        opacity: 1;
    }
    .form-control:disabled, .form-control[readonly]:focus {
        background-color: #e9ecef61;
        opacity: 1;
    }

                
                
    /* border-section */
    .border-bottom, .border-top, .border-left, .border-right {
        border-color: #e2e2e26b !important;
    }

    /* switch-section */
    .nightModeImg {
        cursor: pointer;
        -webkit-transition: ease all 0.5s;
    }
    .darkModeSwitch .custom-control-label::before {
        display: none;
    }
    .darkModeSwitch .custom-control-label::after {
        display: none;
     }


     /* image-section */
     .img-thumbnail {
        background-color: #5e46b470;
        border: 1px solid #7863be;
    }

    /* pagelink */
    .page-link {
        color: #ffffff;
        background-color: #ffffff1f;
        border: 1px solid #dee2e60d;
    }
    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: #ffffff1f;
        border: 1px solid #dee2e60d;
    }
    .page-item.active .page-link {
        color: #000;
        background-color: #ffffffc7 !important;
        border-color: #cececec7 !important;
    }
    /* transition-sections */
    .transition, .header, .footer, 
    .card, .main-container, .main, 
    .menu-overlay .main-menu, 
    .menu-push-content .main-menu {
        transition: ease all 0.5s;
        -webkit-transition: ease all 0.5s;
        -moz-transition: ease all 0.5s;
        -ms-transition: ease all 0.5s;
    }
    
    



    /* ======= DarkMode Start ======= */
    .darkmode .main .main-container {
        background-color: #09101f66;
    }
    .darkmode .card, .darkmode .list-group-item, .darkmode .modal-content {
        background-color: #10324469;
    }
    .darkmode .footer {
        background-color: #00000026;
    }
    .darkmode .header {
        background: rgb(0 0 0 / 45%);
    }
    .darkmode .footer a:not(.btn) {
        color: #dfdfdf !important;
    }
    .darkmode .footer a:not(.btn).active {
        color: #8f81ff !important;
        border-color: #e0ddf700 !important;
    }

    .darkmode .main-menu {
        background: rgb(0 0 0 / 17%);
    }


</style>