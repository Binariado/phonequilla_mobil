<div class="title t-color5 mb-3">
    Libreta de direcciones
</div>
<form data-required id="addressNotebook" class="needs-validation" novalidate>
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
                    <label class="" for="departament">Departamento *</label>
                    <select data-cities=".cities-new-addres" class="form-control custom-select  js-department" name="department_a" id="department_a" disabled required>
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
                    <input type="text" class="form-control  " name="address_a" id="address_a" required>
                     <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="city">Ciudad *</label>
                    <select class="form-control custom-select  cities-new-addres" name="city_a" id="city_a" required>
                        <option value="" selected hidden>Seleccione..</option>
                    </select>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="datalisAddress">Detalles de la dirección</label>
                    <input type="text" class="form-control" id="datalisAddress_a" name="address_detail_a" >
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="barrio">Barrio *</label>
                    <input type="text" class="form-control " name="neighborhood_a" id="neighborhood_a" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="" for="place">Nombre del lugar</label>
                    <input type="text" class="form-control" name="address_site_a" id="address_site_a">
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
            </div>
        </div>

    </div>

</form>


<div class="d-flex justify-content-center go-purchase f-R-bold">
    <button type="button" class="btn pl-5 pr-5 js-btn-new-address f-R-bold">
        Guardar dirección
    </button>
</div>
