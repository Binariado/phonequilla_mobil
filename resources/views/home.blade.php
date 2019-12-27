@extends('template.layout')


@section('title', 'IphoneQuilla')
@section('content')
    <section id="home">
        <nav class="head" id="head">
            @component('components.head')

            @endcomponent
        </nav>
        <div class="">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset("/img/fondos/slider1.jpg")}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("/img/fondos/slider2.jpg")}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("/img/fondos/slider.jpg")}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-menu">
            @component('components.section',[
                "category"=>$category
            ])

            @endcomponent
        </div>
        <div id="content-prod-section" class="container">
            @php
                $view_sect=$category->count()>0 ? $category[0]->name:null;
            @endphp
            @foreach ($category as $cat_item)
                <div id="{{$cat_item->name}}" class="section-product row mt-5 mb-5 nav-tap {{$view_sect==$cat_item->name? 'show':''}}">
                    @component('components.product',[
                        "Catproduct"=>$cat_item->Product
                    ])
                    @endcomponent
                </div>
            @endforeach

        </div>
        <div class="container mb-5">
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
    </section>
@endsection

