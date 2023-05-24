@php
    $aboutCaption = getContent('about.content',true);
@endphp
{{-- <style>
    a{
        
    }
</style> --}}


<section class="ptb-150">
    <div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <img class="img-fluid shadow" style="width: 100%; border-radius: 20px" src="{{asset('assets/images/frontend/about/'. @$aboutCaption->data_values->image)}}" alt="">
        </div>
        <div class="col-12 w-100">
            <div class="card text-shadow text-white">
                <div class="card-body">
                    @php 
                        echo @$aboutCaption->data_values->description 
                    @endphp
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
