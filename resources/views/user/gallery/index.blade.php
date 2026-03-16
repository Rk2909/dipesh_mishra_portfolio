@extends('user.layout.app')
@section('title', 'Gallery')
@section('content')
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


    <main>

        <!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2 data-aos="fade-up">Gallery</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('gallery') }}">Photo</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row g-4">
                @forelse ($gallerys as $data)
                    <div class="col-md-4">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                            onclick="showImage(this)">
                            <img src="{{ asset('public/' . $data->image) }}">
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

                <div class="d-flex justify-content-center mt-4">
                    {{ $gallerys->links() }}
                </div>



                {{-- <div class="col-md-4">
                    <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
                        <img src="https://picsum.photos/600/400?2">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-4">
                    <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
                        <img src="https://picsum.photos/600/400?3">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>

        <!-- Modal -->

        <div class="modal fade" id="imageModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body p-0">
                        <img id="modalImage" src="" class="w-100">
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script>
        function showImage(el) {
            let img = el.querySelector("img").src;
            document.getElementById("modalImage").src = img;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
