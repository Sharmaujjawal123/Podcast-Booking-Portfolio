@component('mail::message')
# Hello {{ $user->name }}

Thanks for signing up!

@component('mail::button', ['url' => url('/')])
Visit Our Site
@endcomponent

Thanks,<br>
**Alok Podcast Show Team**
@endcomponent
