<section id="icons" class="">
    <div class="bg-black text-light py-3">

        <div class="container">
            <div class="row">
                <div class="col p-1 p-sm-3">
                    <img src="{{ asset('assets/img/zerohuis/mondkapjeverplicht.png') }}" alt="Mondkapje verplicht" class="img-fluid">
                </div>

                <div class="col p-1 p-sm-3">
                    <img src="{{ asset('assets/img/zerohuis/handenwassen.png') }}" alt="Handen wassen!" class="img-fluid">
                </div>

                <div class="col p-1 p-sm-3">
                    <img src="{{ asset('assets/img/zerohuis/afstandhouden.png') }}" alt="Afstand houden!" class="img-fluid">
                </div>

                <div class="col p-1 p-sm-3">
                    <img src="{{ asset('assets/img/zerohuis/contacttracing.png') }}" alt="Contact tracing!" class="img-fluid">
                </div>
            </div>
        </div>

        <div id="covidCarousel" class="carousel slide d-flex align-items-center" data-ride="carousel">
            <div class="carousel-inner text-uppercasex  text-center">
                <div class="carousel-item active">
                    @lang("Wear your mouth mask")
                </div>
                <div class="carousel-item">
                    @lang("Wash or disinfect your hands often")
                </div>
                <div class="carousel-item">
                    @lang('Keep 1.5m distance')
                </div>
                <div class="carousel-item">
                    @lang('Contact tracing: how can you be contacted?')
                </div>
            </div>
            <a class="carousel-control-prev" href="#covidCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#covidCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
