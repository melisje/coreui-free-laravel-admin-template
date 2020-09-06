<div class="card mt-2">
    <div class="card-header bg-dark text-light">
        Session data
    </div>
    <div class="card-body">
        <table class="table">
            @foreach(session()->all() as $key =>$value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>
                        @if( is_array($value))
                            <ul>
                                @foreach( $value as $key2 => $value2)
                                    <li>{{ $key2 }} => {{ json_encode($value2) }}</li>
                                @endforeach
                            </ul>
                        @else
                            {{ json_encode($value) }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
    <div class="card-footer text-muted">
        {{ \Carbon\Carbon::now() }}
    </div>
</div>
