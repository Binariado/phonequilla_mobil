
<div class="d-flex justify-content-center">
    <div data-step="4" class="w-pur js-step-action">
        <div class="product-shopping" >
            <h6 class="s-title t-color5">Información de pago</h6>
            <h6 class="mt-3 s-title s-text1 t-color6">Para continuar confirmenos los datos de su factura:</h6>
            <br>
            <form id="form-bill">
                <div class="d-flex flex-column shopping-addres">
                    <div class="d-flex flex-row bd-highlight group-address" style="margin-bottom: 1.5em">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input checked  data-form="form-bill" class="js-addres-new" type="radio" id="{{ $address->id }}{{isset($address->main)?'-main':""}}" name="address_id" value="{{ $address->id }}{{isset($address->main)?'-main':""}}" aria-label="Radio button for following text input" required>
                            </div>
                        </div>
                        <label class="d-flex text-addres"
                        for="{{ $address->id }}{{isset($address->main)?'-main':""}}"
                        disabled>
                         <div class="d-flex flex-column ">
                            <div>{{ ucwords($address->Departments->Countries->name) }}</div>
                            <div>{{ ucwords($address->Departments->name).' - '.ucwords($address->Cities->name).', '.ucwords($address->address) }}
                            </div>
                            <div>{{ ' ('.ucwords($address->address_detail).')' }}</div>
                        </div> 

                            {{-- <div class="d-flex align-items-center justify-content-end content-button go-purchase view-web">
                                <a class="btn pl-3 pr-3 f-R-bold" role="button">
                                    Usar estos datos
                                </a>
                            </div> --}}

                        </label>
                    </div>
                </div>
                <div class="d-flex flex-row bd-highlight group-address-new" style="margin-bottom: 1.5em">
                    <div  class="input-group-prepend">
                        <div class="input-group-text align-items-start">
                            <input data-form="form-bill-new" class="js-addres-new js-collapse" type="radio" id="new-addres" name="address_id" value="new-addres" aria-label="Radio" required="">
                        </div>
                    </div>
                    <label class="d-flex flex-column text-addres s-text-bold" for="new-addres" disabled="">
                        Facturar a nombre de una empresa
                        <hr class="hr-separator">
                    </label>
                </div>
            </form>

            <div class="collapse collapse-style style-group-input1" id="collapseAddNew">
                <div class="container">
                    <form id="form-bill-new">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="s-text-bold" for="business_name">Razón social de la empresa</label>
                                <input type="text" class="form-control js-required" name="business_name" id="business_name" required>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="s-text-bold" for="number_nit">Número de NIT</label>
                                <input type="text" class="form-control js-required" name="number_nit" id="number_nit" required>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="s-text-bold" for="address">Dirección</label>
                                <input type="text" class="form-control js-required" name="address" id="address" required>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="s-text-bold" for="phone">Telefono principal</label>
                                <input type="text" class="form-control js-required" id="phone" name="phone" required>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="s-text-bold" for="departament">Departamento</label>
                                <select data-cities="#city" class="form-control js-required" name="department" id="department" required disabled>
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
                                <label class="s-text-bold" for="city">Ciudad</label>
                                <select class="form-control js-required" name="city" id="city" required>
                                    <option value="" selected hidden>Seleccione..</option>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <hr class="hr-separator">
            <div class="points d-flex align-items-center justify-content-center">
                <div class="f-M-regular t-color6 text-point">
                    <span class="f-M-bold">¿Tienes un cupón de descuento?</span> Ingrésalo a continuación:
                </div>
                <div data-toggle="tooltip" data-placement="top" title="Enter para guardar">
                        <input class="rounded-pill form-control js-poinst" type="number" name="points" id="points" placeholder="Código de cupón">
                </div>
            </div>

        </div>
    </div>

    @component('cart.general-information',[
        "cartItems"=>$cartItems
    ])
    @endcomponent
</div>

<div class="d-flex justify-content-center go-purchase f-R-bold">
    <button type="button" class="btn pl-5 pr-5 js-btn-add f-R-bold">
        Finalizar comprar
    </button>
</div>
