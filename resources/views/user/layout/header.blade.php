<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('user/site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    {{-- ------------- font ------------------ --}}
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- ----------------------------------------------------------- --}}
    {{-- ----- AOS Link --------- --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    {{-- ------ AOS End -------- --}}
    <style>
        /* ------------ center card ------------- */
        .row.center-card {
            justify-content: center;
            align-items: stretch;
        }

        #typewriter::after {
            content: "|";
            animation: blink 1s infinite;
        }

        #typewriter {
            font-size: 25px;
            max-width: 100%;
            width: 100%;
            white-space: normal;
            /* Allows wrapping */
        }

        @media (min-width: 992px) {
            #typewriter {
                white-space: nowrap;
                /* Single line */
            }
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            font-family: 'Montserrat', sans-serif;
        }

        @media (max-width: 767px) {
            .btn {
                max-width: 100%;
            }

            .hero__btn a,
            .wantToWork-area .btn,
            .btn-black {
                width: 100%;
                box-sizing: border-box;
            }

            .wantToWork-area {
                overflow: hidden;
            }

            .row {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .slider-height {
                height: auto;
                padding: 80px 0;
            }

            .hero__caption h1 {
                font-size: 32px;
            }

            .hero__caption span {
                font-size: 14px;
            }

            .hero__caption p {
                font-size: 14px;
            }

            .hero__btn {
                display: flex;
                flex-direction: column;
                width: 100%;
                overflow: hidden;
            }

            .hero__btn a {
                width: 100%;
                box-sizing: border-box;
                text-align: center;
                margin: 8px 0 !important;
            }

            .row {
                margin-left: 0;
                margin-right: 0;
            }

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .ml-15 {
                margin-left: 0 !important;
            }

            /*  */

            .section-tittle h2 {
                font-size: 26px;
            }

            .single-cat {
                margin-bottom: 30px;
            }

            .wantToWork-caption h2 {
                font-size: 22px;
            }

        }

        html,
        body {
            overflow-x: hidden;
        }

        /* --------------- ROAD MAP START  --------------- */
        /* Roadmap Section */
        .vision-roadmap {
            position: relative;
            background: #f9f9f9;
        }

        .roadmap {
            position: relative;
            margin: 0px 0;
            padding: 0px 0;
        }

        /* Center vertical line */
        .roadmap::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, #0d6efd, #198754);
            transform: translateX(-50%);
        }

        /* Roadmap items */
        .roadmap-item {
            width: 50%;
            padding: 20px 20px;
            position: relative;
        }

        .roadmap-item .content {
            background: #fff;
            padding: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
        }

        .roadmap-item .content:hover {
            transform: translateY(-8px);
        }

        /* Circle point */
        .roadmap-item::before {
            content: '';
            position: absolute;
            top: 30px;
            width: 20px;
            height: 20px;
            background: #198754;
            border-radius: 50%;
            z-index: 1;
        }

        /* Left side */
        .roadmap-item.left {
            left: 0;
            text-align: right;
        }

        .roadmap-item.left::before {
            right: -10px;
        }

        /* Right side */
        .roadmap-item.right {
            left: 50%;
        }

        .roadmap-item.right::before {
            left: -10px;
        }

        /* ---- for mobile --- */
        @media (max-width: 768px) {

            .roadmap::before {
                left: 20px;
            }

            .roadmap-item {
                width: 100%;
                padding-left: 60px;
                padding-right: 20px;
                text-align: left;
            }

            .roadmap-item.right {
                left: 0;
            }

            .roadmap-item::before {
                left: 10px;
            }
        }

        /* -------- ROADMAP END -------------------- */
        /* WhatsApp Floating Button */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 100px;
            right: 25px;
            background-color: #25D366;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 28px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        /* Hover Effect */
        .whatsapp-float:hover {
            background-color: #1ebe5d;
            transform: scale(1.1);
            text-decoration: none;
            color: #fff;
        }

        .whatsapp-float {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.6);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        /* ----------- floating whatsapp end ------------ */
        /* ----------- contact form ------------------- */
        .contact-wrapper input,
        .contact-wrapper textarea {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 2px solid #e0e0e0 !important;
            border-radius: 6px;
            outline: none;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        
        .contact-wrapper input:focus,
        .contact-wrapper textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }
    </style>
</head>

<body>

    <header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('user/assets/img/logo/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">

                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ route('about.index') }}">About</a></li>
                                            <li><a href="{{ route('services.index') }}">Services</a></li>
                                            <li><a href="{{ route('page.blog') }}">Blog</a></li>
                                            {{-- <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li> --}}
                                            {{-- <li>
                                                <a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('page.blog') }}">Blog</a></li>
                                                    <li><a href="{{ route('page.blogDetails') }}">Blog Details</a></li>
                                                    <li><a href="{{ route('page.element') }}">Element</a></li>
                                                    <li><a href="{{ route('page.portfolioDetails') }}">Portfolio
                                                            Details</a></li>
                                                </ul>
                                            </li> --}}
                                            {{-- <li><a href="{{ route('contact.index') }}">Contact</a></li> --}}
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                    <a href="{{ route('contact.index') }}" class="btn header-btn">Contact Us</a>
                                </div>

                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
