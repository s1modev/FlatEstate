@component('mail::message')

Name: {{$name}}<br>
Email: {{$email}}<br>
Phone Number: {{$phone_number}}<br>

message: {{$message}}

{{ config('app.name') }}
@endcomponent
