<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                {{--<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">--}}
                <a href="http://deltacovid.herokuapp.com/">
                    <img src="https://i.ibb.co/hKRVdtx/logo.png" alt="logo" border="0"/></a>
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
