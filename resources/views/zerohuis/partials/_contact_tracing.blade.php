@php( $hide = isset($hide) ? $hide : true)

<section class="bg-white {{ $hide ? 'd-none' : ''}}" id="contact-tracing">

    <div class="container py-5">

        @isset($contact->id)
            {!! Form::open(route('contact.update',$contact),'put',['id' =>'contact-form']) !!}
        @else
            {!! Form::open(route('contact.store'),'post',['id' =>'contact-form']) !!}
        @endisset

        {!! Form::hidden('location_id',$location->id) !!}

        <div class="form-group contact-div" id="contact-div-name">
            <div class="input-group-lg">
                {!! Form::text('name', $contact, ['class' => 'form-control', 'placeholder'=> __('Naam en voornaam')]) !!}
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>

        <div class="form-group  contact-div" id="contact-div-email">
            <div class="input-group-lg">
                {!! Form::email('email', $contact, ['class' => 'form-control', 'placeholder'=> __('E-mail')]) !!}
            </div>
        </div>

        <div class="form-group contact-div" id="contact-div-phone">
            <div class="input-group-lg">
                {!! Form::text('phone', $contact, ['class' => 'form-control', 'placeholder'=> __('Telefoon')]) !!}
            </div>
        </div>

        <div class="row" id="contact-location">
            <div class="col-md-2">
                <div class="form-group contact-div" id="contact-div-zipcode">
                    <div class="input-group-lg">
                        {!! Form::number('zipcode', $contact, ['class' => 'form-control', 'placeholder'=> __('Postcode')]) !!}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group contact-div" id="contact-div-zipcode">
                    <div class="input-group-lg">
                        {!! Form::text('location', $contact, ['class' => 'form-control', 'placeholder'=> __('Gemeente')]) !!}
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group contact-div" id="contact-div-address">
            <div class="input-group-lg">
                {!! Form::text('address', $contact, ['class' => 'form-control', 'placeholder'=> __('Straat en nummer')]) !!}
            </div>
        </div>

        <div class="form-group contact-div" id="contact-div-persons">
            <div class="input-group-lg">
                {!! Form::number('persons', $contact, ['class' => 'form-control', 'placeholder'=> __('Met hoeveel personen zijn jullie hier')]) !!}
            </div>
        </div>

        <div class="form-group contact-div" id="contact-div-extra">
            <div class="input-group-lg">
                {!! Form::textarea('extra', $contact, ['class' => 'form-control', 'placeholder'=> __('Hebt u nog vragen?')]) !!}
            </div>
        </div>

        <div class="row">
            @isset($prev)
                <div class="col-2">
                    <button class="btn btn-lg btn-outline-zero-brown btn-next-section"
                            data-next="{{ $prev }}">@lang('Ga terug')</button>
                </div>
            @endisset
            <div class="col text-right">
                <button class="btn btn-lg btn-outline-zero-brown" type="submit">Verstuur</button>
            </div>
        </div>


        {!! Form::close()  !!}


    </div>


</section>

@push('scripts')

    <script>

        $(function ()
        {


            $('#contact-form').on('submit', function (e)
            {
                e.preventDefault();
                // var data = $(this).serialize();

                var current = $(this).parents('section').attr('id'),
                    next = '{{ $next ?? "unknown" }}'
                ;


                // var data = new FormData($(this)[0]),
                var data = $(this).serialize(),
                    url = $(this).attr('action');

                console.log('+-> url', url);
                console.log('+-> data', data);

                $.post(url, data, function (result)
                    {
                        console.log('result', result);
                        if (result.success)
                        {
                            contact.id = result.id;
                            if (result.redirect)
                            {
                                window.location = result.redirect;
                            } else {
                                switchSection(current, next)
                            }
                        }
                    },
                    'json'
                )
            });
        });


    </script>

@endpush
