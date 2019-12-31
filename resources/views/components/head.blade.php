<ul class="nav container justify-content-around">
    <div class="d-flex content-nav item-h-left">
        <li class="nav-item">
            <a class="nav-link active" href={{url("/")}}>
                    <img src="{{asset('img/logos/logo.png')}}" alt="">
            </a>
        </li>
    </div>
    {{-- @dd(Cart::getContent()->count()) --}}
    <div class="d-flex content-nav item-h-center">
        <li class="nav-item d-flex align-items-center">
            <div class="nav-link d-flex align-items-center poppu-menu">
                <i class="icon-Grupo-5" aria-hidden="true"></i>
            </div>
        </li>
        <li class="nav-item content-searchbar">
            <div class="nav-link">
                <div class="searchbar d-flex justify-content-center">
                    <input class="search_input1" type="text" name="" placeholder="¿Qué estas buscando?">
                    <a href="#" class="search_icon d-flex align-items-center justify-content-center">
                        <i class="icon-Grupo-7"></i>
                    </a>
                </div>
            </div>
        </li>
    </div>

    <div class="d-flex justify-content-around content-nav item-h-rigth">
        <li class="nav-item">
            <a class="nav-link t-color1" href="#">Escribenos <i class="icon-whatsapp"></i></a>
        </li>
        @if (Auth::check())
            {{-- @dd(Auth::user()) --}}
            <li class="nav-item account">
                <a class="nav-link t-color2 dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}
                    @php

                        // $c1 = array(128,175,27);//Color 1
                        // $c2 = array(255,255,140);//Color 2
                        // $nc = 5;//Number of colors to display.
                        // $dc = array(($c2[0]-$c1[0])/($nc-1),($c2[1]-$c1[1])/($nc-1),($c2[2]-$c1[2])/($nc-1));//Step between colors

                        // for ($i=0;$i<$nc;$i++){
                        //     echo '<div style="width:200px;height:50px;background-color:rgb('.round($c1[0]+$dc[0]*$i).','.round($c1[1]+$dc[1]*$i).','.round($c1[2]+$dc[2]*$i).');">'.$i.'</div>';//Output
                        // }
                    @endphp
                    <div class="avatar rounded-circle d-flex align-items-center justify-content-center">{{str_split(Auth::user()->name)[0]}}</div>
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" href="/users/profile">
                        {{ __('Perfil') }}
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @else
            <li class="nav-item account">
                <a class="nav-link t-color2" href="{{url("/login")}}">Mi cuenta <i class="icon-Grupo-206"></i></a>
            </li>
        @endif
         <li class="nav-item cart">
            <a class="nav-link t-color2" href={{url("/shopping/cart")}}>
                Compras <i class="icon-Grupo-29"></i>
                <div class="cart-qty rounded-circle">{{Cart::getContent()->count()}}</div>
            </a>
        </li>
    </div>
</ul>
