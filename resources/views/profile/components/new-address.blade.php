<div class="title t-color5 mb-3">
        Libreta de direcciones
</div>
<form id="addressNotebook" class="needs-validation" novalidate>
    <div class="p-4">
        <div data-target="#collapseAdd2" class="d-flex justify-content-between mt-3 js-collapseP">
                <label class="Roboto-bold">Agregar dirección de residencia</label>
                <i class="fas fa-angle-down rotate-icon d-flex align-items-center row-t"></i>
        </div>
        <div>
            <hr class="hr-separator mt-0">
        </div>

        <div class="collapse" id="collapseAdd2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="" for="departament">Departamento</label>
                    <select class="form-control custom-select js-required" name="state" id="department">
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
                    <label class="" for="address">Dirección</label>
                    <input type="text" class="form-control  js-required" name="address" id="address">
                     <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="city">Ciudad</label>
                    <select class="form-control custom-select js-required" name="city" id="city">
                        <option value="" selected hidden>Seleccione..</option>
                    </select>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="datalisAddress">Detalles de la dirección</label>
                    <input type="text" class="form-control js-required" id="datalisAddress" name="address_detail" >
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="barrio">Barrio</label>
                    <input type="text" class="form-control js-required" name="neighborhood" id="barrio" >
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="" for="place">Nombre del lugar</label>
                    <input type="text" class="form-control js-required" name="address_site" id="place">
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
            </div>
        </div>

    </div>

</form>


<div class="d-flex justify-content-center go-purchase f-R-bold">
    <button type="button" class="btn pl-5 pr-5 js-btn-add f-R-bold">
        Guardar dirección
    </button>
</div>
