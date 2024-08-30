@extends('app')
@section('title', 'Xprinter - Product detail')
@section('content')
    <section class="detail-section mt-5xl">
        <div class="container">
            @include('components.global.navlink')
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="xzoom-container">
                        <img class="xzoom" id="xzoom-default" src="{{ asset('img/products/1.jpg') }}"
                            xoriginal="{{ asset('img/products/1.jpg') }}" style="width: 400px" />
                        <div class="xzoom-thumbs min_wrap">
                            <div class="swiper gallery-thumbs" id="detailSwiper">
                                <div class="swiper-wrapper">
                                    <a href="{{ asset('img/products/1.jpg') }}" class="swiper-slide">
                                        <img src="{{ asset('img/products/1.jpg') }}"
                                            xpreview="{{ asset('img/products/1.jpg') }}" class="xzoom-gallery"
                                            alt="">
                                    </a>
                                    @for ($i = 0; $i < 10; $i++)
                                        <a href="{{ asset('img/products/1.jpg') }}" class="swiper-slide">
                                            <img src="{{ asset('img/products/1.jpg') }}"
                                                xpreview="{{ asset('img/products/1.jpg') }}"
                                                class="xzoom-gallery" alt="">
                                        </a>
                                    @endfor
                                </div>
                                <div class="pagination-swiper d-flex justify-content-evenly">
                                    <div class="fa-solid fa-chevron-left"></div>
                                    <div class="fa-solid fa-chevron-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-6 col-xl-4 col-xxl-5">
                    <div class="pro_info">
                        <div class="h3 title">XP-Q302F</div>
                        <div class="description key">
                            <dl class="amount clearfix">
                                <dt class="metatit">Brand name</dt>
                                <dd class="suggest">Xprinter</dd>
                            </dl>
                            <dl class="amount clearfix">
                                <dt class="metatit">Place of Origin</dt>
                                <dd class="suggest">China</dd>
                            </dl>
                            <dl class="amount clearfix">
                                <dt class="metatit">Model Number</dt>
                                <dd class="suggest">XP-Q302F</dd>
                            </dl>
                            <dl class="amount clearfix">
                                <dt class="metatit">Material</dt>
                                <dd class="suggest">ABS</dd>
                            </dl>
                            <dl class="amount clearfix">
                                <dt class="metatit">Certification</dt>
                                <dd class="suggest">CCC,CE,FCC,RoHS,KC,SAA,BIS,BSMI</dd>
                            </dl>
                            <dl class="amount clearfix">
                                <dt class="metatit">OEM Availability</dt>
                                <dd class="suggest">Available</dd>
                            </dl>
                            <dl class="amount clearfix">
                                <dt class="metatit">Payment Term</dt>
                                <dd class="suggest">T/T, L/C</dd>
                            </dl>

                            <div class="links">
                                <a href=""><i class="fa-brands fa-instagram me-2"></i></a>
                                <a href=""><i class="fa-brands fa-facebook me-2"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                            </div>

                            <div>
                                <a href="" class="btn btn-primary">INQUIRE ONLINE</a>
                                <a href="" class="btn btn-primary">BROCHURES</a>
                                <a href="" class="btn btn-primary">DRIVER</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                        <div>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#detailInfoOne" role="button"
                                    aria-expanded="false" aria-controls="detailInfoOne">
                                    Product Overview
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#detailInfoTwo" role="button"
                                    aria-expanded="false" aria-controls="detailInfoTwo">
                                    Product Specification
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#detailInfoThree" role="button"
                                    aria-expanded="false" aria-controls="detailInfoThree">
                                    Service and Support
                                </a>
                            </p>
                            <div class="collapse show" id="detailInfoOne">
                                <div class="card card-body">
                                    <h2> Product Overview</h2>
                                    <div class="table-responsive mt-3">
                                        <table width="100%" class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        ● Wall mount available&nbsp;
                                                    </td>
                                                    <td>
                                                        ● 203 dpi resolution models
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="14">● Head-up sensor</td>
                                                    <td>● Support QR CODE, PDF417 printing</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse mt-3" id="detailInfoTwo">
                                <div class="card card-body">
                                    <h2>Product Specification</h2>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th height="28" width="8">Model</th>
                                                    <td height="28" style="word-break: break-all;" rowspan="1"
                                                        colspan="2" width="958">XP-Q302F<br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1" rowspan="1" style="word-break: break-all;"
                                                        width="211">
                                                        Print mode</td>
                                                    <td colspan="1" rowspan="1" style="word-break: break-all;"
                                                        width="534">
                                                        Label print mode&nbsp;</td>
                                                    <td colspan="1" rowspan="1" style="word-break: break-all;"
                                                        width="24">
                                                        Receipt print mode</td>
                                                </tr>
                                                <tr>
                                                    <td height="21" rowspan="1" width="8">Resolution</td>
                                                    <td colspan="2" rowspan="1" width="958">203 DPI</td>
                                                </tr>
                                                <tr>
                                                    <td width="232" height="28">
                                                        Printing method</td>
                                                    <td colspan="2" width="958">
                                                        Direct Thermal</td>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">Max.print speed</td>
                                                    <td width="534">
                                                        <p>127 mm/s</p>
                                                    </td>
                                                    <td width="423">
                                                        <p>220 mm/s</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">Max.print width</td>
                                                    <td style="word-break: break-all;" width="534">
                                                        <p>80 mm</p>
                                                    </td>
                                                    <td style="word-break: break-all;" width="24">72 mm</td>
                                                </tr>
                                                <tr>
                                                    <th height="28" colspan="3">Media</td>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">Media
                                                        type</td>
                                                    <td colspan="2" width="958">
                                                        <p>Thermal roll paper, thermal adhesive paper,linerless label paper
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="18" width="8">Media width</td>
                                                    <td width="534">
                                                        <p>20mm～80mm</p>
                                                    </td>
                                                    <td width="24">//</td>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">Media
                                                        thickness</td>
                                                    <td colspan="1" rowspan="1" width="534">
                                                        <p>0.06 ~ 0.19 mm</p>
                                                    </td>
                                                    <td rowspan="1" valign="null" align="null" width="423">0.06
                                                        ~
                                                        0.08 mm
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="20" width="8">Media
                                                        roll diameter</td>
                                                    <td colspan="2" width="958">
                                                        <p>Max.82 mm</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="16" rowspan="1" width="8">Paper taken method
                                                    </td>
                                                    <td colspan="2" rowspan="1" width="958">
                                                        <p>Tearing off</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th height="18" colspan="3" rowspan="1">
                                                        Performance Features</td>
                                                </tr>
                                                <tr>
                                                    <td height="19" rowspan="1" width="8">Ram</td>
                                                    <td colspan="2" rowspan="1" width="958">
                                                        <p>4 M</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="19" rowspan="1" width="8">Flash</td>
                                                    <td colspan="2" rowspan="1" width="958">4 M</td>
                                                </tr>
                                                <tr>
                                                    <td height="19" rowspan="1" width="8">Interfaces</td>
                                                    <td rowspan="1" colspan="2" width="958">
                                                        <p>USB+Serial+Lan; (Optional:USB+Serial+Lan+Bluetooth/WiFi)<br></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="19" rowspan="1" width="8">Sensors</td>
                                                    <td colspan="2" rowspan="1" width="958">
                                                        <p>Print head temperature sensor/Paper end/ Cover open / Gap<br></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th height="28" colspan="3">
                                                        Fonts/Graphics/Symbologies</th>
                                                </tr>
                                                <tr>
                                                    <td height="21" rowspan="1" width="8">Character sizes</td>
                                                    <td rowspan="1" style="word-break: break-all;" width="534">
                                                        <p>FONT 1 to FONT 8 、K、TST24.BF2、TSS24.BF2</p>
                                                    </td>
                                                    <td rowspan="1" style="word-break: break-all;" width="24">
                                                        <p>Font A:1.5mm×3.0mm(12×24 dots)</p>
                                                        <p>Font B:1.1mm×2.1mm(9×17 dots)</p>Chinese:3.0mm×3.0mm(24×24 dots)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">1D barcode</td>
                                                    <td width="534">
                                                        <p>CODE128、EAN128、ITF、CODE39、CODE39C、CODE39S、CODE93、EAN13、EAN13+2、EAN13+5、EAN8、EAN8+2、EAN8+5、CODABAR、POSTNET、UPC-A、UPCA+2、UPCA+5、UPCE、UPCE+2、UPCE+5、MSI、MSIC、PLESSEY、ITF14、EAN14
                                                        </p>
                                                    </td>
                                                    <td width="24" style="word-break: break-all;">
                                                        <p>UPC-A/UPC-E/JAN13(EAN13)/</p>
                                                        <p>JAN8(EAN8)/<span
                                                                style="background-color: transparent;"></span><span
                                                                style="background-color: transparent;">CODE39/</span><span
                                                                style="background-color: transparent;">ITF/</span></p>
                                                        <p><span
                                                                style="background-color: transparent;">CODABAR/CODE93/CODE128</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">2D bar code</td>
                                                    <td width="534" style="word-break: break-all;">PDF417 /
                                                        QRCODE&nbsp;/&nbsp;DataMatrix</td>
                                                    <td width="24" style="word-break: break-all;">
                                                        PDF417&nbsp;/&nbsp;QR
                                                        code</td>
                                                </tr>
                                                <tr>
                                                    <td height="19" colspan="1" rowspan="1" width="8">
                                                        Emulaion
                                                    </td>
                                                    <td colspan="2" rowspan="1" style="word-break: break-all;"
                                                        width="939">
                                                        <p>TSC</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th height="24" colspan="3" rowspan="1">Physical
                                                        Features</th>
                                                </tr>
                                                <tr>
                                                    <td height="18" rowspan="1" width="8">Dimension</td>
                                                    <td rowspan="1" colspan="2" style="word-break: break-all;"
                                                        width="939">
                                                        184.2×134.5×125mm (D×W×H)</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1" width="8">Weight</td>
                                                    <td rowspan="1" colspan="2" style="word-break: break-all;"
                                                        width="939">1.09
                                                        kg</td>
                                                </tr>
                                                <tr>
                                                    <td height="24" colspan="3" rowspan="1">
                                                        Reliability</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1" width="8">Print head life</td>
                                                    <td rowspan="1" colspan="2" style="word-break: break-all;"
                                                        width="939">50
                                                        km</td>
                                                </tr>
                                                <tr>
                                                    <th height="24" colspan="3" rowspan="1">
                                                        Software</th>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1" width="8">Driver</td>
                                                    <td colspan="2" rowspan="1" width="939">
                                                        <p>Windows</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1" width="8">SDK</td>
                                                    <td colspan="2" rowspan="1" style="word-break: break-all;"
                                                        width="939">
                                                        <p>iOS/ Android/ Windows</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th height="24" colspan="3" rowspan="1">Power
                                                        supply</th>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1" width="8">Input</td>
                                                    <td colspan="2" rowspan="1" width="939">
                                                        <p>DC 24V/2.5A</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th height="28" colspan="3">Environmental
                                                        Conditions</th>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">
                                                        <p>Operation environment</p>
                                                    </td>
                                                    <td height="28" colspan="2" width="939">
                                                        <p>5～45℃, Humidity:20~80%</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" width="8">Storage environment</td>
                                                    <td height="28" colspan="2" width="939">
                                                        <p>-40～55 ℃ Humidity: ≤93%（40℃）</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse mt-3" id="detailInfoThree">
                                <div class="card card-body">
                                    <h2>Service and Support</h2>
                                    <div class="row no-border mt-3">
                                        @for ($i = 0; $i < 2; $i++)
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Q:What’s your main product line?</h5>
                                                        <p class="card-text">A:Specialized in Receipt printers, Label
                                                            Printers,
                                                            Mobile
                                                            Printers,
                                                            Panel
                                                            printers, Kiosk printer, Dot Matrix Printer , Bluetooth
                                                            printers.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Q:What’s your main product line?</h5>
                                                        <p class="card-text">A:Specialized in Receipt printers, Label
                                                            Printers,
                                                            Mobile
                                                            Printers,
                                                            Panel
                                                            printers, Kiosk printer, Dot Matrix Printer , Bluetooth
                                                            printers.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Q:What’s your main product line?</h5>
                                                        <p class="card-text">A:Specialized in Receipt printers, Label
                                                            Printers,
                                                            Mobile
                                                            Printers,
                                                            Panel
                                                            printers, Kiosk printer, Dot Matrix Printer , Bluetooth
                                                            printers.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-none col-lg-4 col-xl-4 col-xxl-4 global-card">
                        <div class="card">
                            <h4 class="card-title text-center mt-3">Related Products</h4>
                            @for ($i = 0; $i < 2; $i++)
                                <a href="1" class="recently-products">
                                    <img src="{{ asset('img/products/1.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">XP-24354</h5>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
