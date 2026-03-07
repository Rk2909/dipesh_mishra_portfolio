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
                            <h5 class="card-title">Add News</h5>

                            <form method="POST" action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data">
                                @csrf
                                <!-- News Title -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">News Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter news title" value="{{$blog->title}}">
                                    </div>
                                </div>

                                <!-- Short Description -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Short Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="short_description" class="form-control" rows="3" placeholder="Short description" >{{$blog->short_description}}</textarea>
                                    </div>
                                </div>

                                <!-- Full Content -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" rows="5" placeholder="Full content" >{{$blog->description}}</textarea>
                                    </div>
                                </div>

                                <!-- Image -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <img src="{{asset('storage/'.$blog->image)}}" alt="image" width="100px" class="m-3">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label" for="date">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="date" id="date" value="{{$blog->date}}">
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('blog.index')}}" class="btn btn-secondary">back</a>
                               </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
