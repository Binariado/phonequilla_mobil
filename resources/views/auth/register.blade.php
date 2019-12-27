@extends('template.layout')


@section('title', 'IphoneQuilla')
@section('content')
<nav class="head" id="head">
        @component('components.head')

        @endcomponent
</nav>
<div id="login_register" class="container mt-5 content-loggin-register">
    <div class="row justify-content-center">
        <div class="d-flex col-md-12 content-register justify-content-center style-group-input1">
            <div style="width:420px !important;" class="card">
                <div class="card-header f-size17"><i class="fas fa-user-alt bg-color1 text-white p-1"></i> {{ __('Regístrate en Mundoreloj') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="d-flex flex-column aling-items-center justify-content-center">
                            {{-- NOMBRE --}}
                            <div class="form-group col">
                                <label for="name" class="col-form-label">{{ __('Nombre') }}</label>
                                <div>
                                    <input id="name" type="text" class="form-control @error('name') @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="LUCY">
                                    {{-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            {{-- APELLIDOS --}}
                            <div class="form-group col">
                                <label for="last_name" class="col-form-label">{{ __('Apellidos') }}</label>
                                <div>
                                    <input id="last_name" type="text" class="form-control @error('last_name') @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="ORTEGA">
                                    {{-- @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            {{-- EMAIL --}}
                            <div class="form-group col">
                                <label for="email" class="col-form-label">{{ __('Correo') }}</label>
                                <div>
                                    <input id="email" type="email" class="form-control @error('email') @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@email.com">
                                    {{-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            {{-- CONTRASEÑA --}}
                            <div class="form-group col">
                                <label for="password" class="col-form-label">{{ __('Clave') }}</label>
                                <div>
                                    <input id="password" type="password" class="form-control @error('password') @enderror" name="password" required autocomplete="new-password" placeholder="*****">
                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group col">
                                <label for="password-confirm" class="col-form-label">{{ __('Confirmar clave') }}</label>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="*****">
                                </div>
                            </div>

                            {{-- PAIS DE RESIDENCIA --}}
                            {{-- <div class="form-group col-4">
                                <label for="birthplace" class="col-form-label">{{ __('País de nacimiento') }}</label>
                                <div>
                                    <select id="birthplace" class="form-control @error('birthplace') is-invalid @enderror" name="birthplace" value="{{ old('birthplace') }}" required autocomplete="birthplace" autofocus>
                                        <option value="">Seleccione</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}
                                        @endforeach
                                    </select>
                                    @error('birthplace')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- TIPOS DE DOCUMENTOS --}}
                            {{-- <div class="form-group col-4">
                                <label for="document_type" class="col-form-label">{{ __('Tipo de documento') }}</label>
                                <div>
                                    <select id="document_type" class="form-control @error('document_type') is-invalid @enderror" name="document_type" value="{{ old('document_type') }}" required autocomplete="document_type" autofocus>
                                        <option value="">Seleccione</option>
                                        @foreach ($document_types as $document_type)
                                            <option value="{{ $document_type->id }}">{{ $document_type->code }} - {{ $document_type->description }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- NUMERO DE DOCUMENTO --}}
                            {{-- <div class="form-group col-4">
                                <label for="document" class="col-form-label">{{ __('Número de documento') }}</label>
                                <div>
                                    <input id="document" type="number" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}" required autocomplete="document" autofocus placeholder="Escriba aquí">
                                    @error('document')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- GENERO --}}
                            {{-- <div class="form-group col-4">
                                <label for="gender" class="col-form-label">{{ __('Genero') }}</label>
                                <div>
                                    <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                        <option value="">Seleccione</option>
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}


                            {{-- FECHA DE NACIEMIENTO --}}
                            {{-- <div class="form-group col-4">
                                <label for="birthday" class="col-form-label">{{ __('Fecha de Nacimiento') }}</label>
                                <div>
                                    <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus placeholder="Escriba aquí">
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}


                            {{-- CELULAR --}}
                            {{-- <div class="form-group col-4">
                                <label for="phone" class="col-form-label">{{ __('Celular') }}</label>
                                <div>
                                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Escriba aquí">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- PAIS --}}
                            {{-- <div class="form-group col-4">
                                <label for="country" class="col-form-label">{{ __('País de residencia') }}</label>
                                <div>
                                    <select id="country" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                                        <option value="">Seleccione</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- DEPARTAMENTO --}}
                            {{-- <div class="form-group col-4">
                                <label for="department" class="col-form-label">{{ __('Departamento') }}</label>
                                <div>
                                    <select id="department" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department" autofocus>
                                        <option value="">Seleccione</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}
                                        @endforeach
                                    </select>
                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- CIUDAD --}}
                            {{-- <div class="form-group col-4">
                                <label for="city" class="col-form-label">{{ __('Ciudad') }}</label>
                                <div>
                                    <select id="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                        <option value="">Seleccione</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}
                                        @endforeach
                                    </select>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- BARRIO --}}
                            {{-- <div class="form-group col-4">
                                <label for="neighborhood" class="col-form-label">{{ __('Barrio') }}</label>
                                <div>
                                    <input id="neighborhood" type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" value="{{ old('neighborhood') }}" required autocomplete="neighborhood" autofocus placeholder="Escriba aquí">
                                    @error('neighborhood')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- DIRECCION --}}
                            {{-- <div class="form-group col-4">
                                <label for="address" class="col-form-label">{{ __('Dirección') }}</label>
                                <div>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Carrera 00 #00-00">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- DETALLE DIRECCION --}}
                            {{-- <div class="form-group col-4">
                                <label for="address_detail" class="col-form-label">{{ __('Detalle de la dirección') }}</label>
                                <div>
                                    <input id="address_detail" type="text" class="form-control @error('address_detail') is-invalid @enderror" name="address_detail" value="{{ old('address_detail') }}" required autocomplete="address_detail" autofocus placeholder="Apartamento 8, casa9, local...">
                                    @error('address_detail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- SITIO DIRECCION --}}
                            {{-- <div class="form-group col-4">
                                <label for="address_site" class="col-form-label">{{ __('Guardar dirección como') }}</label>
                                <div>
                                    <input id="address_site" type="text" class="form-control @error('address_site') is-invalid @enderror" name="address_site" value="{{ old('address_site') }}" required autocomplete="address_site" autofocus placeholder="Mi casa, Novio, Oficina...">
                                    @error('address_site')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-group d-flex flex-column col-12 text-center mt-4">
                                <div class="d-flex flex-column justify-content-center mb-4">
                                    <div  class="input-group-prepend mb-4">
                                        <div class="input-group-text align-items-center">
                                            <input  class="" type="checkbox" id="email-reived" name="email-reived" value="email-reived" aria-label="Radio" >
                                        </div>
                                        <label class="d-flex align-items-center text-justify" for="email-reived" disabled="">
                                            <span class="f-size14 f-M-regular">
                                                    Quiero recibir vía e-mail ofertas y novedades de Mundoreloj
                                            </span>
                                        </label>
                                    </div>

                                    <div  class="input-group-prepend">
                                        <div class="input-group-text input-group-text align-items-center">
                                            <input  class="" type="radio" id="privacid" name="privacid" value="privacid" aria-label="Radio" required>
                                        </div>
                                        <label class="d-flex align-items-center text-justify" for="privacid" disabled="">
                                            <span class="f-size14 f-M-regular">
                                                    Acepto los  términos y condiciones y políticas de privacidad
                                            </span>
                                        </label>
                                    </div>

                                </div>

                                <div class="d-flex flex-row justify-content-center">
                                    <div class="col">
                                        <button type="submit" class="btn-f bg-color1 rounded-pill f-R-bold text-white">
                                                {{ __('Finalizar registro') }}
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
