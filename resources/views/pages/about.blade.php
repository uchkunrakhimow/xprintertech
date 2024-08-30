@extends('app')
@section('title', 'Xprinter - About')
@section('content')
    <section class="about-section">
        @include('components.global.banner')
        <div class="container mt-5xl">
            @include('components.global.navlink')

            <div class="row">
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <h4 class="title">Company Profile</h4>
                    <p class="description">
                        Xprinter Group is a leading international printer enterprise integrating R&D, production, sales, and service. The product lines include thermal receipt printer, barcode printer, dot matrix printer, portable printer, kiosk printer, Android printer, cloud printer, personal/home smart printers, and printer-related core components.
                    </p>

                    <h4 class="title mt-5">Brand Advantage</h4>
                    <p class="description">
                        Xprinter products cover more than 130 countries and regions in the world. According to the data of POS industry professional magazine IDC for five consecutive years from 2016 to 2020, Xprinter products shipping quantity in the field of thermal printers ranked first in China, second in the world, and is the only large-scale professional printer manufacturer and service provider in the industry.
                    </p>

                    <h4 class="title mt-5">Advantage of R&D Capability</h4>
                    <p class="description">
                        Xprinter have been focusing on the printer industry for nearly 20 years, own many core technologies. Such as:

                        <ul>
                            <li>Own precision cutter production process.</li>
                            <li>Own precision algorithm to drive motor.</li>
                            <li>Own precision algorithm to build sensor campatibility.</li>
                        </ul>

                        With more than 150 rich product lines, and obtained more than 100 patents and international certifications.
                    </p>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <img src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/16697085372540.jpg?imageView2/2/w/915/q/75/format/webp" alt="Image not found" class="img-thumbnail">
                </div>
            </div>


            <div class="swiper aboutSlider mt-5">
                <div class="swiper-wrapper">
                  @for ($i = 0; $i < 10; $i++)
                    <div class="swiper-slide">
                      <img class="rounded" src="{{ asset('img/about/1.jpg') }}" alt="Image not found">
                    </div>
                  @endfor
        </div>
    </section>
@endsection
