@extends('template.layout')


@section('title', 'IphoneQuilla')
@section('content')
<nav class="head" id="head">
    @component('components.head')

    @endcomponent
</nav>
<section id="view-product" class="container">
<div class="content-detail-product">
    <div class="d-flex content-detail-Viewproduct">
        <div class="item-viewProd content-imgview">
            <div class="main-product-detail">
                <div class="ImgProd carousel-cell">
                    <div>
                        <img class="lazy-c"
                            src="{{"https://iphonequilla.com.co/storage/".$product->img}}">
                    </div>
                </div>
                <div class="ImgProd carousel-cell">
                    <div>
                        <img class="lazy-c"
                            src="{{"https://iphonequilla.com.co/storage/".$product->img}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="item-viewProd details-prod">
            <div class="prod-title roboto-bold">
                <span>{{$product->name}}</span>
            </div>
            @php
               $rowid= 1;//isset($cartItem->rowId)? $cartItem->rowId:null;
               $qty= 1; //isset($cartItem->qty)? $cartItem->qty:0;
            @endphp
            <div class="d-flex content-text-icon view-none">
                <div>
                    <div class="row row-m-none">
                        <div class="mr-5 roboto-bold t-color2">Cantidad</div>
                        <i class="fas fa-minus incon-qty js-qty-detail"></i>
                        <input data-rowid="{{$rowid}}" data-id="{{$product->id}}"  class="f-M-bold js-qty-detail roboto-bold" type="text" name="qty" id="qty" value="{{ $qty }}">
                        <i class="fas fa-plus incon-qty js-qty-detail"></i>
                    </div>
                    <div class="view-separator">
                        <hr class="sepatator-hr">
                    </div>
                </div>
            </div>
            <div class="d-flex content-text-icon mt-3">

                <div>
                    <div class="row row-m-none">
                        <div class="mr-5 roboto-bold t-color2 pr-3 d-flex align-items-center">Seleccionar color</div>
                        <div class="view-colors d-flex align-items-center">
                            <div style=" background-color: #E44652;">
                            </div>
                            <div style=" background-color: #3FC7B8;">
                            </div>
                        </div>
                    </div>
                    <div class="view-separator">
                        <hr class="sepatator-hr">
                    </div>
                    <div class="row row-m-none">
                        <div class="d-flex justify-content-between roboto-bold t-color6 price-view">
                            <span class="mr-5">${{$product->price==null?$product->discount:$product->price}}</span>
                            <div class="d-flex align-items-center">
                                <div class="d-flex">
                                    <a class="btn roboto-bold pl-3 pr-3 d-flex align-items-center mr-2 bg-color1 text-white rounded-pill">
                                        COMPRAR
                                    </a>
                                    <i class="fas fa-share-alt share-icon rounded-pill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-separator">
                        <hr class="sepatator-hr">
                    </div>
                    <div class="row row-m-none d-flex flex-column">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-desc-tab" data-toggle="pill" href="#pills-desc" role="tab" aria-controls="pills-desc" aria-selected="true">Descripción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">Información de envío</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane roboto-regular t-color2 fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">
                            {{$product->ProductDetail->description}}
                        </div>
                        <div class="tab-pane roboto-regular t-color2 fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                                {{$product->ProductDetail->shipping_info}}
                        </div>
                    </div>
                </div>
                <div class="view-separator">
                    <hr class="sepatator-hr">
                </div>
                <div style="font-size: 14px;" class="roboto-regular t-color2 pl-2 pr-2">
                    Fecha estimada de entrega 27 de octubre del 2019
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-5">
    <div class="d-flex justify-content-end align-items-center">
        <div>
            <img class="d-block w-100 img-fluid" src="{{asset("/img/fondos/banner1.svg")}}" alt="">
        </div>
        <div class="caption-banner pr-5">
            <div class="d-flex flex-column">
                <div style="font-size:30px;" class="banner-title t-color3 roboto-light text-right">
                    Págalo fácil, llévalo a <span class="roboto-bold">crédito</span>
                </div>
                <div style="font-size:18px;" class="banner-Subtitle text-right roboto-light t-color4">
                    Financiación rápida para que compres lo que quieras
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <a class="btn bg-color3 rounded-pill roboto-bold" href="">
                            Quiero saber más
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-product row mb-5">
        @component('components.product',[
            "Catproduct"=>$product_
        ])
        @endcomponent
</div>
</section>
@endsection
