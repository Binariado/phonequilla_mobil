@extends('template.layout')


@section('title', 'IphoneQuilla')
@section('content')
<nav class="head" id="head">
    @component('components.head')

    @endcomponent
</nav>
<div id="login_register" class="d-flex flex-column container mt-5 content-loggin-register">
    <div class="d-flex justify-content-center">
        <div class="d-flex col-md-12 content-login style-group-input1">
            <div class="card">
                <div class="card-body">
                    <div class="card-header f-size17 roboto-regular mb-4"><i class="fas fa-user-alt bg-color1 text-white p-1"></i> {{ __('Ingresa a tu cuenta') }}</div>
                    <div class="f-M-regurlar t-color2 roboto-regular pl-5 pr-5">Escribe los datos para acceder a tu cuenta Mundoreloj:</div>
                    <form class="pl-5 pr-5 form-login" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label  s-text-bold t-color12">Correo electrónico</label>

                            <div class="">
                                <input id="email" type="email" class="style-input1 focus-n f-M-regurlar f-size17 rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@mail.com" autofocus>

                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label s-text-bold t-color12">Contraseña</label>

                            <div class="">
                                <input id="password" type="password" class="style-input1 focus-n f-size17 f-M-regurlar rounded-pill @error('password') is-invalid @enderror" name="password" required placeholder="****" autocomplete="current-password">

                                {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group mb-0">
                            <div class="d-flex flex-column">
                                <button type="submit" class="btn-f bg-color1 rounded-pill f-R-bold text-white">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-muted mb-2 mt-2 btn-reset" href="{{ route('password.request') }}">
                                        {{ __('Olvide mi contraseña?') }}
                                    </a>
                                @endif
                                {{-- <a href="{{ route('login.google') }}" class="btn-f bg-google text-white  rounded-pill f-R-bold">
                                    <i class="fab fa-google"></i>
                                    &nbsp; {{ __('Iniciar con Google') }}
                                </a> --}}
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card d-flex justify-content-center card-register">
                <div class="imten-card-register" style="padding: 1.25rem;">
                    <div class="d-flex flex-column">
                        <div class="text-center roboto-regular t-color5">
                            ¿Eres nuevo en <span class="roboto-bold">IPHONEQUILLA?</span>
                        </div>
                        <div class="text-center roboto-regular t-color12 mt-3 mb-3 pl-3 pr-3">
                            Regístrate en nuestro sitio y descubre todas las oportunidades que tenemos para ti.
                        </div>
                        <div class="pl-5 pr-5 c-btn-register">
                            <a href="{{url("/register")}}">
                                <button class="btn-f bg-color1 rounded-pill f-R-bold text-white">
                                    Crear una cuenta IphoneQuilla
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
