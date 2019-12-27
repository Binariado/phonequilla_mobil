@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Editar Usuario') }}</div>

            <div class="card-body">

                {!! Form::open(['route' => ['profile.update', Auth::user()->id], 'method' => 'POST']) !!}

                <div class="row justify-content-center col-12">
                    {{-- NOMBRE --}}
                    <div class="form-group col-4">
                        <label for="name" class="col-form-label">{{ __('Nombre') }}</label>
                        <div>
                            <input id="name" type="text" class="form-control @error('name') @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Escriba aquí">
                            {{-- @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    {{-- APELLIDOS --}}
                    <div class="form-group col-4">
                        <label for="surname" class="col-form-label">{{ __('Apellidos') }}</label>
                        <div>
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $user->surname }}" required autocomplete="surname" autofocus placeholder="Escriba aquí">
                            {{-- @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    {{-- EMAIL --}}
                    <div class="form-group col-4">
                        <label for="email" class="col-form-label">{{ __('Correo') }}</label>
                        <div>
                            <input id="email" type="email" class="form-control @error('email') @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Escriba aquí" disabled>
                            {{-- @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    {{-- TIPOS DE DOCUMENTOS --}}
                    <div class="form-group col-4">
                        <label for="document_type" class="col-form-label">{{ __('Tipo de documento') }}</label>
                        <div>
                            <select id="document_type" class="form-control @error('document_type') @enderror" name="document_type" required autofocus>
                                @if ($document !== null)
                                    <option value="{{ $user->document_type_id }}" selected hidden>{{ $document->code }} - {{ $document->description }}</option>
                                    @foreach ($document_types as $document_type)
                                        <option value="{{ $document_type->id }}">{{ $document_type->code }} - {{ $document_type->description }}</option>
                                    @endforeach
                                @else
                                    <option value="" selected hidden>Seleccione...</option>
                                    @foreach ($document_types as $document_type)
                                        <option value="{{ $document_type->id }}">{{ $document_type->code }} - {{ $document_type->description }}</option>
                                    @endforeach
                                @endif
                            </select>
                            {{-- @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    {{-- NUMERO DE DOCUMENTO --}}
                    <div class="form-group col-4">
                        <label for="document" class="col-form-label">{{ __('Número de documento') }}</label>
                        <div>
                            <input id="document" type="number" class="form-control @error('document') @enderror" name="document" value="{{ $user->document }}" required autocomplete="document" autofocus placeholder="Escriba aquí">
                            {{-- @error('document')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    {{-- FECHA DE NACIEMIENTO --}}
                    <div class="form-group col-4">
                        <label for="birthday" class="col-form-label">{{ __('Fecha de Nacimiento') }}</label>
                        <div>
                            <input id="birthday" type="date" class="form-control @error('birthday') @enderror" name="birthday" value="{{ $user->birthday }}" required autocomplete="birthday" autofocus placeholder="Escriba aquí">
                            {{-- @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>


                    {{-- CELULAR --}}
                    <div class="form-group col-4">
                        <label for="phone" class="col-form-label">{{ __('Celular') }}</label>
                        <div>
                            <input id="phone" type="number" class="form-control @error('phone') @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus placeholder="Escriba aquí">
                            {{-- @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="col-12">
                        <ul>
                            @foreach ($addresses as $item)
                            {!! Form::open(['route' => ['profile.address_delete', $item->id], 'method' => 'POST']) !!}
                            <li>
                                {{ $item->address }} {{ $item->address_detail ? '/'.$item->address_detail : '' }} {{ $item->address_site ? '/'.$item->address_site : '' }} <button class="btn btn-danger" type="submit"><span class="fa fa-trash"></span></button>
                            </li>
                            {!! Form::close() !!}
                            @endforeach
                        </ul>
                    </div>

                    <br>
                    <iframe width=1024 height=600 src="https://admin.videojuegosbaq.com.co:31998/default.aspx?id={{  Auth::User()->email }}" frameborder="0" allowfullscreen></iframe>

                    <br>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success"><i class="fa fa-refresh"></i></button>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <a href="{{ route('users.index') }}" class="btn btn-danger"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@endsection
