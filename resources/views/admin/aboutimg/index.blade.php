@extends('admin.layout.app')

@section('title', 'About page')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add About</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">About</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add About</h5>

                            <form method="POST" action="{{route('admin.about.store')}}" enctype="multipart/form-data">
                                @csrf

                                <!-- News Title -->
                                <div class="row mb-3 justify-content-center">
                                    {{-- <label class="col-sm-3 col-form-label">Title</label> --}}
                                    <div class="col-md-6 text-center">
                                        <img src="{{asset('about/'.optional($about)->profile)}}" alt="img" width="100px">
                                        <input type="file" name="profile" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                               </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
