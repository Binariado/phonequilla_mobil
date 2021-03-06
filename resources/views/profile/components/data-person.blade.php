<div class="title t-color5 mb-3">
    Configuración de datos personales
</div>
@php
    $address=$user_detail->User->AddressMain->first();
@endphp

<form data-required id="dataPerson" class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label class="" for="name">Nombre *</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$user_detail->name}}" placeholder="Andrea" required>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="last_name">Apellido *</label>
        <input type="text" class="form-control" id="last_name"  name="last_name" placeholder="Velez Pacheco" value="{{$user_detail->last_name}}" required>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="email">Correo *</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="andreita2030@hotmail.com" value="{{$user_detail->User->email}}" required>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label class="" for="document_types_id">Tipo de documento *</label>
        <select class="custom-select " name="document_types_id" id="document_types_id" required>
            <option value="" {{$user_detail->document_types_id==null?"selected":""}} hidden>Seleccione..</option>
            @foreach ($Document_Type as $DocumentType)
                <option value="{{ $DocumentType->id }}" {{$user_detail->document_types_id==$DocumentType->id?"selected":""}}>{{ $DocumentType->code }}</option>
            @endforeach
        </select>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="document">Número de documento *</label>
        <input type="text" class="form-control " name="document" id="document" placeholder="1.001.777.757" value="{{$user_detail->User->document}}" required>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="birthplace">Pais de residencia *</label>
        <select class="custom-select " name="birthplace" id="birthplace" required>
            <option value="" {{$user_detail->current_place==null?"selected":""}} hidden>Seleccione..</option>
            @foreach ($Countries as $Countrie)
                <option value="{{ $Countrie->id }}" {{$user_detail->current_place==$Countrie->id?"selected":""}}>{{ $Countrie->name }}</option>
            @endforeach
        </select>
      </div>

    </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label class="" for="birthday">Fecha de nacimiento *</label>
            {{-- <div class="input-group">
                <input type="text" class="form-control border-l border-right-none datepicker" name="birthday" id="birthday" aria-describedby="inputGroupPrepend" placeholder="10 / 05 / 1990" required>
                <div class="input-group-prepend">
                    <span class="input-group-text border-r" id="inputGroupPrepend">
                        <i class="fas fa-calendar-day"></i>
                    </span>
                </div>
            </div> --}}
            <input type="text" class="form-control datepicker" name="birthday" id="birthday" placeholder="10 / 05 / 1990" value="{{$user_detail->User->birthday}}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label class="" for="phone">Celular *</label>
            <input type="text" class="form-control " name="phone" id="phone" placeholder="301 277 3322"   value="{{$user_detail->User->phone}}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label class="" for="gender">Genero *</label>
            <select class="custom-select " name="gender" id="gender" required>
                <option value="" {{$user_detail->gender==null?"selected":""}} hidden>Seleccione..</option>
                <option {{$user_detail->gender=="Hombre"?"selected":""}} value="Hombre">Hombre</option>
                <option {{$user_detail->gender=="Mujer"?"selected":""}} value="Mujer">Mujer</option>
            </select>
        </div>
      </div>

<div class="d-flex flex-column shopping-addres">
    <div class="d-flex flex-row bd-highlight group-address mb-4 mt-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
            <input checked  data-form="form-bill" class="js-addres-new" type="radio" id="{{ $address->id }}{{isset($address->main)?'-main':""}}" name="address_id" value="{{ $address->id }}{{isset($address->main)?'-main':""}}" aria-label="Radio button for following text input" required>
            </div>
        </div>
        <label class="d-flex text-addres"
            for="{{ $address->id }}{{isset($address->main)?'-main':""}}"
            disabled>
            <div class="d-flex flex-column ">
                <div class="roboto-regular t-color6">{{ ucwords($address->Departments->Countries->name) }}</div>
                <div class="roboto-regular t-color6">{{ ucwords($address->Departments->name).' - '.ucwords($address->Cities->name).', '.ucwords($address->address) }}
                </div>
                <div class="roboto-regular t-color6">{{ ' ('.ucwords($address->address_detail).')' }}</div>
            </div> 

            {{-- <div class="d-flex align-items-center justify-content-center content-button go-purchase view-web">
                <a class="btn pl-3 pr-3 f-R-bold" role="button">
                    Usar esta dirección
                </a>
            </div> --}}
            <div class="d-flex align-items-center content-b-delete go-purchase">
                <div class="shopping-delete">
                    <i style="cursor:pointer;" data-id="{{$address->id}}" class="fas fa-trash-alt js-address-delete"></i>
                </div>
            </div>

        </label>
    </div>
</div>


    <div class="p-4">
        <div data-target="#collapseAdd" class="d-flex justify-content-between mt-3 js-collapseP">
            <label>Agregar dirección de residencia *</label>
            <i class="fas fa-angle-down rotate-icon d-flex align-items-center row-t"></i>
        </div>
        <div>
            <hr class="hr-separator mt-0">
        </div>

        <div class="collapse" id="collapseAdd">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="" for="departament">Departamento *</label>
                    <select data-cities=".cities-data-person" class="form-control custom-select js-department" name="department" id="department" required>
                        <option value="" selected hidden>Seleccione..</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="" for="address">Dirección *</label>
                    <input type="text" class="form-control " name="address" id="address" required>
                     <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="city">Ciudad *</label>
                    <select class="form-control custom-select cities-data-person" name="city" id="city" required>
                        <option value="" selected hidden>Seleccione..</option>
                    </select>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="detailsAddress">Detalles de la dirección</label>
                    <input type="text" class="form-control" id="detailsAddress" name="detailsAddress">
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="neighborhood_m">Barrio *</label>
                    <input type="text" class="form-control " name="neighborhood_m" id="neighborhood_m" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="" for="place">Nombre del lugar</label>
                    <input type="text" class="form-control" name="place" id="place">
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<div class="d-flex justify-content-center go-purchase f-R-bold">
    <button type="button" class="btn pl-5 pr-5 js-btn-data-person f-R-bold">
        Guardar dirección
    </button>
</div>
