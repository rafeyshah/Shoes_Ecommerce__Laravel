<div class="overlay-menu" id="overlay-menu">
    <a href="javascript:void(0)" class="overlay-menu__item" onclick="closeNav()"><img src="assets/build/img/menu-close.svg" alt="Close" class="overlay-menu__closebtn"></a>
    <a href="{{route('index')}}" class="overlay-menu__item">Home</a>
    <a href="#sale" onclick="closeNav()" class="overlay-menu__item">Sale</a>
    <a href="#popular" onclick="closeNav()" class="overlay-menu__item">Products</a>
    <a href="#blog" onclick="closeNav()" class="overlay-menu__item">Blog</a>
    <a href="#footer" onclick="closeNav()" class="overlay-menu__item">About</a>
    <a href="{{route('contact')}}" onclick="closeNav()" class="overlay-menu__item">Contact us</a>
</div>
<div class="wrapper">
    <section class="slider">
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <img src="assets/build/img/logo.png" class="main-nav__logo" alt="Shoe Shop logo">
                    <a href="{{route('index')}}" class="main-nav__logotext">Sho<mark class="main-nav__logotext-color">e</mark> Shop</a>
                </li>

                <li class="main-nav__items">
                    @if (Route::has('login'))
                    <div style="margin-top: -10%;margin-right: 40px;display: flex;align-items: center;" class="button">
                        @auth
                        <a class="nav-link icon" href="{{url('/showcart')}}"><i class="fas fa-shopping-cart"></i>
                            Cart[{{$count}}]</a>
                        <x-app-layout>
                        </x-app-layout>

                        @else
                        <a href="{{ route('login') }}" style="border: 2px solid #fff; color: #fff; margin-right:10px;" class="button__text">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="border: 2px solid #fff; color: #fff" class="button__text">Sign Up</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </li>

                <li class="main-nav__item">
                    <a  class="main-nav__link" onclick="openNav()"><img src="assets/build/img/menu.svg" class="main-nav__btn"></a>
                </li>
            </ul>
        </nav>