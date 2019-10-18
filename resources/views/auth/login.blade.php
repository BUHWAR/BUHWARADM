@extends('layouts.app')

@section('content')


<div class="kt-login__signin">
    <div class="kt-login__head">
    </div>
    <form class="kt-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group">
            <input class="form-control @error('email') is-invalid @enderror" type="text"
                placeholder="Correo electrónico:" name="email" autocomplete="off">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="input-group">
            <input class="form-control @error('password') is-invalid @enderror" type="password"
                placeholder="Contraseña:" name="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="row kt-login__extra">
            <div class="col">
                <label class="kt-checkbox">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    Recordar contraseña
                    <span></span>
                </label>
            </div>



            @if (Route::has('password.request'))
            <div class="col kt-align-right">
                <a href="{{ route('password.request') }}" id="kt_login_forgot" class="kt-login__link">¿Olvidaste tu
                    contraseña?</a>
            </div>
            @endif
        </div>

        <div class="kt-login__actions">
            <br>
          
            <button type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
                Ingresar
            </button>

            
        </div>

    </form>
</div>






@endsection