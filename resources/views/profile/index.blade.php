
@extends('template.layout')


@section('title', 'IphoneQuilla')
@section('content')
<nav class="head" id="head">
    @component('components.head')

    @endcomponent
</nav>
<div id="profile-section" class="profile-section">
    <div class="container p-4">
        <div class="d-flex justify-content-center flex-row ">
            <div class="d-flex justify-content-center menu-profile">
                <div class="m-c mr-4">
                    <div class="d-flex flex-column item-profile-m p-4">
                        <div class="title t-color5 mb-3">
                            Micuenta
                        </div>
                        <div class="d-flex flex-column">
                            <div data-target="#orders" class="d-flex align-items-center justify-content-between itmen-m js-itmen-m p-3 active">
                                <div class="text-icon d-flex align-items-center">
                                    <i class="icon-ic_receipt_24px"></i> Mis órdenes
                                </div>
                                <i class="fas fa-angle-right icont-active"></i>
                            </div>
                            <div data-target="#address" class="d-flex align-items-center justify-content-between itmen-m js-itmen-m p-3">
                                <div class="text-icon d-flex align-items-center">
                                    <i class="icon-ic_pin_drop_24px"></i> Direcciones guardadas
                                </div>
                                <i class="fas fa-angle-right icont-active"></i>
                            </div>
                            <div data-target="#data-persons" class="d-flex align-items-center justify-content-between itmen-m js-itmen-m p-3">
                                 <div class="text-icon d-flex align-items-center">
                                    <i class="icon-ic_account_box_24px"></i> Datos personales
                                </div>
                                <i class="fas fa-angle-right icont-active"></i>
                            </div>
                            <div data-target="#key" class="d-flex align-items-center justify-content-between itmen-m js-itmen-m p-3">
                                <div class="text-icon d-flex align-items-center">
                                    <i class="icon-ic_fingerprint_24px"></i> Cambiar clave
                                </div>
                                <i class="fas fa-angle-right icont-active"></i>
                            </div>
                            <div data-target="#coupons" class="d-flex align-items-center justify-content-between itmen-m js-itmen-m p-3">
                                <div class="text-icon d-flex align-items-center">
                                    <i class="icon-ic_turned_in_24px"></i> Cupones de descuento
                                </div>
                                <i class="fas fa-angle-right icont-active"></i>
                            </div>
                            <div data-target="#wishes" class="d-flex align-items-center justify-content-between itmen-m js-itmen-m p-3">
                                <div class="text-icon d-flex align-items-center">
                                    <i class="icon-ic_favorite_border_24px"></i> Lista de deseos
                                </div>
                                <i class="fas fa-angle-right icont-active"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex content-profile">
                @php
                    $Arrprofile=["orders","address","data-persons","key","coupons","wishes"]
                @endphp

                <div class="tab-profile m-c active" id="orders">
                    <div class="item-profile-c p-4">
                        <div class="product-shopping">
                            {{-- @foreach ($cartItems as $prod)
                                @component('main.profile.shopping-product',[
                                    'prod'=>$prod
                                ])
                                @endcomponent
                            @endforeach --}}
                        </div>
                    </div>
                </div>

                <div class="tab-profile m-c" id="address">
                    <div class="item-profile-c p-4">


                        @component('profile.components.new-address',[
                            'departments'=>$departments
                        ])

                        @endcomponent
                    </div>
                </div>

                <div class="tab-profile m-c" id="data-persons">
                    <div class="item-profile-c p-4">
                        @component('profile.components.data-person',[
                            'departments'=>$departments,
                            'Document_Type'=>$Document_Type,
                            'Countries'=>$Countries,
                            "user_detail"=>$user_detail,
                        ])
                        @endcomponent
                    </div>
                </div>

                <div class="tab-profile m-c" id="key">
                    <div class="item-profile-c p-4">
                            @component('profile.components.new-password')

                            @endcomponent
                    </div>
                </div>

                <div class="tab-profile m-c" id="coupons">
                    <div class="item-profile-c  p-4">
                        @component('profile.components.redeem-points')

                        @endcomponent
                    </div>
                </div>

                <div class="tab-profile m-c" id="wishes">
                    <div class="item-profile-c pt-4 pb-4">
                        @component('profile.components.wish-list',[
                            'favorites'=>$favorites,
                        ])
                        @endcomponent
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
// document
// .querySelector(".menu-bottom-mobile")
// .setAttribute("style","display: none !important;");
</script>
<div class="menu-bottom-mobile-profile">
    <div class="content-menu-b d-flex justify-content-around">
            {{-- @foreach ($sections_main as $cat)
            <div class="carousel-cell">
                <a class="item-m-b d-flex align-items-center js-section-nav1" data-toggle="tab" href="#{{strtolower($cat->name)}}" role="tab" aria-controls="{{strtolower($cat->name)}}" aria-selected="true">
                    <div class="d-flex flex-column text-center ">
                        <i data-iconm="{{$cat->name}}" class=""></i>
                        <span>{{$cat->name}}</span>
                    </div>
                </a>
            </div>
            @endforeach --}}

        <div class="carousel-cell">
            <a data-target="#orders" class="item-m-b d-flex align-items-center js-itmen-m active">
                <div class="d-flex flex-column text-center">
                    <i class="icon-ic_receipt_24px"></i>
                </div>
            </a>
        </div>

        <div class="carousel-cell">
            <a data-target="#address" class="item-m-b d-flex align-items-center js-itmen-m">
                <div class="d-flex flex-column text-center">
                    <i class="icon-ic_pin_drop_24px"></i>
                </div>
            </a>
        </div>

        <div class="carousel-cell">
            <a data-target="#data-persons" class="item-m-b d-flex align-items-center js-itmen-m">
                <div class="d-flex flex-column text-center">
                    <i class="icon-ic_account_box_24px"></i>
                </div>
            </a>
        </div>

        <div class="carousel-cell">
            <a data-target="#key" class="item-m-b d-flex align-items-center js-itmen-m">
                <div class="d-flex flex-column text-center">
                    <i class="icon-ic_fingerprint_24px"></i>
                </div>
            </a>
        </div>

        <div class="carousel-cell">
            <a data-target="#coupons" class="item-m-b d-flex align-items-center js-itmen-m">
                <div class="d-flex flex-column text-center">
                    <i class="icon-ic_turned_in_24px"></i>
                </div>
            </a>
        </div>

        <div class="carousel-cell">
            <a data-target="#wishes" class="item-m-b d-flex align-items-center js-itmen-m">
                <div class="d-flex flex-column text-center">
                    <i class="icon-ic_favorite_border_24px"></i>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection








