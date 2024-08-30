@extends('app')
@section('title', 'Xprinter - Drivers')
@section('content')
    <section class="drivers-section">
        @include('components.global.banner')
        <div class="container mt-5xl">
            @include('components.global.navlink')
            <div class="row">

                @for ($i = 0; $i < 10; $i++)
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
                        <div class="card mb-4">
                            <div class="view overlay">
                                <img class="card-img-top" src="{{ asset('img/drivers/1.jpg') }}"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <p class="card-text">4 Barcode 2022.1 M-3 include(2-3-4inch) neutral driver</p>
                                <a href="" class="btn btn-primary">Download</a>

                            </div>

                        </div>
                    </div>
                @endfor

            </div>
            @include('components.global.pagination');
        </div>
    </section>
@endsection
