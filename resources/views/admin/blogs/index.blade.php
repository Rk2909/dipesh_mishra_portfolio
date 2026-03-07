@extends('admin.layout.app')
@section('title', 'blog page')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">General</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Blogs </h5>
                            <a href="{{ route('blog.create') }}" class="btn btn-primary">+ Add Blog </a>

                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">short description</th>
                                        <th scope="col">description</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">image</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <th scope="row">{{ $blog->id }}</th>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->short_description }}</td>
                                            <td>{{ $blog->description }}</td>
                                            <td>{{ $blog->date }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="image"
                                                    width="100px">
                                            </td>
                                            <td>
                                                <a href="{{ route('blog.edit', $blog->id) }}">
                                                    <i class="bi bi-pencil-square fs-5"></i>
                                                </a>
                                                <a href="{{ route('blog.destroy', $blog->id) }}" class="ms-3">
                                                    <i class="bi bi-trash-fill text-danger fs-5"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>


                </div>
        </section>

    </main><!-- End #main -->





@endsection
