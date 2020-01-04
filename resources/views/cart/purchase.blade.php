
            <div  class="d-flex justify-content-center ">
                <div data-step="3" class="w-pur js-step-action">
                    <div class="product-shopping" >
                        <h6 class="s-title t-color1">Selecciona desde tus direcciones o ingresa una nueva dirección.</h6>
                        <br>
                        {{-- form --}}
                        <form id="form-bill">
                            @php
                                $checkedNew="checked";
                            @endphp
                            <div class="d-flex flex-column shopping-addres">
                                @foreach ($addresses as $address)
                                    @php
                                        $checkedNew="";
                                    @endphp
                                    <div class="d-flex flex-row bd-highlight group-address" style="margin-bottom: 1.5em">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input checked data-form="form-bill" class="js-addres-new" type="radio" id="{{ $address->id }}" name="address_id" value="{{ $address->id }}" aria-label="Radio button for following text input" required>
                                            </div>
                                        </div>
                                        <label class="d-flex text-addres"
                                            for="{{ $address->id }}"
                                            disabled>
                                            {{--  <div class="d-flex flex-column ">
                                                <div>{{ ucwords($address->country) }}</div>
                                                <div>{{ ($address->department_id).' - '.ucwords($address->city_id).', '.$address->address }}
                                                </div>
                                                <div>{{ ' ('.$address->address_detail.')' }}</div>
                                            </div>  --}}

                                            <div class="d-flex align-items-center justify-content-center content-button go-purchase view-web">
                                                <a class="btn pl-3 pr-3 f-R-bold" role="button">
                                                    Usar esta dirección
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center content-b-delete go-purchase">
                                                <div class="shopping-delete">
                                                    <i style="cursor:pointer;" data-id="{{$address->id}}" class="fas fa-trash-alt js-address-delete"></i>
                                                </div>
                                            </div>

                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="d-flex flex-row bd-highlight group-address-new" style="margin-bottom: 1.5em">
                                    <div  class="input-group-prepend">
                                        <div class="input-group-text align-items-start">
                                            <input {{$checkedNew}} data-form="form-bill-new" class="js-addres-new js-collapse" type="radio" id="new-addres" name="address_id" value="new-addres" aria-label="Radio" required="">
                                        </div>
                                    </div>
                                    <label class="d-flex flex-column text-addres s-text-bold" for="new-addres" disabled="">
                                            Ingresar nueva dirección
                                            <hr class="hr-separator">
                                    </label>
                            </div>

                        </form>
                        <script>
                            const a_delte=document.querySelectorAll(".js-address-delete");
                            function addFunDelete_address(elm) {
                                elm
                                .addEventListener('click',function (e) {
                                    const elm=this.parentNode;
                                    const id=this.dataset.id;
                                    Swal.fire({
                                    title: 'Esta seguro de eliminar esta dirección?',
                                    text: '',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Si',
                                    cancelButtonText: 'No'
                                    }).then((result) => {
                                    if (result.value) {
                                       $(elm).html(
                                           `<div class="spinner-border text-danger" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>`
                                        );
                                        $.post("/address/"+id+"/destroy")
                                        .done(function () {
                                            if(true){
                                                $($(elm).parents(".group-address")[0]).remove();
                                                Swal.fire(
                                                'Eliminado correctamente.',
                                                '',
                                                'success'
                                                )
                                            }
                                        })

                                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                                        // Swal.fire(
                                        // 'Cancelled',
                                        // 'Your imaginary file is safe :)',
                                        // 'error'
                                        // )
                                    }
                                    })

                                });
                            }
                            if(Array.from(a_delte).length>0){
                                for (const key in a_delte) {
                                  if (a_delte.hasOwnProperty(key)) {
                                    const element = a_delte[key];
                                    addFunDelete_address(element);
                                  }
                                }
                            }

                        </script>

                        <div class="collapse collapse-style style-group-input1" id="collapseAddNew">
                            <div class="container">
                                {{-- form --}}
                                <form id="form-bill-new">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="s-text-bold" for="departament">Departamento</label>
                                            <select class="form-control js-required" name="department" id="department">
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
                                            <label class="s-text-bold" for="address">Dirección</label>
                                            <input type="text" class="form-control js-required" name="address" id="address">
                                             <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="s-text-bold" for="city">Ciudad</label>
                                            <select class="form-control js-required" name="city" id="city">
                                                <option value="" selected hidden>Seleccione..</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="s-text-bold" for="datalisAddress">Detalles de la dirección</label>
                                            <input type="text" class="form-control js-required" id="datalisAddress" name="datalisAddress" >
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="s-text-bold" for="barrio">Barrio</label>
                                            <input type="text" class="form-control js-required" name="barrio" id="barrio" >
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="s-text-bold" for="place">Nombre del lugar</label>
                                            <input type="text" class="form-control js-required" name="place" id="place">
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        @if ($checkedNew=="checked")
                            <script>
                                let ckeck = setInterval(() => {
                                    if (document.readyState === 'complete') {
                                        $('#collapseAddNew')
                                        .collapse('show');
                                        clearInterval(ckeck);
                                    }
                                }, 100);
                            </script>
                        @endif
                        <div class="d-flex justify-content-center go-purchase f-R-bold">
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
