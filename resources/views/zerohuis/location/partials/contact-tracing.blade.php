<section class="section py-sm-5 py-3">
    <div class="container bg-light">
        <div class="container py-5">

            {!! Form::open(route('contact.store'),'post',['id' =>'contact-form']) !!}

            @if($contact)
                {!! Form::hidden('contact_id',$contact->id ) !!}
            @endif
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
                    {!! Form::text('street', $contact, ['class' => 'form-control', 'placeholder'=> __('Straat en nummer')]) !!}
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

            <div class="form-group contact-div" id="contact-div-extra">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="consent" name="consent"
                           value="1" {{ ($contact && $contact->consent) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="consent">Mogen we u contacteren voor een gesprek of een
                                                                      afspraak? </label>
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

    </div>
</section>

