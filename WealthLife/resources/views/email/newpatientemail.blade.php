@component('mail::message')
# Hello Admin

There is a new Patient in our site, the patient is **{{ $data->name }}** and email is **{{ $data->email }}**, check please your panel admin.

thanks

@component('mail::button', ['url' => ''])
go Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
