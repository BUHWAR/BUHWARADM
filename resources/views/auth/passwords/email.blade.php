@extends('layouts.app')

@section('content')

<div class="kt-login__signin">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="kt-login__head">
        <h3 class="kt-login__title">¿Olvidaste tu contraseña?</h3>
        <div class="kt-login__desc">
            Ingrese su correo electrónico para restablecer su contraseña:</div>
    </div>
    <form class="kt-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="input-group">
            <input class="form-control @error('email') is-invalid @enderror" type="text"
                placeholder="Correo electronico" name="email" id="kt_email" autocomplete="off"
                value="{{ old('email') }}" required autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="kt-login__actions">
            <button type="submit" id="kt_login_forgot_submit"
                class="btn btn-brand btn-elevate kt-login__btn-primary">Enviar</button>&nbsp;&nbsp;
            <a id="kt_login_forgot_cancel" href="{{route('home')}}"
                class="btn btn-light btn-elevate kt-login__btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

@endsection

