@extends('user.layout.app')
@section('title', 'blog page')
@section('content')
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


    <main>

        <!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Blog</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('blogs') }}">Blog</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <div class="container py-5">

            {{-- <h2 class="text-center mb-5">Latest Blogs</h2> --}}

            <div class="row g-4">

                <!-- BLOG 1 -->
                @forelse ($blogs as $data)
                    <div class="col-md-4">

                        <div class="blog-card">

                            <div class="blog-image">

                                <img src="{{ asset('public/' . $data->image) }}">

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
                <div class="d-flex justify-content-center mt-4">
                    {{ $blogs->links() }}
                </div>


            </div>

        </div>
        <!--================Blog Area =================-->

    </main>



@endsection
