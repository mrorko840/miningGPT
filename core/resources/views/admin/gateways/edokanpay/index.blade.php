@extends('admin.layouts.app')
@section('panel')
    <div class="row mb-none-30">
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-header">
                    <h6>Api Credential</h6>
                </div>
                <div class="card-body">

                    <form id="autoPaymentApiForm" action="" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group ">
                                    <label> @lang('Api Key')</label>
                                    <input class="form-control" type="text" name="api_key" required value="{{@$autoPayment->api_key}}">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group ">
                                    <label> @lang('Client Key')</label>
                                    <input class="form-control" type="text" name="client_key" required value="{{@$autoPayment->client_key}}">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group ">
                                    <label> @lang('Secret Key')</label>
                                    <input class="form-control" type="text" name="secret_key" required value="{{@$autoPayment->secret_key}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn--primary w-100 h-45">@lang('Submit')</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-header">
                    <h6>Others Details</h6>
                </div>
                <div class="card-body">

                    <form id="autoPaymentDetailsForm" action="{{route('admin.gateway.edokanpay.details.update')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group ">
                                    <label>Currency</label>
                                    <input class="form-control" id="eDokanCurInput" type="text" name="gateway_parameters[currency]" required value="{{@$gateway_parameters['currency']}}">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group ">
                                    <label>1 {{@$general->cur_text}} = ? <span id="eDokanCurValue">{{@$gateway_parameters['currency']}}</span></label>
                                    <input class="form-control" type="number" name="gateway_parameters[rate]" required value="{{@$gateway_parameters['rate']}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn--primary w-100 h-45">@lang('Submit')</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('script-lib')
    <script src="{{ asset('assets/admin/js/spectrum.js') }}"></script>
@endpush

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/spectrum.css') }}">
@endpush

@push('script')

    <script>
        $(document).on('submit', '#autoPaymentApiForm', function (e) {
            e.preventDefault();
            let formData = new FormData($('#autoPaymentApiForm')[0])
            $.ajax({
                type: "POST",
                url: "{{route('admin.gateway.edokanpay.api.update')}}",
                data: formData,
                dataType: "json",
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function (res) {
                    console.log(res);
                    notifyMsg(res.msg,res.cls)
                }
            });
        });

        $(document).on('submit', '#autoPaymentDetailsForm', function (e) {
            e.preventDefault();
            let formData = new FormData($('#autoPaymentDetailsForm')[0])
            $.ajax({
                type: "POST",
                url: "{{route('admin.gateway.edokanpay.details.update')}}",
                data: formData,
                dataType: "json",
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function (res) {
                    console.log(res);
                    notifyMsg(res.msg,res.cls)
                }
            });
        });

        $(document).on('keyup','#eDokanCurInput',function (e) { 
            let value = $(this).val();
            $('#eDokanCurValue').html(value);
        });
    </script>
@endpush

