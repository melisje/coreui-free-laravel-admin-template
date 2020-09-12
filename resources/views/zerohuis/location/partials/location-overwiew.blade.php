<section class="my-5" id="location-overview">
    <div class="container">
        <div class="row">
            @foreach($locations as $location)
                <div class="col-md-6 mb-5 my-md-0">
                    <h1 class="text-center">{{ $location->name }}</h1>

                    <div style="overflow: hidden; height:250px">
                        <img src="{{ $location->coverPhoto->download_url }}" alt="Cover photo" class="img-fluid" style="margin-top:-100px">
                    </div>

                    <div class="bg-zero-brown p-3 mt-md-3 " style="height: 300px; overflow: scroll ">
                        <p class="">{{ $location->description }}</p>
                    </div>

                    <div class="bg-zero-brown px-3 mb-3 text-right" >
                        <a href="{{ route('location.qrcode',$location) }}" class="text-black-50" target="_blank" title="@lang('print qrcode')"><i class="fa fa-qrcode"></i></a>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('location.show', $location) }}" class="btn btn-lg btn-outline-light rounded-0">BEKIJK DE DETAILS</a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
