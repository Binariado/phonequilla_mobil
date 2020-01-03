<div class="title t-color5 mb-3">
    Configuración de datos personales
</div>
<form data-required id="dataPerson" class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label class="" for="name">Nombre *</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Andrea" required>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="last_name">Apellido *</label>
        <input type="text" class="form-control" id="last_name"  name="last_name" placeholder="Velez Pacheco" required>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="email">Correo *</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="andreita2030@hotmail.com" required>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label class="" for="document_types_id">Tipo de documento *</label>
        <select class="custom-select " name="document_types_id" id="document_types_id" required>
            <option value="" selected hidden>Seleccione..</option>
            @foreach ($Document_Type as $DocumentType)
                <option value="{{ $DocumentType->id }}">{{ $DocumentType->code }}</option>
            @endforeach
        </select>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="document">Número de documento *</label>
        <input type="text" class="form-control " name="document" id="document" placeholder="1.001.777.757" required>
      </div>

      <div class="col-md-4 mb-3">
        <label class="" for="birthplace">Pais de residencia *</label>
        <select class="custom-select " name="birthplace" id="birthplace" required>
            <option value="" selected hidden>Seleccione..</option>
            @foreach ($Countries as $Countrie)
                <option value="{{ $Countrie->id }}">{{ $Countrie->name }}</option>
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
            <input type="text" class="form-control datepicker" name="birthday" id="birthday" placeholder="10 / 05 / 1990" required>
        </div>

        <div class="col-md-4 mb-3">
            <label class="" for="phone">Celular *</label>
            <input type="text" class="form-control " name="phone" id="phone" placeholder="301 277 3322" required>
        </div>

        <div class="col-md-4 mb-3">
            <label class="" for="gender">Genero *</label>
            <select class="custom-select " name="gender" id="gender" required>
                <option value="" selected hidden>Seleccione..</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
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
