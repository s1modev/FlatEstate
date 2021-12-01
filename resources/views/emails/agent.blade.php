@component('mail::message')
# Introduction

name: {{$name}}

message: {{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
