<div class="product-shopping-item">
    <div class="d-flex bd-highlight imten-prod">

        <div class="bd-highlight img-s-p">
            <div class="img-shopping-prod">
                <div>
                    <img src="{{$prod->details->img}}" alt="">
                    {{-- <img src="{{url("storage/".$prod->details->img)}}" alt=""> --}}
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column justify-content-center shopping-details">
            <div class="">
                <div class="d-flex dx-shopping">
                    <div class="shopping-c shopping-text">
                        <div class="d-flex flex-column bd-highlight">
                            <div class="bd-highlight">
                                <p class="s-title">{{$prod->details->trade_mark}}</p>
                                <p class="s-subTitle">{{$prod->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="shopping-c shopping-text">
                        <div class="d-flex flex-column bd-highlight">
                            <div class="bd-highlight">
                                @php
                                    $discount=$prod->details->discount_money;
                                @endphp
                                <p class="s-title text-center">
                                    @if ($prod->details->discount_money!=null)
                                        ${{$discount}}&nbsp;&nbsp;
                                        <span>{{$prod->details->price}}</span></p>
                                    @else
                                        ${{$prod->details->price}}
                                    @endif
                            </div>

                            <div class="bd-highlight view-shopping">
                                <div class="d-flex s-d-item">
                                    <div class="shopping-input d-flex">
                                        <div type="text" class="qty d-flex align-items-center">
                                                {{ $prod->qty == 1 ?
                                                "(".$prod->qty.") ". "unidad":"(".$prod->qty.") ". "unidades"
                                                }}
                                        </div>
                                            {{-- <button type="submit" class="btn btn-sm btn-primary">OK</button> --}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="d-flex shopping-option">
                    <div class="d-flex flex-row shopping-o">
                        <div class="bd-highlight item-bottom s-o-item">
                            <div class="d-flex s-text"><i class="fas fa-plane-departure"></i>Envios a todo el país</div>
                        </div>
                        <div class="bd-highlight item-bottom s-o-item">
                            <div class="d-flex s-text"><i class="fas fa-map-marker-alt"></i>Retiro en tienda</div>
                        </div>
                        <div class="bd-highlight item-bottom s-o-item icon-favorite-mobile">
                            <a href="{{ route('favorite.edit', $prod->id) }}" >
                                <div class="d-flex s-text"><i class="far fa-heart"></i>Guardar en favoritos</div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="d-flex flex-column justify-content-center bd-highlight s-qty view-web">
            <div class="d-flex s-d-item">
                <div class="shopping-input d-flex">
                    <div type="text" class="qty d-flex align-items-center">
                            {{ $prod->qty == 1 ?
                            "(".$prod->qty.") ". "unidad":"(".$prod->qty.") ". "unidades"
                            }}
                    </div>
                        {{-- <button type="submit" class="btn btn-sm btn-primary">OK</button> --}}
                </div>
            </div>
        </div>
    </div>



    <div class="d-flex flex-row justify-content-center bd-highlight mb-3 prifile-text date-mobile">
        <div class="bd-highlight s-text s-text-bold">Fecha estimada de entrega:&nbsp;</div>
        <div class="bd-highlight s-text">28 de marzo de 2019, 15 días hábiles</div>
    </div>

</div>


