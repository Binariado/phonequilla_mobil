@extends('template.layout')

@section('title', 'shopping')
@section('content')
    <nav class="head" id="head">
        @component('components.head')

        @endcomponent
    </nav>
    <div class="tab-content content-shopping" id="shopping">
        <div class="container">
            <section class="multi_step_form pt-5">
                <div id="msform">

                        <!-- progressbar -->
                    <style class="js-step">
                    </style>

                    <ul class="progressbar" id="progressbar">
                        <div class="item-bar view-true-section">
                            01
                            <li>
                                <span>
                                    <p>Carrito de compras</p>
                                </span>
                            </li>

                        </div>
                        <div class="item-bar view-true-section-two">
                            02
                            <li>
                                <span>
                                    <p>Detalles de envío</p>
                                </span>
                            </li>
                        </div>
                         <div class="item-bar">
                            03
                            <li>
                                <span>
                                    <p>Dirección de envío</p>
                                </span>
                            </li>
                         </div>
                         <div class="item-bar latest">
                             04
                            <li>
                                <span>
                                    <p>Información de pago</p>
                                </span>
                            </li>
                         </div>
                         {{-- <div class="item-bar disabled">
                                ""
                               <li>
                                   <span>
                                       <p></p>
                                   </span>
                               </li>
                        </div> --}}
                    </ul>

                    <div class="d-flex justify-content-center">

                        <div class="js-field-change">
                            <div data-step="1" class="product-shopping w-sho js-step-action">
                                @foreach ($cartContent as $cat)
                                    @component('cart.shopping-product',[
                                        'cart'=>$cat,
                                        'prod'=>$product->where("id",$cat->id)->first()
                                    ])
                                    @endcomponent
                                @endforeach
                            </div>
                        </div>

                    </div>

                    {{-- <div class="order-summary">

                    </div> --}}

                    <div class="d-flex justify-content-center go-purchase btn-init-purchases js-init-go-purchase">
                            {{-- href="{{url("/shopping_cart/shipping-cart")}}" --}}
                        <button class="btn js-purchase-field pl-5 pr-5 f-R-bold" role="button" disabled>
                            Ir a comprar
                        </button>
                    </div>
                </div>


            </section>
        </div>
    </div>
@endsection
