@if( env('APP_ENV')!='production' )
    <div class="env-container" class="">
        <div id="env-content">{{ env('APP_ENV') }}</div>
    </div>
@endif
