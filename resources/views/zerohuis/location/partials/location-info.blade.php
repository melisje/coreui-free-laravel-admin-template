<section id="location-info">
    <div class="container py-2">
        <h1 class="text-capitalize text-center py-5">{{ $location->name }}</h1>

        <div class="row">
            <div class="col-md">
                <div class="text-light my-5">
                    {!! $location->description  !!}
                </div>
            </div>
            <div class="col-md bg-zero-brown">
                <div class="text-light my-3 my-sm-5 mx-2 mx-sm-5">
                    {!! $location->technical !!}
                </div>
            </div>
        </div>
    </div>
</section>
