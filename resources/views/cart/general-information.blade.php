<div class="general-information">
    <div class="d-flex flex-column">
        <div class="prod-pusrcha-details">
            <h4 class="bd-highlight shopping-title">Resumen de tu orden</h4>
            <div class="sub-text-head d-flex flex-row bd-highlight">
                <p class="p-h-t1 d-flex align-items-end justify-content-start">
                    ({{ Cart::getContent()->count() }}) productos
                </p>
                <p class="p-h-t2 d-flex align-items-end justify-content-end">
                        ${{ Cart::getTotal() }}
                </p>
            </div>

            <div style="cursor: pointer;" class="container bd-highligh sub-text-head js-detailTarget" data-toggle="collapse" data-target="#generalDetailCollapse" aria-expanded="false" aria-controls="generalDetailCollapse">
                <p class="p-h-t1 text-left" data-text="mostrar detalles">Ocultar detalles</p>
            </div>

            <div class="collapse" id="generalDetailCollapse">
                <div class="bd-highlight shopping-text">
                    {{--  @foreach ($cartItems as $purItem)
                        <div class="d-flex pur-item">
                            <div class="d-flex align-items-center bd-highlight img-s-p">
                                <div class="img-shopping-prod">
                                    <div>
                                    <img src="http://localhost:8000/storage/images/product/5XZ88PqGTQYSDsnIzb1KcIWnwcaFSWCqZIDMKsa9.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column bd-highlight">
                                <p class="bd-highlight s-title">{{$purItem->Brand->name}}</p>
                                <div class="bd-highlight s-text1" >{{$purItem->name}}</div>
                                <div class="d-flex flex-column bd-highlight">
                                    <p class="s-text1" style="font-size:13px">REF: </p>
                                    <p class="s-text1" style="font-size:13px">Cantidad: {{Cart::getContent()->where("id",$purItem->id)>first()->quality}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach  --}}
                    <div class="container bd-highligh sub-text-head">
                        <a href="{{url("/shopping/cart")}}">
                            <p class="p-h-t1 text-left">Editar compra</p>
                        </a>
                    </div>
                </div>
                <div class="container">
                    <hr class="hr-separator">
                </div>

                <div class="sub-text-head d-flex flex-column bd-highlight">
                    <p style="font-size:13px;" class="container p-h-t1 d-flex align-items-end justify-content-start">
                            Con esta compra acumulas saldo:
                    </p>
                    <h2 style="color:#e44652;" class="d-flex justify-content-center s-text-bold-R">
                        ${{ Cart::getTotal() }}
                    </h2>
                </div>
                <div class="container">
                        <hr class="hr-separator">
                </div>

                <div class="container pur-totales">
                    <div class="sub-text-head d-flex flex-row bd-highlight">
                        <p class="p-h-t1 d-flex align-items-end justify-content-start">Subtotal:</p>
                        <p style="font-size:18px;" class="s-text-bold-R d-flex align-items-end justify-content-end">
                                ${{ Cart::getSubTotal() }}
                        </p>
                    </div>

                    <div class="sub-text-head d-flex flex-row bd-highlight">
                        <p class="p-h-t1 d-flex align-items-end justify-content-start">Envio:</p>
                        <p style="font-size:18px;" class="s-text-bold-R d-flex align-items-end justify-content-end">
                                ${{ 0 }}
                        </p>
                    </div>

                    {{--  <div class="sub-text-head d-flex flex-row bd-highlight">
                        <p class="p-h-t1 d-flex align-items-end justify-content-start">Iva:</p>
                        <p style="font-size:18px;" class="s-text-bold-R d-flex align-items-end justify-content-end">
                                ${{ Cart::getContent()->tax() }}
                        </p>
                    </div>  --}}


                    {{--  <div style="display:none !important;" class="sub-text-head d-flex flex-row bd-highlight">
                        <p class="p-h-t1 d-flex align-items-end justify-content-start">Cupon:</p>
                        <p style="font-size:18px;" class="s-text-bold-R d-flex align-items-end justify-content-end js-points">
                        </p>
                    </div>  --}}

                    <div class="sub-text-head d-flex flex-row bd-highlight">
                        <p class="d-flex align-items-end justify-content-start s-text-bold-R">Totales:</p>
                        <p style="font-size:18px;" class="s-text-bold-R d-flex align-items-end justify-content-end js-total">
                                ${{ Cart::getTotal() }}
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
    if(window.detailTarget==undefined){
        window.detailTarget="show";
        document.querySelector("#generalDetailCollapse")
        .classList.add("show")
    }else{
        if(window.detailTarget=="show"){
            document.querySelector("#generalDetailCollapse")
            .classList.add("show")
        }else{
            document.querySelector("#generalDetailCollapse")
            .classList.remove("show")
        }
    }
    document.querySelector(".js-detailTarget")
    .addEventListener("click",function(){
        const d_text = this.querySelector("[data-text]");
        const text = d_text.getAttribute("data-text");
        d_text.setAttribute("data-text",d_text.textContent);
        d_text.textContent=text;
        if(window.detailTarget=="show"){
            window.detailTarget="remove";
        }else{
            window.detailTarget="show";
        }
    });

</script>
