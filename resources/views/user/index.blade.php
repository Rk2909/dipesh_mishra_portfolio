@extends('user.layout.app')
@section('title', 'Dipesh Mishra | Youth Institution Builder')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .imagesheors {
            height: 400px;
            width: 100%;
        }

        .single-cat1 {
            min-height: 420px;
            transition: all 0.3s ease;
            border-radius: 10px;
        }


        .single-cat1:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .textjustify {
            text-align: justify;
        }

        .minheight {
            min-height: 28.125rem;
        }

        .images {
            height: 550px;
        }

        @media (max-width:549px) {
            .images {
                height: 365px;
                /* width: 100%; */
            }

            .border-btn {
                display: block;
            }

            /* .slider-height{
                                                            display: none;
                                                        } */
        }
    </style>

    <!-- video -->

    <style>
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: 10px;
            cursor: pointer;
        }

        .gallery-item iframe {
            width: 100%;
            height: 250px;
            border: none;
            transition: .4s;
        }

        .gallery-item:hover iframe {
            transform: scale(1.08);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: .4s;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .overlay i {
            font-size: 35px;
            color: white;
        }
    </style>
    <!-- photo -->
    <style>
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: 10px;
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: 0.4s;

        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: 0.4s;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .overlay i {
            font-size: 30px;
            color: white;
        }
    </style>
    <style>
        .blog-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            margin: 10px;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .blog-image {
            position: relative;
        }

        .blog-image img {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .blog-date {
            position: absolute;
            bottom: -20px;
            left: 20px;
            background: #ff6b00;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-align: center;
        }

        .blog-date h4 {
            margin: 0;
            font-size: 20px;
        }

        .blog-content {
            padding: 30px 20px 20px;
        }

        .blog-title {
            font-size: 22px;
            font-weight: 600;
        }

        .blog-subtitle {
            color: #777;
            font-size: 15px;
            margin-bottom: 10px;
        }

        .blog-desc {
            color: #555;
        }
    </style>

    <style>
        /* HERO BACKGROUND */

        .slider-area {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            /* padding:80px 0; */
        }

        /* TEXT */

        .hero__caption span {
            font-size: 14px;
            letter-spacing: 1px;
            color: #ff5c00;
            font-weight: 600;
        }

        .hero__caption h1 {
            font-size: 60px;
            font-weight: 800;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /* LIST */

        .hero-list {
            padding-left: 0;
            margin-top: 15px;
        }

        .hero-list li {
            list-style: none;
            font-size: 16px;
            margin-bottom: 8px;
            color: #444;
        }

        /* IMAGE */

        .imagesheors {
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            max-height: 420px;
            object-fit: fill;
        }

        .textshadow {
            text-shadow: 0px 0px 7px red;
        }



        /* RESPONSIVE */

        @media(max-width:768px) {

            .textshadow {
                text-shadow: 0px 0px 3px red;
            }

            .hero__caption h1 {
                font-size: 40px;
            }

            .imagesheors {
                margin-top: 30px;
            }

        }
    </style>

    <main>
        <!-- HERO SECTION 0-->
        <div class="slider-area">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-md-8">
                            <div class="hero__caption">

                                {{-- <span class="hero-top-text" style="text-shadow: 0px 2px 3px black;">
                                    Empowering Youth. Strengthening Society. Building a Self-Reliant India.
                                </span> --}}

                                <h1 class="textshadow">Dipesh Mishra</h1>

                                <h4 id="typewriter"></h4>

                                <ul class="hero-list">
                                    <li>Director – iYouth Pvt. Ltd.</li>
                                    <li>Founder & President – Chhattisgarh Youth Federation</li>
                                    <li>Founder – Chhattisgarh Youth Federation</li>
                                    <li>Founder & President – Chhattisgarh Adventure Sports Association</li>
                                </ul>
                                <ul class="hero-top-text" style="">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Empowering Youth.</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Strengthening Society.</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Building a Self-Reliant India.</li>
                                </ul>

                                    <div class="hero__btn mt-4">
                                        <a href="{{ route('contact') }}" class="btn hero-btn">Partner With Us</a>

                                        <a href="{{ route('about') }}" class="btn border-btn ml-15">
                                            Explore Vision
                                        </a>
                                    </div>

                            </div>
                        </div>

                        <div class="col-md-4 text-center">
                            <img src="{{ asset('slider/' . $slider->profile) }}" alt="img"
                                class="img-fluid imagesheors">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- HERO SECTION 0-->


        <!-- ABOUT SECTION -->
        <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class=" col-md-6" data-aos="fade-right">
                        <div class="about-me-caption">
                            <h2>About Dipesh Mishra</h2>
                            <p class="pb-30 textjustify">Dipesh Mishra is a youth-focused entrepreneur and institution
                                builder
                                committed to transforming India’s youth into confident, skilled, safe, and self-reliant
                                leaders.</br>
                                His work integrates enterprise development, skill enhancement, leadership building,
                                adventure training, and social safety awareness into one structured empowerment ecosystem.
                            </p>
                            <h5 class="textjustify">He believes that youth are not just the future of India — they are the
                                driving force of
                                India’s present growth story.</h5>
                            <p class="textjustify">Dipesh Mishra represents a new generation of leadership rooted in purpose
                                and execution. As
                                the founder of multiple youth-driven institutions, he is building platforms where youth
                                become skilled, confident, safe, and economically independent contributors to society.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-me-img mb-30">
                            <img src="{{ asset('about/' . optional($about)->profile) }}" alt="Dipesh Mishra"
                                class="img-fluid images" data-aos="fade-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ORGANIZATIONAL LEADERSHIP -->
        <section class="services-area section-padding3 mb-4">
            <div class="container">
                <div class="section-tittle mb-70">
                    <h2>Organizational Leadership</h2>
                </div>

                <div class="row">


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shadow1 p-2 single-cat1">
                            <div class="single-cat mb-50 my-2">
                                <div class="text-center">
                                    <img src="{{ asset('user/assets/img/iYouth_logo.webp') }}" alt="img"
                                        width="100px">
                                    <h4 class="my-1">iYouth Pvt. Ltd.</h4>
                                </div>
                                <p><strong>Vision:</strong> Youth-driven enterprise ecosystem generating employment &
                                    promoting
                                    self-employment.</p>
                                <ul>
                                    <li>Scalable Youth-Centric Brands</li>
                                    <li>Private & White Label Manufacturing</li>
                                    <li>District Distribution Networks</li>
                                    <li>Women & Youth Enterprises</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shadow1 p-2 single-cat1 my-2">
                            <div class="single-cat mb-50">
                                <div class="text-center">
                                    <img src="{{ asset('user/assets/img/cg_youth_federation.webp') }}" alt="img"
                                        width="100px">
                                    <h4 class="my-1">Chhattisgarh Youth Federation</h4>
                                </div>
                                <p><strong>Vision:</strong> Skilled, Safe & Empowered Youth.</p>
                                <ul>
                                    <li>Leadership Programs</li>
                                    <li>Skill Development</li>
                                    <li>Youth Awareness Campaigns</li>
                                    <li>Grassroots Leadership Building</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shadow1 p-2 single-cat1 my-2">
                            <div class="single-cat mb-50 ">
                                <div class="text-center">
                                    <img src="{{ asset('user/assets/img/cg_adventure_sports.webp') }}" alt="img"
                                        width="100px">
                                    <h4 class="my-1">Chhattisgarh Adventure Sports Association</h4>
                                </div>
                                <p><strong>Vision:</strong> Confident, Fearless & Adventure-Ready Youth.</p>
                                <ul>
                                    <li>Adventure Training</li>
                                    <li>Disaster Management</li>
                                    <li>Adventure Tourism Promotion</li>
                                    <li>Professional Competitions</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- UNIFIED YOUTH EMPOWERMENT MODEL -->
        <section class="wantToWork-area w-padding2" id="partnership" data-aos="fade-up">
            <div class="container">

                <div class="section-tittle text-center mb-60" data-aos="fade-up">
                    <h2>UNIFIED CONCEPT - THE YOUTH EMPOWERMENT MODEL</h2>
                    <p>All institutions operate under one integrated framework:</p>
                    <h4 class="mt-3" style="font-weight:600;">
                        Youth + Skill + Safety + Enterprise + Leadership = Empowered Society
                    </h4>
                </div>

                <div class="row mt-5 ">


                    <h3>Ongoing Projects & Initiatives</h3>
                    <div class="row" data-aos="fade-up">
                        <div class="single-cat  col-12 col-md-4 " data-aos="fade-left">
                            <div class="my-2  shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/cg_youth.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">

                                <ul class="mt-3 px-2">
                                    <li class="mt-3">
                                        <a href="https://www.iyouth.in" style="color:black; font-size:16px;">
                                            <strong>आत्मनिर्भर युवा-आत्मनिर्भर छत्तीसगढ़</strong>
                                        </a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="https://www.iyouthjob.in" style="color:black; font-size:16px;">
                                            It is a dedicated people’s movement run by the Chhattisgarh Youth Federation,
                                            aimed
                                            at empowering the youth of Chhattisgarh to become self-reliant, confident, and
                                            capable
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat  col-12 col-md-4 " data-aos="fade-left">
                            <div class="my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/1768205612.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">

                                <ul class="mt-3 px-2">
                                    <li class="mt-3">
                                        <a href="https://www.iyouth.in" style="color:black; font-size:16px;">
                                            <strong>Employment</strong>
                                        </a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="https://www.iyouthjob.in" style="color:black; font-size:16px;">
                                            A flexible job platform for hourly, freelance, and project-based hiring.
                                        </a>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat  col-12 col-md-4 " data-aos="fade-left">
                            <div class="my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/self_emp.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">

                                <ul class="mt-3 px-2">
                                    <li class="mt-3">
                                        <a href="https://www.iyouth.in" style="color:black; font-size:16px;">
                                            <strong>Self-employment</strong>
                                        </a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="https://www.iyouthjob.in" style="color:black; font-size:16px;">
                                            A digital marketplace to promote youth-driven products and businesses.
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <h3>Upcoming Projects & Initiatives</h3>
                    <div class="row" data-aos="fade-up">
                        <div class="single-cat  col-12 col-md-4 " data-aos="fade-left">
                            <div class=" my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/Restaurants_img.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3 px-2">
                                    <li style="color:black; font-size:16px;"><strong>Restaurants – </strong><a
                                            href="https://www.iyoutheats.in" target="_blank">iyoutheats.in</a></li>
                                    <li>
                                        Food and restaurant franchise opportunities driven by youth entrepreneurship.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat col-12 col-md-4 " data-aos="fade-left">
                            <div class=" my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/1768206038.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3 px-2">
                                    <li style="color:black; font-size:16px;"><strong>News & Media – </strong><a
                                            href="https://www.iyouthnews.in" target="_blank">iyouthnews.in</a>
                                    </li>
                                    <li>
                                        Youth-focused news, opinions, opportunities, and social stories.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat col-12 col-md-4 " data-aos="fade-left">
                            <div class=" my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/fitness_img.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3 px-2">
                                    <li class="mb-3"><strong>Fitness – </strong><a href="https://www.iyouthfitness.in"
                                            target="_blank">iyouthfitness.in</a>
                                    </li>
                                    <li>
                                        Fitness and wellness solutions through gyms, yoga centers, and franchise models.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat col-12 col-md-4 " data-aos="fade-left">
                            <div class=" my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/skill_dev_img.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3 px-2">
                                    <li class="mb-3"><strong>Skill – </strong><a href="https://www.iyouthskill.in"
                                            target="_blank">iyouthskill.in</a></li>
                                    <li>
                                        Skill development programs in technology, arts, music, dance, and practical life
                                        skills.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat col-12 col-md-4 " data-aos="fade-left">
                            <div class=" my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/cg_youth.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3 px-2">
                                    <li><strong>Education – </strong><a href="https://www.iyouthsiksha.in"
                                            target="_blank">iyouthsiksha.in</a>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat col-12 col-md-4 " data-aos="fade-left">
                            <div class=" my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/cg_youth.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="mt-3 px-2">
                                    <li><strong>Youth Awareness & Adventure – </strong><a href="https://www.cgyouth.in"
                                            target="_blank">cgyouth.in</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <section class="services-area services-padding bg-light">
            <div class="container">
                <div class="section-tittle mb-5">
                    <h2>Core Pillars</h2>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        <div class="p-0 my-2">
                            <h5>Youth Skill Empowerment</h5>
                            <p>Skill Development Programs | Entrepreneurship Training | Leadership Workshops | Confidence
                                Building</p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="p-0 my-2">
                            <h5>Youth Safety & Structured Growth</h5>
                            <p>Adventure Safety Protocols | Disaster Management Training | Community Safety Awareness |
                                Responsible Youth Engagement </p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 ">
                        <div class="p-0 my-2 ">
                            <h5>Enterprise & Employment Creation</h5>
                            <p>Youth-Led Business Models | Women-Led Enterprise Units | Micro Distribution Networks | Local
                                Manufacturing Promotion</p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 ">
                        <div class="p-0 my-2 ">
                            <h5>Women Empowerment</h5>
                            <p>Skill-Based Income Opportunities | Rural Women Business Participation | Financial
                                Independence |
                                Leadership Development</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- gallry video -->
        <section class="services-area services-padding1 my-4 bg-light">
            <div class="container my-5">
                <div class="section-tittle mb-5">
                    <h2>Gallery Video</h2>
                </div>

                <div class="row g-4">

                    @forelse ($videos as $data)
                        @php
                            $embed = str_replace('watch?v=', 'embed/', $data->link);
                        @endphp

                        <div class="col-md-4">

                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#videoModal"
                                onclick="showVideo('{{ $embed }}')">

                                <iframe src="{{ $embed }}" allowfullscreen></iframe>

                                <div class="overlay">
                                    <i class="bi bi-play-circle"></i>
                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="text-center">
                            <p>No Video Found</p>
                        </div>
                    @endforelse

                </div>
                <div class="text-center my-2">
                    <a href="{{ route('gallery.video') }}" class="btn btn-outline-primary">View More</a>
                </div>
            </div>

            <div class="modal fade" id="videoModal" tabindex="-1">

                <div class="modal-dialog modal-lg modal-dialog-centered">

                    <div class="modal-content">

                        <div class="modal-body p-0">

                            <iframe id="modalVideo" width="100%" height="500" src="" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <section class="services-area services-padding1 my-4 bg-light">
            <div class="container my-5">
                <div class="section-tittle mb-5">
                    <h2>Gallery Photos</h2>
                </div>
                <div class="row g-4">
                    @forelse ($gallerys as $data)
                        <div class="col-md-4">
                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                                onclick="showImage(this)">
                                <img src="{{ asset('' . $data->image) }}" alt="img">
                                <div class="overlay">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="text-center">
                            <p>No Data</p>
                        </div>
                    @endforelse
                </div>
                <div class="text-center my-2">
                    <a href="{{ route('gallery') }}" class="btn btn-outline-primary">View More</a>
                </div>
            </div>

            <div class="modal fade" id="imageModal">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-body p-0">
                            <img id="modalImage" src="" class="w-100">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        <section class="services-area services-padding1 my-4 bg-light">
            <div class="container py-5">

                <div class="section-tittle mb-5">
                    <h2>Blogs</h2>
                </div>

                <div class="row g-4">

                    <!-- BLOG 1 -->
                    @forelse ($blogs as $data)
                        <div class="col-md-4">

                            <div class="blog-card">

                                <div class="blog-image">

                                    <img src="{{ asset('' . $data->image) }}">

                                    <div class="blog-date">
                                        <h4>{{ \Carbon\Carbon::parse($data->date)->format('d') }}</h4>
                                        <small>{{ \Carbon\Carbon::parse($data->date)->format('M') }}</small>
                                    </div>

                                </div>

                                <div class="blog-content">

                                    <h3 class="blog-title">{{ $data->title }}</h3>

                                    <p class="blog-subtitle">
                                        {{ $data->short_description }}
                                    </p>

                                    <p class="blog-desc">
                                        {{ $data->description }}
                                    </p>

                                </div>

                            </div>

                        </div>

                    @empty
                        <div class="text-center">
                            <p>No Data</p>
                        </div>
                    @endforelse


                </div>
                <div class="text-center my-2">
                    <a href="{{ route('blogs') }}" class="btn btn-outline-primary">View More</a>
                </div>

            </div>
        </section>
        <!--================Blog Area =================-->

        <!--media facebook -->
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}

        <div class="container mt-4">
            <div class="row justify-content-center">

                <!-- Facebook Section -->
                <div class="col-md-4">
                    <h5 class="text-danger mb-3">
                        <i class="fab fa-facebook text-primary"></i> फेसबुक
                    </h5>

                    <div class="card shadow-sm">
                        <div class="card-body p-2">

                            <div id="fb-root"></div>

                            <div class="fb-page"
                                data-href="https://www.facebook.com/dipeshmishra.India?rdid=gu0SV3jdskKLfkG0&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F17ZPdo8p5D%2F#"
                                data-tabs="timeline" data-width="340" data-height="500" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" target="_blank">
                            </div>

                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <a href="https://www.facebook.com/dipeshmishra.India?rdid=gu0SV3jdskKLfkG0&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F17ZPdo8p5D%2F#"
                            class="btn btn-danger btn-sm" target="_blank">
                            संपूर्ण देखें
                        </a>
                    </div>

                </div>

                <!-- Twitter Section -->
                <!-- <div class="col-md-4">

                        <h5 class="text-danger mb-3">
                            <i class="fab fa-twitter text-info"></i> ट्विटर @dipeshmishra
                        </h5>

                        <div class="card shadow-sm">
                            <div class="card-body p-2">


                                <a class="twitter-timeline" target="_blank" data-height="500" href="https://twitter.com/dipeshmishra_in">
                                    Tweets by dipeshmishra
                                </a>

                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <a target="_blank" href="https://twitter.com/dipeshmishra_in" class="btn btn-danger btn-sm">
                                संपूर्ण देखें
                            </a>
                        </div>


                    </div> -->

                <!-- YouTube Section -->
                <!-- <div class="col-md-4">

                        <h5 class="text-danger mb-3">
                            <i class="fab fa-youtube text-danger"></i> यूट्यूब
                        </h5>

                        <div class="card shadow-sm">
                            <div class="card-body">

                                <iframe width="100%" height="300"
                                    src="https://www.youtube.com/embed?listType=user_uploads&list=YogiAdityanathChannel"
                                    frameborder="0" allowfullscreen>
                                </iframe>

                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <a href="https://www.youtube.com/" class="btn btn-danger btn-sm" target="_blank">
                                संपूर्ण देखें
                            </a>
                        </div>

                    </div> -->

            </div>
        </div>
        <!--media facebook -->



        <!-- VISION 2030 -->


        <div class="container vision-roadmap section-padding1 my-4">
            <div class="section-tittle text-center mb-70">
                <h2>Vision 2030 Roadmap</h2>
            </div>
            <div class="roadmap">
                <div class="roadmap-item left" data-aos="fade-right">
                    <div class="content">
                        <h4>Phase 1</h4>
                        <p>District-Level Skill & Youth Activation</p>
                    </div>
                </div>

                <div class="roadmap-item right" data-aos="fade-left">
                    <div class="content">
                        <h4>Phase 2</h4>
                        <p>Enterprise & Distribution Expansion (State Level)</p>
                    </div>
                </div>

                <div class="roadmap-item left" data-aos="fade-right">
                    <div class="content">
                        <h4>Phase 3</h4>
                        <p>National Youth Enterprise Network</p>
                    </div>
                </div>

                <div class="roadmap-item right" data-aos="fade-left">
                    <div class="content">
                        <h4>Phase 4</h4>
                        <p>Integrated Youth Economic & Leadership Ecosystem</p>
                    </div>
                </div>

            </div>
        </div>


        <!-- PARTNERSHIP -->
        <section class="wantToWork-area w-padding2" id="partnership">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="wantToWork-caption">
                            <h2>Let’s Build a Skilled, Safe & Self-Reliant India Together</h2>
                            <p>We invite collaboration with Government Institutions, NGOs, Manufacturers, Investors,
                                Educational Institutions & Youth Leaders.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ Route('contact') }}" class="btn btn-black">Partner With Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact-info-area section-padding" id="contact">
            <div class="container">
                <div class="section-tittle mb-50">
                    <h2>Contact</h2>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <h4>{{ $setting->logo ?? '' }}</h4>
                        <p>{{ $setting->address ?? '' }}</p>
                        <p>Email: {{ $setting->email ?? '' }}</p>
                        <p>Phone: +91-{{ $setting->contact ?? '' }}</p>
                    </div>

                    <div class="col-md-7">
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-wrapper">
                            @csrf
                            <input type="text" name="name" placeholder="Full Name" required>
                            <input type="email" name="email" placeholder="Email Address" required>
                            <input type="text" name="phone" placeholder="Phone Number">
                            <textarea name="message" placeholder="Your Message" required></textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success ') }}",
                confirmButtonColor: '#3085d6'
            });
        </script>
    @endif

    <!-- video -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showVideo(link) {
            document.getElementById("modalVideo").src = link;
        }


        const videoModal = document.getElementById('videoModal');

        videoModal.addEventListener('hidden.bs.modal', function() {

            document.getElementById("modalVideo").src = "";

        });
    </script>
    <script>
        function showImage(el) {
            let img = el.querySelector("img").src;
            document.getElementById("modalImage").src = img;
        }
    </script>
    <!--social media-->
    <script async src="https://platform.twitter.com/widgets.js"></script>
    <script async src="//www.instagram.com/embed.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0">
    </script>


@endsection
