<div class="product-shopping-item">
    <div class="d-flex bd-highlight imten-prod">

        <div class="bd-highlight img-s-p">
            <div class="img-shopping-prod">
                <div>
                    <img src="{{$prod->img}}" alt="">
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column justify-content-center shopping-details">
            <div class="">
                <div class="d-flex dx-shopping">
                    <div class="shopping-c shopping-text">
                        <div class="d-flex flex-column bd-highlight">
                            <div class="bd-highlight">
                                <p class="s-title">{{$prod->Category->name}}</p>
                                <p class="s-subTitle">{{$prod->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="shopping-c shopping-text">
                        <div class="d-flex flex-column bd-highlight">
                            <div class="bd-highlight">
                                @php
                                    $discount=$prod->discount;
                                @endphp
                                <p class="s-title text-center">
                                    @if ($prod->discount!=null)
                                        ${{$discount}}&nbsp;&nbsp;
                                        <span>{{$prod->price}}</span></p>
                                    @else
                                        ${{$prod->price}}
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex shopping-option view-web">
                    <div class="d-flex flex-row shopping-o">
                        <div class="bd-highlight item-bottom s-o-item">
                            <div class="d-flex s-text"><i class="fas fa-plane-departure"></i>Envios a todo el país</div>
                        </div>
                        <div class="bd-highlight item-bottom s-o-item">
                            <div class="d-flex s-text"><i class="fas fa-map-marker-alt"></i>Retiro en tienda</div>
                        </div>
                        <div class="bd-highlight item-bottom s-o-item icon-favorite-mobile">
                                {{-- href="{{ route('favorite.edit', $prod->id) }}" --}}
                            <a >
                                <div class="d-flex s-text"><i class="far fa-heart"></i>Guardar en favoritos</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column justify-content-center bd-highlight s-delete">
            <div class="d-flex s-d-item">
                <div class="shopping-input view-web">
                    <input data-id="{{$prod->id}}" class="js-qty" type="number" name="qty" id="qty" value="{{ $cart->quantity }}">
                </div>
                <div class="shopping-delete">
                    {{-- {!! Form::open(['route' => ['cart.destroy', $prod->rowId], 'method' => 'POST']) !!}
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="fas fa-trash-alt"></button>
                    {!! Form::close() !!} --}}
                    <button type="submit" class="fas fa-trash-alt"></button>
                </div>
            </div>

            <div class="bd-highlight item-bottom s-o-item icon-favorite-web">
                <div class="s-text d-flex">
                    {{-- <a href="{{ route('favorite.edit', $prod->id) }}" > --}}
                    <a>
                        <i class="far fa-heart"></i>
                    </a>
                    <span>Guardar en favoritos</span>
                </div>
            </div>
        </div>
    </div>

    <div class="view-shopping">
        <div class="d-flex justify-content-between available f-M-regular">
            Disponible
            <div class="shopping-input">
                <input data-id="{{$prod->id}}" class="js-qty" type="number" name="qty" id="qty" value="{{ $prod->quantity }}">
            </div>
        </div>
    </div>


    <div>
        <hr>
    </div>

    <div class="d-flex shopping-option mobile-option">
        <div class="d-flex flex-row shopping-o">
            <div class="bd-highlight item-bottom s-o-item">
                <div class="d-flex s-text"><i class="fas fa-plane-departure"></i>Envios a todo el país</div>
            </div>
            <div class="bd-highlight item-bottom s-o-item">
                <div class="d-flex s-text"><i class="fas fa-map-marker-alt"></i>Retiro en tienda</div>
            </div>
            <div class="bd-highlight item-bottom s-o-item icon-favorite-mobile">
                {{-- <a href="{{ route('favorite.edit', $prod->id) }}" > --}}
                <a>
                    <div class="d-flex s-text"><i class="far fa-heart"></i>Guardar en favoritos</div>
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-center bd-highlight mb-3 date date-mobile">
        <div class="bd-highlight s-text s-text-bold">Fecha estimada de entrega:&nbsp;</div>
        <div class="bd-highlight s-text">28 de marzo de 2019, 15 días hábiles</div>
    </div>

</div>
