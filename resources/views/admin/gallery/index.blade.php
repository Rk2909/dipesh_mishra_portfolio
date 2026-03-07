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
                            <h5 class="card-title">Gallery </h5>
                            <a href="{{ route('gallery.create') }}" class="btn btn-primary">+ Add images </a>

                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">images</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $gallery)
                                        <tr>
                                            <th scope="row">{{ $gallery->id }}</th>
                                            <td>{{ $gallery->title }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="image" width="60px">
                                            </td>
                                            <td>
                                                <a href="{{route('gallery.edit',$gallery->id)}}">
                                                    <i class="fa-solid fa-pen-to-square" style="font-size:20px;"></i>
                                                </a>
                                                <a href="{{route('gallery.destroy',$gallery->id)}}" class="ms-3">
                                                    <i class="bi bi-trash-fill text-danger fs-5"></i>
                                                  </a>
                                                {{-- <form action="#" method="GET" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                        <form action="#" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form> --}}
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
