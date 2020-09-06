<section id="location" class="my-3 {{ (isset($hide) && $hide) ? 'd-none' : '' }}">
    <div class="container bg-white my-3 py-3 xpx-5">

        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <img src="{{ $location->photo }}" alt="{{ $location->title }}"
                         class="img-fluid animation-element slide-right" style="width:100%">
                </div>
            </div>
            <div class="col-md-6">
                <div class="xm-3 p-5">
                    <h1>{{ $location->title }}</h1>
                    <p>{{ $location->description }}</p>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col bg-zero-brown mx-3">
                <div class="text-light my-3 px-3 px-lg-5 py-3">
                    <pre class="text-light">{{ $location->technical }}</pre>
                </div>
            </div>
            <div class="col bg-black mx-3">
                <div class="text-light m-3 p-3 p-lg-5">
                    <p>Meer weten?</p>
                    <a href="{{ $location->url }}" class="btn btn-outline-light" target="_blank">Bekijk de details</a>
                </div>
            </div>
        </div>

    </div>
</section>
