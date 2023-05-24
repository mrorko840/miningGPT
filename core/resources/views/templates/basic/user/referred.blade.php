@extends($activeTemplate.'layouts.master')
@section('content')

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    <!-- Begin page content -->
    <main class="flex-shrink-0 main">

        @include(activeTemplate() . 'includes.top_nav_mini')

        <!-- page content start -->
        <div class=" mb-4 text-center text-white">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-8 col-md-6 col-lg-5 mx-auto">
                            {{-- <img src="{{ asset($activeTemplateTrue . 'assets/img/refer.png') }}" alt="" class="mw-100 mb-4"> --}}
                            <img src="{{ asset('assets/images/3d-logo/reffer-banner-2.png') }}" alt="" class="mw-100">
                            <h5>Invite your contacts<br>or Friends and Earn Rewards</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="container mb-4">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="card-box">
                                    <img src="{{ asset('assets/images/3d-logo/reffer-2.png') }}" alt="">
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
            <div class="container mb-4">
                <div class="alert alert-success d-none" id="successmessage">Refferal link copied</div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="refferal Link"
                        value="{{ route('user.register') }}/{{ auth()->user()->username }}" id="link">
                    <div class="input-group-append">
                        <button class="btn btn-default rounded" type="button" id="basic-addon2"
                            onclick="copyRefLink()">Copy link</button>
                    </div>
                </div>
                <p class="text-center text-secondary">Share link to social</p>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="card-box">
                            <img src="{{ asset($activeTemplateTrue . 'assets/img/whatsapp.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card-box">
                            <img src="{{ asset($activeTemplateTrue . 'assets/img/facebook.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card-box">
                            <img src="{{ asset($activeTemplateTrue . 'assets/img/instagram.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card-box">
                            <img src="{{ asset($activeTemplateTrue . 'assets/img/twitter.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>

            

            <div class="container mb-4">
                <h6 class="subtitle mb-3">Recently Invited friends</h6>

                <div class="row">
                    @forelse($refUsers as $data)
                        <div class="col-12 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="img-thumbnail rounded-circle" style="height: 70px" src="{{ getImage(imagePath()['profile']['user']['path'] . '/' . @$data->image, imagePath()['profile']['user']['size']) }}" alt="">
                                        </div>
                                        <div class="col">
                                            <p class="text-secondary mb-1">Name: <b class="text-primary text-no-shadow">{{ $data->firstname.' '.$data->lastname}}</b></p>
                                            <p class="text-secondary mb-0">Username: <b class="text-primary text-no-shadow">{{ $data->username }}</b></p>
                                            <p class="text-secondary mb-0">Balance: <b class="text-primary text-no-shadow">{{ showAmount($data->balance) }} {{$general->cur_text}}</b></p>
                                            <p class="text-secondary mb-0">Up-Leader: <b class="text-primary text-no-shadow">{{ $data->refBy->username }}</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center">
                            <h6 class="text-danger">{{ __($emptyMessage) }}!</h6>
                        </div>
                    @endforelse
                </div>

                {{-- <div class="swiper-container swiper-users text-center mb-4">
                    <div class="swiper-wrapper">

                        @forelse($refUsers as $data)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body p-2">
                                        <div class="avatar avatar-60 rounded mb-1">
                                            <div class="background">
                                            <img src="{{ getImage(imagePath()['profile']['user']['path'] . '/' . @$data->image, imagePath()['profile']['user']['size']) }}" alt="">
                                            </div>
                                        </div>
                                        <p class="text-secondary mb-0"><small>{{ __($data->username) }}</small></p>
                                        <p class="text-info"><small>{{ __($data->plan ? $data->plan->name : "No Plan") }}</small></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>
                                <div align="center" colspan="100%" class="text-center text-danger">{{ __($emptyMessage) }}!</div>
                            </div>
                        @endforelse

                    </div>
                </div> --}}

                {{-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email addres">
                    <div class="input-group-append">
                        <button class="btn btn-default rounded" type="button" id="button-addon2">Invite</button>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </main>
</body>


@endsection
@push('style')
<style type="text/css">
    .copytextDiv{
        border:1px solid #00000021;
        cursor: pointer;
    }
    #referralURL{
        border-right: 1px solid #00000021;
    }
    .bg-success-custom{
        background-color: #28a7456e!important;
    }
    .brd-success-custom{
        border: 1px dashed #28a745;
    }
</style>
@endpush
@push('script')
    <script>
        "use strict";

        $('.main-wrapper').addClass('section--bg');

        "use strict";

        const copyRefLink = () => {
            var copyText = document.getElementById("link");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            notifyMsg("<p class='text-success text-no-shadow'>Copied: " + copyText.value + " </p>", 'success')
            // notify('success', "Copied: " + copyText.value);
        }
    </script>
@endpush

{{-- @push('script')
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard').click(function(){
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
        });
    })(jQuery);
</script>
@endpush --}}


