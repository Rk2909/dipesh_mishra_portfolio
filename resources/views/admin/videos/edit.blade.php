@extends('admin.layout.app')

@section('title', 'Video Edit page')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Video</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Video</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Video</h5>

                            <form method="POST" action="{{route('admin.video.update',$video->id)}}" enctype="multipart/form-data">
                                @csrf

                                <!-- News Title -->
                                <div class="row mb-3 justify-content-center">
                                    {{-- <label class="col-sm-3 col-form-label">Title</label> --}}
                                    <div class="col-md-6">
                                        <input type="text" name="link" class="form-control"
                                            placeholder="Enter Youtube link" value="{{$video->link}}">
                                    </div>
                                </div>
                                
                               
                                <!-- Buttons -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('admin.video.index')}}" class="btn btn-secondary">back</a>
                               </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
