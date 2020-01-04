
<div  class="d-flex justify-content-center ">
    <div data-step="2" class="w-pur js-step-action">
        <div class="product-shopping" >
            <h6 class="s-title t-color1">Elige tus opciones de envío</h6>
            <h6 class="mt-3 s-title s-text1 t-color5">Selecciona ciudad y barrio donde quieres despachar tus productos.</h6>
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
                                    <div class="f-M-regular t-color12">
                                        <i class="fas fa-plane-departure t-color1" aria-hidden="true"></i>Envío a domicilio
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
                                    <div class="f-M-regular t-color12">
                                        <i class="fas fa-map-marker-alt t-color1" aria-hidden="true"></i>Retiro en tienda
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

<script>
        $(".js-addres-new").click(function () {
            if(this.value==1){
                $('#collapseDetails')
                .collapse('hide');
            }else{
                $('#collapseDetails')
                .collapse('show');
            }
        });

        $(".js-btn-add").click(function(){
            function send(){
                dataForm.get("Shipping_type")
                $.post("/shopping/shipment-details",$("#form-bill").serialize())
                .done(function(data){
                    const contentUpdate=document.querySelector(".content-update");
                    $(contentUpdate).html(data);
                    step.next($(".js-step-action"));
                });
            }
            const dataForm=new FormData($("#form-bill")[0]);
            if(dataForm.get("Shipping_type")==2){
                let ft=true;
                dataForm.forEach((value,name)=>{
                    if(value==""){
                        document.querySelector('[name="'+name+'"]')
                        .classList
                        .add("is-invalid");
                        ft=false
                    }else{
                        document.querySelector('[name="'+name+'"]')
                        .classList
                        .add("is-valid");
                        document.querySelector('[name="'+name+'"]')
                        .classList
                        .remove("is-invalid");
                    }
                    return ft;
                });
                if(ft==true){
                    send();
                }
            }else{
                send();
            }
        });

        let cities={};
        let store={};
        $.post("/shopping/cities-global")
        .done(function(data){
            cities=data.cities;
            store=data.store;
            $("#departments").removeAttr("disabled");
            $("#departments").change(function(){
                $("#city").removeAttr("disabled");
                const citiesOption=cities[this.value];
                const elmCities= document.querySelector(this.dataset.cities);
                $(elmCities).html("");
                $(elmCities)
                .html('<option value="" selected hidden>Seleccione..</option>');
                for (const key in citiesOption) {
                    if (citiesOption.hasOwnProperty(key)) {
                        const element = citiesOption[key];
                        $(elmCities).append($("<option>").attr({
                            value:element.id
                        }).html(element.name)
                        );
                    }
                }
            });

            $("#city").change(function(){
                $("#store").removeAttr("disabled");
                const citiesOption=store[this.value];
                const elmCities= document.querySelector(this.dataset.store);
                $(elmCities).html("");
                $(elmCities)
                .html('<option value="" selected hidden>Seleccione..</option>');
                for (const key in citiesOption) {
                    if (citiesOption.hasOwnProperty(key)) {
                        const element = citiesOption[key];
                        $(elmCities).append($("<option>").attr({
                            value:element.id
                        }).html(element.name)
                        );
                    }
                }
            });

        });
</script>
