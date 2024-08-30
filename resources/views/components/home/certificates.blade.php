<div class="certificates-component mt-5xl">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <div class="lg-img">
                <div class="lg-img-div">
                    <img class="img" alt="lg-img" src="{{ asset('img/certificates/1.png') }}">
                    <h3 class="lg-img-title">FCC-of-barcode--printer</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <div class="p-4">
                <h2 class="title mt-5xl">OUR CERTIFICATE</h2>
                <div class="description">
                    Our
                    products
                    have obtained CCC, CE, FCC, RoHS, KC, SAA, BIS, BSMI
                    certifications for safety. By producing high-reliability
                    quality
                    printers with competitive prices, we are now serving over
                    200
                    countries and regions worldwide.
{{--                    </section>--}}
                </div>
                <div class="cert-width">
                    <div class="img-group">
                        @for ($i = 0; $i < 9; $i++)
                        <div class="img-list">
                            <a class="img-block" href="/img/certificates/1.png" data-fancybox="images" data-width=""
                                data-height="">
                                <img class="img-thumbnail" alt="{{ $i }}" src="{{ asset('img/certificates/1.png') }}" />
                            </a>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
