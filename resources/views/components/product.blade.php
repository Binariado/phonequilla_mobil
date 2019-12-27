
@foreach ($Catproduct as $cat_prod)
<div data-id="{{$cat_prod->id}}" class="m-2 separator-product js-view-product">
    <div class="content-product d-flex justify-content-between">
        <a href="{{url("/product/".$cat_prod->id)}}">
            <div class="d-flex align-items-center">
                <div class="img-prod">
                    <div>
                        <img class="lazy" data-src="{{"https://iphonequilla.com.co/iphonequilla/public/storage/".$cat_prod->img}}" src="" alt="">
                    </div>
                </div>
            </div>
        </a>

        <div class="details-prod d-flex flex-column">
            <div class="title-prod roboto-bold t-color2">
                {{$cat_prod->name}}
            </div>
            <div class="price-before">
                <div class="s-text t-color2">
                    Antes
                </div>
                <div class="price">
                    {{$cat_prod->price}}
                </div>
            </div>
            <div class="price-now">
                <div class="s-text t-color2">
                    Ahora
                </div>
                <div class="price t-bold">
                    {{$cat_prod->discount}}
                </div>
            </div>
            <div class="colors">
                <div class="s-text-colors">
                    Colores disponibles
                </div>
                <div class="items-colors d-flex justify-content-center">
                    @php
                        $colors=explode(";",$cat_prod->ProductDetail->color);
                    @endphp
                    @foreach ($colors as $c_l)
                        <a>
                            <div style="background-color:{{$c_l}};" class="rounded-circle shadow">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="d-flex property">
                <div class="gb">
                    <span class="t-bold">{{$cat_prod->ProductDetail->storage}} gb</span>
                </div>
                <div class="hr-vertical">
                    <hr>
                </div>
                <div class="camara">
                    <span class="t-bold">{{$cat_prod->ProductDetail->mpx}} mpx</span>
                </div>
                <div class="hr-vertical">
                    <hr>
                </div>
                <div class="size">
                    <span class="t-bold">{{$cat_prod->ProductDetail->pulgada}}”</span>
                </div>
            </div>
            <div class="btn-add">
                <a data-color="1" data-id="{{$cat_prod->id}}" class="btn roboto-bold js-addProduct">
                    Agregar
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach
