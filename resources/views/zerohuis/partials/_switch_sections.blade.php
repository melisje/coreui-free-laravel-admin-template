@push('scripts')

    <script>

        $(function ()
        {
            $('.d-none').hide().removeClass('d-none');

            $(".btn-next-section").on('click', function (e)
            {
                var current = $(this).parents('section').attr('id');
                var nextsection = $(this).data('next');
                switchSection(current,nextsection)
            })
        });

        function switchSection(current,next)
        {
            console.log('~~> current', current);
            console.log('~~> next', next);

            /*
             * hide current section
             */
            $("#" + current).slideUp(500);

            /*
             * show next section
             */
            var nextsection = "#" + next;
            console.log('nextsection', nextsection);
            $(nextsection).slideDown(500);
        }

    </script>

@endpush
