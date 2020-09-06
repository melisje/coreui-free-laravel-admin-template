<section id="contact-consent" class="bg-zero-brown text-light my-3 d-none">
    <div class="container p-3 py-5 text-justify">
        <p class="lead">Heel erg bedankt. Je contact gegevens worden veilig bewaard en zullen binnen 14 dagen verwijderd
                        worden.</p>
        <p class="lead">Uiteraard ben je hier ook niet voor niets. Je bent hier omdat je opzoek bent naar jouw
                        droomwoning. Die willen wij graag voor jou bouwen. </p>
        <p class="lead">Daarom zouden we graag je contact gegevens bewaren zodat we je later kunnen uitnodigen voor een
                        persoonlijk gesprek om samen jouw droomwoning vorm te geven.</p>


        <div class="form-group  contact-div" id="contact-div-approval">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="consent" id="consent" class="custom-control-input">
                <label class="custom-control-label" for="consent">Mogen wij uw gegevens bijhouden om je
                                                                  vrijblijvend te contacteren en je
                                                                  interessante informatie te bezorgen?</label>
            </div>
        </div>


        <div class="d-flex mt-5">
            @isset($prev)
                <div class="">
                    <button class="btn btn-lg btn-outline-light btn-next-section"
                            data-next="{{ $prev }}">@lang('Ga terug')</button>
                </div>
            @endisset
            @isset($next)
                <div class="ml-auto">
                    <button class="btn btn-lg btn-outline-light btn-next-section"
                            data-next="{{ $next }}">@lang('Ga verder')</button>
                </div>
            @endisset
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $(function ()
        {
            $('#consent').on('change', function ()
            {
                var url = '{{ route('contact.consent') }}',
                    data = {
                        '_token': "{{ csrf_token() }}",
                        '_method': 'put',
                        'contact': contact.id ?? 3,
                        'consent': $(this).prop('checked') ? 1 : 0,
                    };

                console.log('data', data);

                $.post(url, data, function (result)
                    {
                        console.log('result', result)
                    }, 'json'
                );
            });
        });
    </script>
@endpush
