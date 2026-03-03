@extends('user.layout.app')
@section('title', 'services us')
@section('content')
    <style>
        .minheight {
            min-height: 450px;
        }

        .textjustify {
            text-align: justify;
        }

        @media (max-width:549px) {
            .minheight {
                min-height: auto;
            }
        }
    </style>
    <style>
        .project-card {
            background: #fff;
            min-height: 200px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin: 10px 0px;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .project-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .project-card a {
            text-decoration: none;
            font-weight: 500;
            color: #0d6efd;
        }

        .timeline-item {
            background: #fff;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #0d6efd;
            border-radius: 6px;
        }

        .partnership-section {
            padding: 100px 0;
            /* background: linear-gradient(white); */
            position: relative;
        }

        .partner-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            color: #000;
            font-weight: 500;
            backdrop-filter: blur(8px);
            transition: all 0.3s ease;
            box-shadow: 0px 0px 10px black;
            margin: 10px 0px;
        }

        .partner-card:hover {
            background: #fff;
            color: #0d6efd;
            transform: translateY(-8px);
        }
    </style>


    <main>

        <!-- Header Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>My Services</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">My Services</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Categories Area Start -->
        <section class="categories-area categories-area2  section-padding30">
            <div class="container">
                <div class="text-center">
                    <h2>Organizational Leadership & Initiatives</h2>
                    <p>Youth + Skill + Safety + Enterprise + Leadership = Empowered Society</p>
                </div>
                <div class="text-center">
                    <h2>iYouth Pvt. Ltd.</h2>
                </div>
                <div class="row my-2">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center1 mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Vision</a></h5>
                                <p class=" textjustify">To build a youth-driven enterprise ecosystem that generates
                                    employment, promotes self-employment, and strengthens local manufacturing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-speaker"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Mission</a></h5>
                                <div class="textjustify">
                                    <p>Develop scalable youth-centric brands.</p>
                                    <p>Promote private-label and white-label manufacturing.</p>
                                    <p>Create district-level distribution networks.</p>
                                    <p>Enable women-led and youth-led enterprises.</p>
                                    <p>Generate sustainable livelihood opportunities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-portfolio"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Core Focus</a></h5>
                                <div class="textjustify">
                                    <p>Enterprise Development.</p>
                                    <p>Manufacturing & Distribution.</p>
                                    <p>Skill-Based Micro Businesses.</p>
                                    <p>Women Entrepreneurship.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h2>Chhattisgarh Youth Federation (CYF)</h2>
                    <p>Registered under Chhattisgarh Society Registration Act, 1973</p>
                </div>
                <div class="row my-2">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Vision</a></h5>
                                <p class="textjustify">Skilled, Safe and Empowered Youth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-speaker"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Mission</a></h5>
                                <p class="textjustify">Empowerment of youth through skill development, confidence building,
                                    leadership training, and proper motivation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-portfolio"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Objectives</a></h5>
                                <div class="textjustify">
                                    <p>To make youth confident.</p>
                                    <p>To create safe and secure environments.</p>
                                    <p>To increase social awareness.</p>
                                    <p>To develop youth for nation building.</p>
                                    <p>To strengthen leadership at grassroots level.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h2>Chhattisgarh Adventure Sports Association (CASA)</h2>
                    <p>Registered under Chhattisgarh Society Registration Act, 1973</p>
                </div>
                <div class="row my-2">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Vision</a></h5>
                                <p class="textjustify">Confident, Fearless and Adventure-Ready Youth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-speaker"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Mission</a></h5>
                                <p class="textjustify">Providing structured adventure facilities and safety-oriented
                                    training to develop resilience, discipline, and confidence among youth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  mb-50 minheight">
                            <!-- <div class="cat-icon">
                                <span class="flaticon-portfolio"></span>
                            </div> -->
                            <div class="cat-cap">
                                <h5 class="text-center"><a href="">Objectives</a></h5>
                                <div class="textjustify">
                                    <p>Develop adventure destinations.</p>
                                    <p>Provide training in adventure sports & disaster management.</p>
                                    <p>Promote adventure tourism.</p>
                                    <p>Organize professional adventure competitions.</p>
                                    <p>Build physical and mental strength among youth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Area End -->
        <section class="section-padding30 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Ongoing Projects & Initiatives</h2>
                    <p class="text-muted">“आत्मनिर्भर युवा-आत्मनिर्भर छत्तीसगढ़”</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="project-card">
                            <h5>iYouth</h5>
                            <p>Employment & Youth Empowerment Platform</p>
                            <a href="https://www.iyouth.in" target="_blank">Visit Website →</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="project-card">
                            <h5>iYouth Job</h5>
                            <p>Employment Portal</p>
                            <a href="https://www.iyouthjob.in" target="_blank">Visit Website →</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="project-card">
                            <h5>iYouth Store</h5>
                            <p>Self Employment & E-commerce</p>
                            <a href="https://www.iyouthstore.in" target="_blank">Visit Website →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding30">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Upcoming Projects</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="project-card">
                            <h5>iYouth Eats</h5>
                            <p>Restaurant & Food Venture</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project-card">
                            <h5>iYouth News</h5>
                            <p>Digital Media Platform</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project-card">
                            <h5>iYouth Fitness</h5>
                            <p>Health & Fitness Ecosystem</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project-card">
                            <h5>iYouth Skill</h5>
                            <p>Skill Development Platform</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project-card">
                            <h5>iYouth Siksha</h5>
                            <p>Education & Learning Network</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="project-card">
                            <h5>CG Youth</h5>
                            <p>Youth Awareness & Adventure Sports</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISION 2030 -->
        <section class="vision-roadmap section-padding">
            <div class="container">
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
        </section>

        <!-- partnership -->
        <section class="partnership-section bg-light">
            <div class="container">
                <div class="text-center text-white mb-5">
                    <h2 class="fw-bold">Let’s build a skilled, safe, and self-reliant India together.</h2>
                    <p class="lead">We invite collaboration with:</p>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="partner-card">Government Institutions</div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="partner-card">Manufacturers</div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="partner-card">NGOs</div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="partner-card">Educational Institutions</div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="partner-card">Investors</div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="partner-card">Youth Leaders</div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#contact" class="btn btn-light btn-lg px-4">Partner With Us</a>
                </div>
            </div>
        </section>
        <!-- Want To Work Start -->
        <section class="wantToWork-area w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Dont worry for contact i`m available</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="#" class="btn btn-black f-right">Contact Me Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To Work End -->
        <!-- Brand Area Start -->
        <div class="brand-area section-padding30">
            <div class="container">
                <div class="brand-active brand-border pt-50 pb-40">
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand1.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand2.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand3.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand4.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
        <!-- Contact Info Start -->
        <div class="contact-info-area w-padding2" data-background="assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-7">
                        <div class="contact-caption mb-50">
                            <h3>If Not Now, When? Let’s Work Together!</h3>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisces gravida. Risus commodo viverra.</p>
                            <img src="assets/img/gallery/sin.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <form action="#" class="contact-wrapper">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="email" name="email" placeholder="Email Address">
                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Info End -->

    </main>



@endsection
