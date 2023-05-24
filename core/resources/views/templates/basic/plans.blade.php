@extends($activeTemplate . 'layouts.frontend')
@section('content')
    {{-- @guest
        @php
            header('Location: user/login');
            die();
        @endphp
    @endguest --}}
<div>
    <body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="addmoney">
        <!-- Top navbar -->
        @auth
        @include($activeTemplate . 'includes.side_nav')
        @endauth
    
        <!-- Begin page content -->
        <main class="flex-shrink-0 main has-footer">
            <!-- Fixed navbar -->
            @auth
            @include($activeTemplate . 'includes.top_nav')
            @endauth
            @guest
            @include($activeTemplate . 'includes.home.top_nav')
            @endguest
    
            @auth
                <!-- Balance Card -->
                @include('templates.basic.component.balance_card')
            @endauth
    
            <div class="main-container">
                <!-- page content start -->
    
                <div class="container mb-1 mt-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="card-box">
                                        <img class="img-fluid" style="width: 50px;" src="{{asset('assets/images/3d-logo/diamond.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="text-shadow mb-0">Memberahip Plans</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="plansAjax">
                        <div class="row">
                            @include('templates.basic.plans_ajax')
                        </div>
                    </div>
                        
                </div>
    
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
</div>
    
    {{-- Modal --}}
    <div class="modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form id="BuyModalForm" method="post" action="{{ route('user.buyPlan') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-header">
                        <strong class="modal-title"> @lang('Confirmation')</strong>

                        <button type="button" class="close btn btn-sm" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        @auth
                        <strong>@lang('Are you sure to subscribe this plan')?</strong>
                            @if(auth()->user()->runningPlan)
                            <code class="d-block">@lang('If you subscribe to this one. Your old limitation will reset according to this package.')</code>
                            @endif
                        @else
                        <strong>@lang('Please login to subscribe plan')</strong>
                        @endauth
                    </div>
                    <div class="modal-footer">
                        @auth
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('No')</button>
                            <button type="submit" class="btn btn--base">@lang('Yes')</button>
                        @else
                            <a href="{{ route('user.login') }}" class="btn btn--base w-100">@lang('Login')</a>
                        @endauth
                    </div>

                </form>

            </div>
        </div>
    </div>


@endsection
@push('style')
    <style>
        .package-disabled {
            opacity: 0.5;
        }
    </style>
@endpush
@push('script')
    <script>
        //userinFo
        const userInfo = function() {
            $.ajax({
                type: "GET",
                url: "{{ route('user.userinfo') }}",
                success: function(res) {
                    console.log(res);
                    isClicked = res.isClick
                    if (res.plan) {
                        adsRate = res.plan.ads_rate;
                        planID = res.plan.id;
                    }
                    $('.user_balance').html('{{ $general->cur_sym }} ' + parseFloat(res.balance).toFixed(2));
                }
            });
        }

        //run on window load
        userInfo()


        $(document).on('click', '.buyBtn', function() {
            var modal = $('#BuyModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.modal('show');
        });


        $(document).on('submit', '#BuyModalForm', function (e) {
            e.preventDefault();
            // alert()
            var modal = $('#BuyModal');
            let formData = new FormData($('#BuyModalForm')[0])
            $.ajax({
                type: "POST",
                url: "{{ route('user.buyPlan') }}",
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    modal.modal('hide');
                    $('#plansAjax').html(res.view);
                    userInfo()
                    notifyMsg(res.msg,res.cls)
                },
                error: function (err) {
                    console.log(err);
                }
            });
            
        });
    </script>


    
@endpush
