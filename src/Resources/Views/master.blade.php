@if(session()->has('error'))
    {!! Notifier::notify(session()->get('error'), 'error')->library($library) !!}
@endif
@if(session()->has('success'))
    {!! Notifier::notify(session()->get('success'), 'success')->library($library) !!}
@endif
@if(session()->has('warning'))
    {!! Notifier::notify(session()->get('warning'), 'warning')->library($library) !!}
@endif
@if(session()->has('info'))
    {!! Notifier::notify(session()->get('info'), 'info')->library($library) !!}
@endif
