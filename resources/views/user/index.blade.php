@extends('user.layout.app')
@section('title', 'Dipesh Mishra | Youth Institution Builder')
@section('content')
    <style>
        .single-cat1 {
            min-height: 420px;
            transition: all 0.3s ease;
            border-radius: 10px;
        }

        /* Hover Effect */
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

    <main>

        <!-- HERO SECTION -->
        <div class="slider-area  ">
            {{-- <div class="single-slider slider-height d-flex align-items-center"> --}}
            <div class="single-slider slider-height2 d-flex align-items-center ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="hero__caption">
                                <span>Empowering Youth. Strengthening Society. Building a Self-Reliant India.</span>
                                <h1>Dipesh Mishra</h1>
                                <h4>Visionary Entrepreneur | Youth Institution Builder</h4>

                                <p id="typewriter">
                                </p>
                                {{-- <p>
                                    Visionary Entrepreneur | Youth Institution Builder <br>
                                    Founder & CEO – iYouth Pvt. Ltd. <br>
                                    Founder & President – Chhattisgarh Youth Federation <br>
                                    Founder & President – Chhattisgarh Adventure Sports Association
                                </p> --}}

                                <div class="hero__btn mt-4">
                                    <a href="" class="btn hero-btn ">Partner With Us</a>
                                    <a href="" class="btn border-btn ml-15 ">Explore Vision</a>
                                    {{-- <a href="#contact" class="btn border-btn ml-15">Contact Now</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('user/assets/img/dipesh4.png') }}" alt="img"
                                class="img-fluid border-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HERO SECTION mobile view -->
        <div class="slider-area d-none ">
            {{-- <div class="single-slider slider-height d-flex align-items-center"> --}}
            <div class="single-slider slider-height2 d-flex align-items-center ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-10">
                            <div class="hero__caption">

                                <span>Empowering Youth. Strengthening Society. Building a Self-Reliant
                                    India.</span>


                                <h1>Dipesh Mishra</h1>
                                <h4>Visionary Entrepreneur | Youth Institution Builder</h4>

                                <p id="typewriter1">
                                </p>
                                {{-- <p>
                                    Visionary Entrepreneur | Youth Institution Builder <br>
                                    Founder & CEO – iYouth Pvt. Ltd. <br>
                                    Founder & President – Chhattisgarh Youth Federation <br>
                                    Founder & President – Chhattisgarh Adventure Sports Association
                                </p> --}}

                                <div class="hero__btn mt-4">
                                    <a href="" class="btn hero-btn ">Partner With Us</a>
                                    <a href="" class="btn border-btn ml-15 ">Explore Vision</a>
                                    {{-- <a href="#contact" class="btn border-btn ml-15">Contact Now</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABOUT SECTION -->
        <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class="col-lg-6 col-md-6" data-aos="fade-right">
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
                    <div class="col-lg-6 col-md-6">
                        <div class="about-me-img mb-30">
                            <img src="{{ asset('user/assets/img/dipesh_mishra_img.webp') }}" alt="Dipesh Mishra"
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

                    <!-- iYouth -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shadow1 p-2 single-cat1">
                            <div class="single-cat mb-50 my-2">
                                <div class="text-center">
                                    <img src="{{ asset('user/assets/img/iyouth_logo.webp') }}" alt="img"
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

                    <!-- CYF -->
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

                    <!-- CASA -->
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

                    <!-- Ongoing Projects -->
                    <h3>Ongoing Projects & Initiatives</h3>
                    <div class="row" data-aos="fade-up">
                        <div class="single-cat  col-12 col-md-4 " data-aos="fade-left">
                            <div class="my-2 p-3 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/cg_youth.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">

                                <ul class="mt-3">
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
                            <div class="my-2 p-3 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/1768205612.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">

                                <ul class="mt-3">
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
                            <div class="my-2 p-3 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/self_emp.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">

                                <ul class="mt-3">
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

                    <!-- Upcoming Projects -->
                    <h3>Upcoming Projects & Initiatives</h3>
                    <div class="row" data-aos="fade-up">
                        <div class="single-cat  col-12 col-md-4 " data-aos="fade-left">
                            <div class="p-3 my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/Restaurants_img.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3">
                                    <li style="color:black; font-size:16px;"><strong>Restaurants – </strong><a
                                            href="https://www.iyoutheats.in" target="_blank">iyoutheats.in</a></li>
                                    <li>
                                        Food and restaurant franchise opportunities driven by youth entrepreneurship.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat col-12 col-md-4 " data-aos="fade-left">
                            <div class="p-3 my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/1768206038.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3">
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
                            <div class="p-3 my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/fitness_img.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3">
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
                            <div class="p-3 my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/skill_dev_img.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3">
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
                            <div class="p-3 my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/cg_youth.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="m-3">
                                    <li><strong>Education – </strong><a href="https://www.iyouthsiksha.in"
                                            target="_blank">iyouthsiksha.in</a>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-cat col-12 col-md-4 " data-aos="fade-left">
                            <div class="p-3 my-2 shadow-sm bg-white minheight">
                                <img src="{{ asset('user/assets/img/cg_youth.webp') }}" alt="Dipesh Mishra"
                                    class="img-fluid mb-30">
                                <ul class="mt-3">
                                    <li><strong>Youth Awareness & Adventure – </strong><a href="https://www.cgyouth.in"
                                            target="_blank">cgyouth.in</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- CORE PILLARS -->
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
        {{-- PURPOSE --}}
        {{-- <section class="purpose-area purpose-padding bg-light">
            <div class="container">
                <div class="section-tittle mb-70">
                    <h2>THE BIGGER PURPOSE</h2>
                </div>

                <div class="row">

                    <div class="col-md-3 col-md-6">
                        <h5>India’s growth must be youth-driven.</h5>
                        <p>The goal is not only employment —
                            but employment creation.<br>
                            Not only empowerment —
                            but structured empowerment.<br>
                            Not only participation —
                            but leadership.
                        </p>
                    </div>

                    <div class="col-md-3 col-md-6">
                        <h5>The mission is to ensure:</h5>
                        <p>• Youth become skilled and confident<br>
                            • Society becomes safe and responsible<br>
                            • Women become economic leaders<br>
                            • Communities become self-reliant<br>
                            • India’s growth story is written by its youth
                        </p>
                    </div>

                </div>
            </div>
        </section> --}}

        <!-- VISION 2030 -->
        {{-- <section class="about-area section-paddingt30">
            <div class="container">
                <div class="section-tittle mb-50">
                    <h2>Vision 2030 Roadmap</h2>
                </div>

                <ul>
                    <li>Phase 1 – District-Level Skill & Youth Activation</li>
                    <li>Phase 2 – Enterprise & Distribution Expansion (State Level)</li>
                    <li>Phase 3 – National Youth Enterprise Network</li>
                    <li>Phase 4 – Integrated Youth Economic & Leadership Ecosystem</li>
                </ul>
            </div>
        </section> --}}


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

        <!-- PARTNERSHIP -->
        <section class="wantToWork-area w-padding2" id="partnership">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-8">
                        <div class="wantToWork-caption">
                            <h2>Let’s Build a Skilled, Safe & Self-Reliant India Together</h2>
                            <p>We invite collaboration with Government Institutions, NGOs, Manufacturers, Investors,
                                Educational Institutions & Youth Leaders.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a href="#contact" class="btn btn-black">Partner With Us</a>
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
                    <div class="col-lg-5">
                        <h4>Dipesh Mishra</h4>
                        <p>Chhattisgarh, India</p>
                        <p>Email: demo@email.com</p>
                        <p>Phone: +91-1234567891</p>
                    </div>

                    <div class="col-lg-7">
                        <form action="#" method="POST" class="contact-wrapper">
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

@endsection
