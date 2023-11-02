@component('mail::message')

{{-- Apply font style to the whole message --}}
@php
    $fontStyle = 'font-family: Arial, sans-serif;'; // Replace with your desired font
@endphp
<div style="{{ $fontStyle }}">

Dear {{ $student->fname }},

{{ $student->title }},
<br>
<p style="{{ $fontStyle }}">
    {{ $student->message }}
</p>

<p style="{{ $fontStyle }}">
    Thank you,<br>
    {{ config('app.name') }}
</p>

</div>

@endcomponent
