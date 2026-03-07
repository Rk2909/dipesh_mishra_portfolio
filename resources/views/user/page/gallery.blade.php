@extends('user.layout.app')
@section('title', 'gallery page')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <title>Nitro &mdash; Website Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="{{ asset('blog/assets/css-1?family=Open+Sans:300,400,700') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('blog/assets/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/style.css') }}">

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2 data-aos="fade-up">Gallery</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">About me</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="site-section" id="portfolio-section">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12 text-center " data-aos="fade">
                        <h2 class="section-title mb-3">Gallery</h2>
                    </div>
                </div>

                <div class="row justify-content-center mb-5" data-aos="fade-up">
                    <div id="filters" class="filters text-center button-group col-md-7">
                        <button class="btn btn-primary active" data-filter="*">All</button>
                        <button class="btn btn-primary" data-filter=".web">Web</button>
                        <button class="btn btn-primary" data-filter=".design">Design</button>
                        <button class="btn btn-primary" data-filter=".brand">Brand</button>
                    </div>
                </div>

                <div id="posts" class="row no-gutter">
                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_1.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_1.jpg') }}">
                        </a>
                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_2.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_2.jpg') }}">
                        </a>
                    </div>

                    <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_3.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_3.jpg') }}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_4.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_4.jpg') }}">
                        </a>
                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_5.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_5.jpg') }}">
                        </a>
                    </div>

                    <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_6.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_6.jpg') }}">
                        </a>
                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_7.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_7.jpg') }}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_8.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_8.jpg') }}">
                        </a>
                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_9.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_9.jpg') }}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_10.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_10.jpg') }}">
                        </a>
                    </div>

                    <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_11.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_11.jpg') }}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_12.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_12.jpg') }}">
                        </a>
                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ asset('blog/assets/images/img_13.jpg') }}" class="item-wrap fancybox"
                            data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('blog/assets/images/img_13.jpg') }}">
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <script src="{{ asset('blog/assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('blog/assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('blog/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('blog/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('blog/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('blog/assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('blog/assets/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('blog/assets/js/aos.js') }}"></script>
        <script src="{{ asset('blog/assets/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('blog/assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('blog/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('blog/assets/js/main.js') }}"></script>

    </body>

    </html>
@endsection
