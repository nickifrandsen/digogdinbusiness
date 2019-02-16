@component('mail::message')
{{ $attendee->first_name}} {{ $attendee->last_name}}<br>
{{ $attendee->email}}

Har tilmeldt sig workshoppen.
@endcomponent
