
<div  class="d-flex justify-content-center ">
    <div data-step="2" class="w-pur js-step-action">
        <div class="product-shopping" >
            <h6 class="s-title t-color5">Elige tus opciones de envío</h6>
            <h6 class="mt-3 s-title s-text1 t-color6">Selecciona ciudad y barrio donde quieres despachar tus productos.</h6>
            <br>
            {{-- form --}}
            <form class="d-flex style-group-input1" id="form-bill">
                <div class="collapse" id="collapseDetails">
                    <div class="content-details">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="s-text-bold" for="departments">Departamento</label>
                                <select data-cities="#city" class="form-control js-required" name="departments" id="departments" disabled>
                                    <option value="" selected hidden>Seleccione...</option>
                                    @foreach ($departments as $departments)
                                        <option value="{{ $departments->id }}">{{ $departments->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label class="s-text-bold" for="city">Ciudad</label>
                                <select data-store="#store" class="form-control js-required" name="city" id="city">
                                    <option value="" selected hidden>Seleccione...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label class="s-text-bold" for="store">Tienda</label>
                                <select class="form-control js-required" name="store" id="store">
                                    <option value="" selected hidden>Seleccione...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es requerido
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="d-flex flex-column align-items-center justify-content-center content-details">

                    <div class="d-flex align-items-center shopping-addres">
                        <div class="d-flex flex-row bd-highlight group-address">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input checked data-form="form-bill" class="js-addres-new" type="radio" id="S_type1" name="Shipping_type" value="1" aria-label="Radio button for following text input" required>
                                </div>
                            </div>
                            <label class="d-flex text-addres"
                                for="S_type1"
                                disabled>
                                <div class="d-flex flex-column ">
                                    <div class="f-M-regular t-color52">
                                        <i class="fas fa-plane-departure t-color5" aria-hidden="true"></i>Envío a domicilio
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center shopping-addres">
                        <div class="d-flex flex-row bd-highlight group-address">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input data-form="form-bill" class="js-addres-new" type="radio" id="S_type2" name="Shipping_type" value="2" aria-label="Radio button for following text input" required>
                                </div>
                            </div>
                            <label class="d-flex text-addres"
                                for="S_type2"
                                disabled>
                                <div class="d-flex flex-column ">
                                    <div class="f-M-regular t-color52">
                                        <i class="fas fa-map-marker-alt t-color5" aria-hidden="true"></i>Retiro en tienda
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </form>

            <div class="d-flex justify-content-center go-purchase">
                <button type="button" class="btn pl-5 pr-5 js-btn-add f-R-bold">
                        Continuar
                </button>
                {{-- <input value="Continuar" type="button" class="btn pl-5 pr-5 js-btn-add" role="button"> --}}
            </div>
        </div>

    </div>
    @component('cart.general-information',[
        "cartItems"=>$cartItems
    ])
    @endcomponent
</div>


