@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>


<div class="kt-login__forgot">
        <div class="kt-login__head">
            <h3 class="kt-login__title">¿Olvidaste tu contraseña?</h3>
            <div class="kt-login__desc">
                Ingrese su correo electrónico para restablecer su contraseña:</div>
        </div>
        <form class="kt-form" action="">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Correo electronico"
                    name="email" id="kt_email" autocomplete="off">
            </div>
            <div class="kt-login__actions">
                <button id="kt_login_forgot_submit"
                    class="btn btn-brand btn-elevate kt-login__btn-primary">Enviar</button>&nbsp;&nbsp;
                <button id="kt_login_forgot_cancel"
                    class="btn btn-light btn-elevate kt-login__btn-secondary">Cancelar</button>
            </div>
        </form>
    </div>
@endsection
