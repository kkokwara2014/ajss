@component('mail::message')
Thank you for your interest in AJSSAIFPU.

You have successfully submitted the paper titled:- <br>
{{ $paper->papertitle }}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
