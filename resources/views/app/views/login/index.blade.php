@extends('app.layouts.body')
@section('body')
    <div class="registration">
        <x-registration/>
    </div>
    <div class="login-mini-logo">
        <img src="img/cb/oath.png" width="215" height="105" alt="Lineage 2 oath of blood">
    </div>
    <div class="login-logo">
        <img src="img/cb/logo.png" width="268" height="280" alt="Lineage 2 chaotic throne">
    </div>{{--
    <x-login/>--}}
    <x-login-menu/>
    <x-login-footer/>
@endsection
