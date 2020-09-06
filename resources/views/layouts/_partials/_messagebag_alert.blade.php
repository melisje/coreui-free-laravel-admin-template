@if( $message = Session::get($_type))
    <div class="alert alert-{{ $_type }} alert-icon border-left-lg shadow" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="alert-icon-aside">
            @if($_type == 'info')
                <i class="fa fa-bell"></i>
            @elseif($_type == 'message')
                <i class="fa fa-bell"></i>
            @elseif($_type == 'success')
                <i class="fa fa-check-circle"></i>
            @elseif($_type == 'warning')
                <i class="fa fa-exclamation-circle"></i>
            @elseif($_type == 'danger')
                <i class="fa fa-times-circle"></i>
            @endif
        </div>
        <div class="alert-icon-content">
            {{ $message }}
        </div>
    </div>
@endif


