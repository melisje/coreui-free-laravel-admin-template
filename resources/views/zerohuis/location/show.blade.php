@extends('zerohuis.zerohuis')

@php($container = false)

@include('zerohuis.partials._navbar_zh')

@section('content')

    @include('zerohuis.partials._covid19')
    @include('zerohuis.partials._pageintro',['text' => __('look inside')])

    <section id="location-info">
        <div class="container">
            <h1 class="text-capitalize text-center">{{ $location->name }}</h1>

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

    <section id="location-photos">
        <div class="bg-white mb-0">
            <ul class="photo-gallery mt-5 mb-0">
                @foreach($location->photos as $photo)
                    <li>
                        <img src="{{ $photo->download_url }}" alt="photo" class="">
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="contact-us">
        <div class="bg-zero-brown mt-0 py-5 text-center text-light extra">
            <div class="animation-element scale-up">
                <h1 class="text-center text-light">U kan bouwen <span class="text-black">op ZeroHuis!</span></h1>
                <p>We nodigen u graag uit in onze kijkwoning voor een vrijblijvend kennsmakingsgesprek.</p>
                <a href="https://www.zerohuis.be/contact" class="btn btn-outline-light btn-lg text-uppercase"
                   target="_blank">Maak
                                   een
                                   afspraak</a>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="text-light animation-element slide-up">
                <div class="row my-2 align-items-center">
                    <div class="col-md py-3">
                        <img src="{{ asset('assets/img/zerohuis/zerohuis_logo_invers.svg') }}"
                             alt="{{ config('app.name', 'Laravel') }}" class="img-fluid w-100">
                    </div>
                    <div class="col-md py-3">
                        Geelseweg 79, 2250 Olen <br>
                        <a href="info@zerohuis.be" class="text-light">info@zerohuis.be</a>
                    </div>
                    <div class="col-md py-3 ">
                        <div class="d-flex">
                            <div>Volg ons</div>
                            <div>
                                <a href="https://www.facebook.com/zerohuis/" class="text-zero-brown" target="_blank"><i
                                        class="fa fa-facebook fa-2x fa-fw"></i></a>
                                <a href="https://www.zerohuis.be/" class="text-zero-brown" target="_blank"><i
                                        class="fa fa-instagram fa-2x fa-fw"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md py-3 text-md-right">
                        <a href="https://www.zerohuis.be/vaktermen/" class="user-select-auto text-light"
                           target="_blank">Vaktermen</a><br>
                        <a href="https://www.zerohuis.be/assets/Uploads/cb47a63ae3/ZeroHuis_Privacy_cookie_verklaring.pdf"
                           class="user-select-auto text-light" target="_blank">Privacy Statement</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

