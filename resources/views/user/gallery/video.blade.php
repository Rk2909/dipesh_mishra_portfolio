@extends('user.layout.app')
@section('title', 'Gallery Video')

@section('content')

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


    <main>

        <!-- Hero -->
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">

                    <div class="hero-cap text-start">

                        <h2>Gallery</h2>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-start">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>

                                <li class="breadcrumb-item active">
                                    <a href="{{ route('gallery.video') }}">Video</a>
                                </li>
                            </ol>
                        </nav>

                    </div>

                </div>
            </div>
        </div>


        <div class="container my-5">

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

            <div class="d-flex justify-content-center mt-4">
                {{ $videos->links() }}
            </div>

        </div>


        <!-- Modal -->

        <div class="modal fade" id="videoModal" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-body p-0">

                        {{-- <iframe id="modalVideo" width="100%" height="500" src="" frameborder="0"
                            allowfullscreen>
                        </iframe> --}}
                        <iframe id="modalVideo" width="100%" height="500" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>

            </div>

        </div>


    </main>

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


@endsection
