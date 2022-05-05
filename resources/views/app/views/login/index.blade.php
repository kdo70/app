@extends('app.layouts.body')
@section('body')
    <div class="login-mini-logo">
        <img src="img/cb/oath.png" width="269" height="132" alt="Lineage 2 oath of blood">
    </div>
    <div class="login-logo">
        <img src="img/cb/logo.png" width="335" height="350" alt="Lineage 2 chaotic throne">
    </div>
    <x-login/>
    <x-login-menu/>
    <x-login-footer/>
@endsection
