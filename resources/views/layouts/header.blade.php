<div class="container">
    <nav class="navbar navbar-expand-lg mb-3">
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" class="navbar-brand"></a>

        {{-- Mobile menu button --}}
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
            <div class="hamburger-toggle">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (Request::segment(1) === '') active @endif" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link @if (Request::segment(1) === 'products-list') active @endif dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Products</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('products-list') }}">Cloud Printer</a></li>
                        <li class="dropend">
                            <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">Receipt Printer</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">80mm Series</a></li>
                                <li><a class="dropdown-item" href="">58mm Series</a></li>
                                <li><a class="dropdown-item" href="">76mm Series</a></li>
                            </ul>
                        </li>
                        <li class="dropend">
                            <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">Label Printer</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                <li><a class="dropdown-item" href=""> Third level 3</a></li>
                                <li><a class="dropdown-item" href=""> Third level 4</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Mobile Printer</a></li>
                        <li><a class="dropdown-item" href="#">Other Printer</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::segment(1) == 'news') active @endif"
                        href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::segment(1) == 'about') active @endif" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::segment(1) == 'contact') active @endif" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::segment(1) == 'drivers') active @endif" href="{{ route('drivers') }}">Drivers</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"><i class="fa-regular fa-globe"></i> Lang</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">EN</a></li>
                        <li><a href="" class="dropdown-item">RU</a></li>
                    </ul>
                </li>
                <li class="nav-item" id="changeTheme">
                    <a class="nav-link" href="#" id="theme-toggle"><i class="fa-solid fa-sun-bright"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded-2 bg-gradient-info dark-text-dark" href="tel:+8613910998888">
                        <i class="fa-solid fa-phone font-sm"></i> +86 139 1099 8888</a>
                </li>
            </ul>
        </div>
    </nav>

    @include('components.global.search')
</div>
