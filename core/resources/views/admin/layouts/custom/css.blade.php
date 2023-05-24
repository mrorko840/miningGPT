<style>
    a {
        color: #7d2100;
    }
    a:hover {
        color: #913c1d;
    }
    a span {
        color: #7d2100;
    }
    a span:hover {
        color: #913c1d;
    }


    /* login page  */
    /* main theme color #db7500 */

    .login-main {
        background-color: #db7500;
    }

    .login-main::before {
        background-color: #db7500;
    }

    .login-area::after {
        border: 40px solid rgb(229 169 34 / 37%);
    }

    .login-wrapper__top {
        background-color: #3c2bfb00;
    }

    .login-wrapper__top::after {
        border-color: #3c2bfb00 transparent transparent transparent;
    }

    .login-wrapper {
        border-radius: 30px;
        background: #db7500;
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200;
    }

    /* loginPage End */

    /* body */
    body {
        background-color: #db7634;
    }
    .body-wrapper {
        padding-bottom: 50px;
    }

    /* fonts  */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #ffffff;
    }

    p,
    li,
    span {
        color: #ffffff;
        margin-bottom: 0;
    }

    /* text section */
    .text--danger {
        color: #ff0000 !important;
    }

    /* border  */
    .border {
        border: 1px solid #f28e3c !important;
    }

    .border-line-title {
        display: inline-block;
        padding: 3px 10px;
        background-color: #db7634;
        background: #db7634;
        box-shadow: inset 5px 5px 10px #a45927,
            inset -5px -5px 10px #ff9441;
    }

    .border-line-area::before {
        background-color: #f28e3c;
    }
    /* pagination */
    .pagination .page-item.active .page-link {
        background-color: #db7634;
        border-color: #ff9200;
        color: #ffffff;
        box-shadow: 5px 5px 10px #a45800,
                -5px -5px 10px #ff9200;
    }
    /* shadow */
    .neo-shadow {
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200;
    }
    /* buttons */
    .btn {
        border-radius: 30px;
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200;
    }

    .cmn-btn {
        color: #fff;
        height: 50px;
        background: linear-gradient(145deg, #ea7d00, #c56900);
    }

    .cmn-btn:hover {
        color: #fff;
        height: 50px;
        background: #db7500;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .cmn-btn:after {
        color: #fff;
        height: 50px;
        background: #db7500;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn--primary {
        color: #fff;
        border: 1px solid #f28a3c;
        background-color: #db7500 !important;
        background: linear-gradient(145deg, #ea7d00, #c56900);
    }

    .btn--primary:hover {
        color: #fff;
        border: 1px solid #f28a3c;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn--primary:after {
        color: #fff;
        border: 1px solid #f28a3c;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn--success {
        color: #fff;
        background-color: #28c76f !important;
        background: linear-gradient(145deg, #30ea83, #2ab200);
    }

    .btn--success:hover {
        color: #fff;
        background: #2ab200;
        box-shadow: inset 5px 5px 10px #1e9553,
            inset -5px -5px 10px #32f98b;
    }

    .btn--success:after {
        color: #fff;
        background: #2ab200;
        box-shadow: inset 5px 5px 10px #1e9553,
            inset -5px -5px 10px #32f98b;
    }

    .btn--danger {
        color: #fff;
        background-color: #fb3536 !important;
        background: linear-gradient(145deg, #f90305, #ac0001);
    }

    .btn--danger:hover {
        color: #fff;
        background: #fb3536;
        background: #fb3536;
        box-shadow: inset 5px 5px 10px #bc2829,
            inset -5px -5px 10px #ff4244;
    }

    .btn--danger:after {
        color: #fff;
        background: #fb3536;
        background: #fb3536;
        box-shadow: inset 5px 5px 10px #bc2829,
                    inset -5px -5px 10px #ff4244;
    }

    .image-upload .thumb .avatar-edit label {
        border-radius: 30px;
        box-shadow: 5px 5px 10px #a45800,
                    -5px -5px 10px #ff9200;
    }
    .image-upload .thumb .profilePicPreview {
        box-shadow: 5px 5px 10px #a45800,
                    -5px -5px 10px #ff9200;
    }
    .image-upload .thumb .avatar-edit label:hover {
        transform: translateY(-3px);
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    /* button-outline */
    .btn-outline--primary {
        color: #fff;
        border-color: #f28e3c;
    }

    .btn-outline--primary:hover {
        color: #fff;
        border-color: #f28e3c;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn-outline--danger {
        color: #ff0002;
        border-color: #ff0002;
    }

    .btn-outline--danger:hover {
        color: #ff0002;
        border-color: #ff0002;
        background-color: #db7500;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn-outline--success {
        color: #00ff1e;
        border-color: #00ff1e;
    }

    .btn-outline--success:hover {
        color: #00ff1e;
        border-color: #00ff1e;
        background-color: #db7500;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn-outline--warning {
        color: #ffe228;
        border-color: #ffe228;
    }

    .btn-outline--warning:hover {
        color: #ffe228;
        border-color: #ffe228;
        background-color: #db7500;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn-outline--info {
        color: #0055c9;
        border-color: #0055c9;
    }

    .btn-outline--info:hover {
        color: #0055c9;
        border-color: #0055c9;
        background-color: #db7500;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .btn-outline-light {
        color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:hover {
        color: #f8f9fa;
        border-color: #f8f9fa;
        background-color: #db7500;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    /* badge  */
    .badge--pending,
    .badge--warning,
    .badge--success,
    .badge--primary,
    .badge--danger,
    .badge--dark {
        border-radius: 999px;
        padding: 2px 15px;
        position: relative;
        border-radius: 999px;
        -webkit-border-radius: 999px;
        -moz-border-radius: 999px;
        -ms-border-radius: 999px;
        -o-border-radius: 999px;
        background-color: #db7500;
        background: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .badge--success {
        border: 1px solid #00ff1e;
        color: #00ff1e;
    }

    .badge--warning {
        border: 1px solid #fffe43;
        color: #fffe43;
    }

    .badge--danger {
        border: 1px solid #ff0002;
        color: #ff0002;
    }



    /* Sidebar */
    .sidebar__menu .sidebar-menu-item .side-menu--open,
    .sidebar__menu .sidebar-menu-item.active>a {
        background-color: #5e1b02 !important;
    }

    .sidebar[class*="bg--"] .sidebar__menu .sidebar-menu-item .side-menu--open {
        background-color: #5e1b02 !important;
    }

    .sidebar__menu .sidebar-submenu .sidebar-menu-item.active>a {
        background-color: #5e1b0266 !important;
    }

    .sidebar[class*="bg--"] .sidebar__menu .sidebar-menu-item>a:hover {
        background-color: #5e1b0266;
    }

    .sidebar .slimScrollDiv .slimScrollBar {
        background-color: #a02b00 !important;
        width: 5px !important;
        opacity: 1 !important;
    }

    .sidebar__menu .menu-badge {
        box-shadow: 5px 5px 10px #6d2d16,
            -5px -5px 10px #b54b24;
    }

    /* Notifications */
    .dropdown-menu {
        background-color: #db7634;
        border-radius: 20px;
    }
    .dropdown-menu__header {
        padding: 15px 15px;
        border-bottom: 1px solid #f18f3c;
    }
    .dropdown-menu__footer {
        border-top: 1px solid #f28a3c;
    }
    .dropdown-menu__item {
        border-bottom: 1px solid #f18f3c;
    }
    .dropdown-menu__item:hover {
        background-color: #a45800;
    }

    .notify__item {
        display: flex;
        text-decoration: none !important;
        align-items: center;
        padding: 10px 15px;
        background: #a45800;
        border: 1px solid #f18f3c;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        transition: all ease .3s;
    }

    /* Background */
    .bg--dark {
        background-color: #913b00 !important;
    }

    .bg--primary {
        background: linear-gradient(145deg, #f0a54f, #874900) !important;
    }

    .bg--success {
        background: linear-gradient(145deg, #3be587, #008039) !important;
    }

    .bg--danger {
        background: linear-gradient(145deg, #f57172, #a00001) !important;
    }

    .bg--red {
        background: linear-gradient(145deg, #f58178, #c40d00) !important;
    }

    .bg--1 {
        background: linear-gradient(145deg, #24c0d2, #003d44) !important;
    }

    .bg--4 {
        background: linear-gradient(145deg, #9479ff, #bd3b3b) !important;
    }

    .bg--14 {
        background: linear-gradient(145deg, #ff7228, #8c2e01) !important;
    }

    .bg--19 {
        background: linear-gradient(145deg, #9900ff, #007a36) !important;
    }

    /* border */
    .border--primary {
        border-color: #ff9134 !important;
    }

    /* input group */
    .login-form .form-control {
        border-radius: 30px;
        background: #db7500;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .login-form .form-control:focus {
        background-color: transparent;
        border-color: #ff9200;
        background: #ff9216;
        box-shadow: inset 5px 5px 20px #a45800,
            inset -5px -5px 20px #ff9200;
    }

    .login-form .form-check .form-check-label::before {
        border: 1px solid rgba(255, 255, 255, 0.3);
        background: #db7500;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .login-form .form-check .form-check-input:checked~.form-check-label::before {
        content: "\f00c";
        border-color: rgba(255, 255, 255, 0.3);
        background: linear-gradient(145deg, #ea7d00, #c56900);
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200;
    }

    .form-control {
        color: #fff !important;
        border: 1px solid #ff8e18;
        border-radius: 20px;
        background: #db7500;
        background-color: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    .form-control:focus {
        color: #fff !important;
        background-color: transparent;
        border-color: #ff9200;
        background: #ff9216;
        box-shadow: inset 5px 5px 20px #a45800,
            inset -5px -5px 20px #ff9200;
    }

    input:not([type="radio"]),
    textarea {
        -webkit-border-radius: 20px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
    }
    .input-group-text {
        color: #eaeaea;
        background: linear-gradient(145deg, #c87252, #75270b);
        border: 1px solid #f28e3c;
        border-radius: 20px;
    }

    .file-upload-wrapper:before {
        font-weight: 400;
        border: 1px solid #f28e3c;
        background: linear-gradient(145deg, #c87252, #75270b);
        border-radius: 0 20px 20px 0;
    }
    .file-upload-wrapper:after {
        font-weight: 400;
        color: #c9c6c2;
        border: 1px solid #f28e3c;
        border-radius: 20px;
        background: #db7500;
        box-shadow: inset 5px 5px 10px #a45800,
                inset -5px -5px 10px #ff9200;
    }

    .sp-preview-inner {
        width: 84px;
        border-radius: 20px 0 0 20px;
    }
    .sp-replacer {
        border-radius: 20px 0 0 20px;
    }
    .sp-preview {
        width: 80px;
        height: 45px;
        border: 1px solid #f28e3c;
        border-radius: 20px 0 0 20px;
        margin-right: 0px;
    }

    .navbar-search .navbar-search-field {
        background-color: #913c1d;
        border-radius: 20px;
        background: #913c1d;
        box-shadow: inset 5px 5px 10px #6d2d16,
                inset -5px -5px 10px #b54b24;
    }
    .navbar-search .navbar-search-field:focus {
        border-color: rgba(255,255,255,0.15);
        background: #913c1d;
        box-shadow: inset 5px 5px 20px #6d2d16,
            inset -5px -5px 20px #b54b24;
    }

    /* select2 */
    .select2-container--default .select2-selection--multiple {
        border-radius: 20px;
        color: #fff !important;
        border: 1px solid #ff8e18;
        background: #db7500;
        background-color: #db7500 !important;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }
    .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--multiple {
        border: 1px solid #f28e3c !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #913c1d;
        border-color: #913c1d;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        color: #fff;
        border: 1px solid #8c3211;
        border-radius: 20px;
        margin-left: 10px;
        margin-top: 5px;
        box-shadow: 5px 5px 10px #a45927,
                -5px -5px 10px #ff9441;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        border-right-color: #7b2404;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover,.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:focus {
        background-color: #7b2404;
        color: #ffffff;
        border-radius: 20px 0 0 20px;
        outline: none;
    }
    .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: #913c1d;
        color: white;
    }
    .select2-container--default .select2-selection--single {
        color: #fff;
        border-radius: 20px;
        background: #db7634;
        box-shadow: inset 5px 5px 10px #a45927,
                inset -5px -5px 10px #ff9441;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #fff;
    }
    .select2-results__option.select2-results__option--selected {
        color: #fff;
        background-color: #7f2c0e;
    }
    .select2-results__options p, li, span {
        color: #913c1d;
        margin-bottom: 0;
    }
    .select2-dropdown {
        border: 1px solid #913c1d;
    }

    /* card */
    .card {
        border-radius: 15px;
        background: #db7500;
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200 !important;
    }

    .card-header:first-child {
        border-radius: 15px 15px 0 0;
    }

    .card-footer {
        background-color: #db7634;
        border-top: 1px solid #f28e3c;
        border-radius: 0 0 15px 15px !important;
        padding-bottom: 15px;
        padding-top: 12px;
    }

    .widget-two {
        border-radius: 15px !important;
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200 !important;
    }

    /* Table  */
    table.table--light thead {
        background-color: #913c1d;
    }

    table.table--light thead th {
        background-color: #913c1d00;
    }

    .table td {
        color: #ffffff;
    }

    table .user .thumb img {
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200 !important;
    }

    /* list-group */
    .list-group-item {
        position: relative;
        display: block;
        padding: .5rem 1rem;
        color: #212529;
        text-decoration: none;
        background-color: #ffffff00;
        border: 1px solid rgba(0, 0, 0, .125);

    }

    .list-group {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        border-radius: .25rem;
        background: #db7500;
        box-shadow: inset 5px 5px 10px #a45800,
            inset -5px -5px 10px #ff9200;
    }

    /* modal */
    .modal-header {
        padding: 10px 1rem;
        border-bottom: 1px solid #f28e3c;
    }

    .modal-content {
        background-color: #db7634;
        border-radius: 30px;
    }

    .modal-footer {
        padding: 8px .75rem;
        border-top: 1px solid #f28e3c;
    }

    .modal .close {
        background: red;
        border-radius: 50%;
        width: 27px;
        height: 27px;
        color: #fff;
        background: linear-gradient(145deg, #ff6869, #840001);
        box-shadow: 5px 5px 10px #a45800,
            -5px -5px 10px #ff9200;
    }

    .modal .close:hover {
        border-radius: 50%;
        width: 27px;
        height: 27px;
        color: #fff;
        background: #fb3536;
        box-shadow: inset 5px 5px 10px #bc2829,
            inset -5px -5px 10px #ff4244;
    }
</style>
