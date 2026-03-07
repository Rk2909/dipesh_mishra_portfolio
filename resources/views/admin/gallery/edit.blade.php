@extends('admin.layout.app')

@section('title', 'blog create page')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add News</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">News</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add images</h5>

                            <form method="POST" action="{{route('gallery.update',$gallery->id)}}" enctype="multipart/form-data">
                                @csrf

                                <!-- News Title -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter news title" value="{{$gallery->title}}">
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <img src="{{asset('storage/'.$gallery->image)}}" alt="image" width="60px" class="m-3">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <!-- Buttons -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('gallery.index')}}" class="btn btn-secondary">back</a>
                               </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
