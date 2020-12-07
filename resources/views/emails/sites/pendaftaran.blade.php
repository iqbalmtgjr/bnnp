@component('mail::message')
# BNN PONTIANAK

Silahkan anda datang ke bnnp kalimantan barat, pada tanggal {{$email->Tanggal_datang}} dengan membawa pesyaratan-persyaratan yang dibutuhkan

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
