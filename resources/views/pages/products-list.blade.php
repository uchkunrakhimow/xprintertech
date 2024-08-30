@extends('app')
@section('title', 'Xprinter - Products')
@section('content')
   <section class="product-section">
    @include('components.global.banner')
        <div class="container mt-5xl">
            @include('components.global.navlink')
            <div class="row">
                <div class="lg-none col-xl-3 col-xxl-3 left">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a class="hover-list-item" href="/">Cloud Printer</a>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="/"><i class="fa-regular fa-chevron-down fz-14"></i> Receipt
                                Printer</a>
                            <ul class="list-group2">

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        80mm Series </a>
                                </li>

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        58mm Series </a>
                                </li>

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        76mm Series </a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="/"><i class="fa-regular fa-chevron-down fz-14"></i> Label
                                Printer</a>
                            <ul class="list-group2">

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        2 Inch / 58mm Series </a>
                                </li>

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        3 Inch / 80mm Series </a>
                                </li>

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        4 Inch Series </a>
                                </li>

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        Thermal Transfer Series
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="/"><i class="fa-regular fa-chevron-down fz-14"></i> Mobile
                                Printer</a>
                            <ul class="list-group2">

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        Mobile receipt printer
                                    </a>
                                </li>

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        Mobile Smart Printer </a>
                                </li>

                                <li class="i2 list-group-item">
                                    <a class="" href="/">
                                        Mobile label printer </a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="/">Handheld POS Printer</a>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="/">Panel printer</a>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="/">Dot Matrix Printer</a>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="/">Accessories</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 col-xxl-9 right">
                    <div class="row">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="" class="card card-product-grid border-0">
                                    <div class="img-wrap">
                                        <img src="{{ asset('img/products/1.jpg') }}" alt="1">
                                    </div>
                                    <figcaption class="card-product-info">
                                        <p href="" class="title">XP-Q302F</p>
                                    </figcaption>
                                </a>
                            </div>
                        @endfor
                        @include('components.global.pagination')
                    </div>
                </div>
            </div>

        </div>
   </section>
@endsection
