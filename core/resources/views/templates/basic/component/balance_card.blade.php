<div class="mt-1 mb-4">
    <div class="card">
        <div class="card-body px-4 py-4">
            <div class="row align-items-center">
                <div class="col text-left">
                    <p class="text-secondary mb-0">Current Balance</p>
                    <h2 class="text-white mb-0 user_balance">{{ showAmount($user->balance) }} {{ $general->cur_sym }} </h2>
                </div>
                <div class="col-auto">
                    <img style="img-fluid" width="110px" height="110px" src="{{asset('assets/images/3d-logo/wallet-2.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>