@extends('app')
@section('title', 'Xprinter - Home')
@section('content')
    <section class="index-section">
        @include('components.home.slider')
        <div class="container">
            @include('components.home.products')
            @include('components.home.services')
            @include('components.home.certificates')
            @include('components.home.news')
        </div>
    </section>
@endsection