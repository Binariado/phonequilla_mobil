@extends('template.layout')

@section('page-title', 'Mundo Reloj')

@section('content')
@php
    $activeSection="reset";
@endphp
<div id="reset" class="container mt-5 content-loggin-register">
    <div class="row justify-content-center">
        <div class="d-flex col-md-12 content-register style-group-input1">
            <div class="card">
                <div class="card-header f-size17"><i class="fas fa-user-alt bg-color1 text-white p-1 mr-2"></i>{{ __('Reset Password') }}</div>
                <div class="d-flex justify-content-center">
                    <div style="width:70%;" class="text-center f-M-regular t-color12 mt-3 mb-3 pl-3 pr-3">
                        Si no recuerdas tu contraseña, coloca tu correo electrónico registrado en nuestro sistema y te enviaremos un correo con el enlace para que crees la nueva contraseña:
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="container">
                            <div class="form-group d-flex flex-row justify-content-center">

                                <div class=" d-flex flex-row justify-content-center w-100">
                                    <label for="email" class="col-form-label text-md-right w-init ml-2">{{ __('E-Mail Address') }}</label>
                                    <div  class="col-md-4">
                                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn-f bg-color1 rounded-pill f-R-bold text-white pl-5 pr-5">
                                            {{ __('Enviar correo de recuperación') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>



@endsection
