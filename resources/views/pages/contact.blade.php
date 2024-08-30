@extends('app')
@section('title', 'Xprinter - Contact')
@section('content')
    <section class="contact-section">
        @include('components.global.banner')
        <div class="container mt-5">
            @include('components.global.navlink')
        </div>
        <div class="container mt-5xl">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title mb-4">CONTACT US</div>
                            <div class="mb-2">
                                <a href="" class="contact-icon">
                                    <span>
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    +99890 000-00-00
                                </a>
                            </div>
                            <div class="mb-2">
                                <a href="" class="contact-icon">
                                    <span>
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                    test@gmail.com
                                </a>
                            </div>
                            <div class="mb-2">
                                <a href="" class="contact-icon">
                                    <span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    3rd Floor, 1 Building, Stone Industrial Park, Qianshan, Zhuhai City, Guangdong Province,
                                    China
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-sm-5 mt-xl-0 mt-lg-0 mt-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="card-title">ABOUT YOU</div>
                                <form class="form">
                                    <div class="mt-4">
                                        <label for="aboutName" class="form-label">Name</label>
                                        <input type="email" class="form-control" id="aboutName" placeholder="Name">
                                    </div>
                                    <div class="mt-4">
                                        <label for="aboutEmail" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="aboutEmail" placeholder="E-mail">
                                    </div>
                                    <div class="mt-4">
                                        <label for="companyName" class="form-label">Company Name</label>
                                        <input type="email" class="form-control" id="companyName"
                                            placeholder="Company Name">
                                    </div>

                                    <div class="mt-4">
                                        <label for="aboutContent" class="form-label">Content</label>
                                        <textarea class="form-control" id="aboutContent" rows="3" placeholder="Content"></textarea>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Send Inquiry Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
