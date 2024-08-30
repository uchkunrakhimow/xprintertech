<section class="news-component mt-5xl">
    <div class="text-center font-500 mb-4">
        <h1>News</h1>
        <p>Keep an eye on our latest news</p>
    </div>
    <div class="swiper newsSlider">
        <div class="swiper-wrapper">
            @for ($i = 0; $i < 10; $i++)
                <div class="swiper-slide">
                    <a href="/">
                        <div class="news-card">
                            <div class="news-card-img position-relative overflow-hidden">
                                <img src="{{ asset('img/about/1.jpg') }}" class="card-img-top" alt="Image not found">
                            </div>
                            <div class="title">
                                Xprinter New POS Solutions Debut in NRF 2020
                                <div class="text-primary">
                                    2022-12-10
                                </div>
                            </div>

                            <div class="description">
                                Computex 2019 was successfully held in Taipei from 28th
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
</section>
