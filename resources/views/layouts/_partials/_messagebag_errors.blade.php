@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-icon border-left-lg fade show shadow" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="alert-icon-aside">
                <i class="fa fa-times-circle"></i>
            </div>
            <div class="alert-icon-content">
                {{ $error }}
            </div>
        </div>
    @endforeach
@endif


