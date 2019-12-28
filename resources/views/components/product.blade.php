
@foreach ($Catproduct as $cat_prod)
<div data-id="{{$cat_prod->id}}" class="m-2 separator-product js-view-product">
    <div class="content-product d-flex justify-content-between">
        <a class="href_img d-flex align-items-center" href="{{url("/product/".$cat_prod->id)}}">
            <div class="d-flex align-items-center">
                <div class="img-prod">
                    <div>
                        <img class="lazy" data-src="{{"https://iphonequilla.com.co/storage/".$cat_prod->img}}" src="" alt="">
                    </div>
                </div>
            </div>
        </a>

        <div class="details-prod d-flex align-items-center">
            <div class="content-details-prod d-flex flex-column">
                <div class="title-prod roboto-bold t-color2">
                    {{$cat_prod->name}}
                </div>
                @php
                    setlocale(LC_MONETARY, 'es_CO');
                @endphp
                <div class="content-price d-flex flex-column align-items-center justify-content-center">
                @if (
                    $cat_prod->price==null || $cat_prod->price=="" ||
                    $cat_prod->discount==null || $cat_prod->discount==""
                    )
                    <div class="price-before">
                        <div class="s-text t-color2">
                            Precio
                        </div>
                        <div class="price">
                            <div class="price roboto-bold">
                                @if ($cat_prod->price == null || $cat_prod->price=="")
                                    ${{number_format($cat_prod->discount)}}
                                @else
                                    ${{number_format($cat_prod->price)}}
                                @endif
                            </div>
                        </div>
                    </div>
                @else
                    <div class="price-before">
                        <div class="s-text t-color2">
                            Antes
                        </div>
                        <div class="price d-flex justify-content-center">
                            <div class="roboto-regular">
                                ${{number_format($cat_prod->price)}}
                                <div class="hr-vertical_discount">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-now">
                        <div class="s-text t-color2">
                            Ahora
                        </div>
                        <div class="price roboto-bold">
                            ${{number_format($cat_prod->discount)}}
                        </div>
                    </div>
                @endif
                </div>
                @php
                    $colors_=explode(";",$cat_prod->ProductDetail->color);
                    $colors=explode(";",$cat_prod->ProductDetail->color);
                    $colors=[];
                    for ($i=0; $i < count($colors_); $i++) {
                        if ($colors_[$i]!="") {
                            $colors[$i]=$colors_[$i];
                        }
                    }
                @endphp
                @if (count($colors)>0)
                    <div class="colors">
                        <div class="s-text-colors">
                            Colores disponibles
                        </div>
                        <div class="items-colors d-flex justify-content-center">
                            @foreach ($colors as $c_l)
                                <a>
                                    @if (ctype_xdigit($c_l))
                                        <div style="background-color:#{{$c_l}};" class="rounded-circle">
                                        </div>
                                    @else
                                        <div style="background-color:{{$c_l}};" class="rounded-circle">
                                        </div>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
                @php
                    $storage_=$cat_prod->ProductDetail->storage;
                    $mpx=$cat_prod->ProductDetail->mpx;
                    $pulgada=$cat_prod->ProductDetail->pulgada;
                @endphp
                @if ($storage_!="" || $mpx!="" || $pulgada!="")
                    <div class="d-flex property justify-content-center">
                        @if ($storage_!="")
                            <div class="gb">
                                <span class="t-bold">{{$cat_prod->ProductDetail->storage}} gb</span>
                            </div>
                            <div class="hr-vertical">
                                <hr>
                            </div>
                        @endif
                        @if ($mpx!="")
                            <div class="camara">
                                <span class="t-bold">{{$cat_prod->ProductDetail->mpx}} mpx</span>
                            </div>
                            <div class="hr-vertical">
                                <hr>
                            </div>
                        @endif
                        @if ($pulgada!="")
                            <div class="size">
                                <span class="t-bold">{{$cat_prod->ProductDetail->pulgada}}”</span>
                            </div>
                        @endif
                    </div>
                @endif
                <div class="btn-add mt-2">
                    <a data-color="1" data-id="{{$cat_prod->id}}" class="btn roboto-bold js-addProduct">
                        Agregar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
