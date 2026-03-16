@extends('admin.layout.app')
@section('title', 'Video List page')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Video List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Video</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="text-end">
                <a href="{{ route('admin.video.create') }}" class="btn btn-primary mb-2">Create</a>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Video</h5>
                            

                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Links</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse ($videos as $data)
                                       <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{ $data->link }}</td>
                                            <td>
                                                <a href="{{ route('admin.video.edit', $data->id) }}">
                                                    <i class="fa-solid fa-pen-to-square" style="font-size:20px;"></i>
                                                </a>
                                                <a href="{{ route('admin.video.destroy', $data->id) }}" class="ms-3">
                                                    <i class="bi bi-trash-fill text-danger fs-5"></i>
                                                </a>                                                
                                            </td>
                                        </tr> 
                                    @empty
                                        <div class="text-center">
                                            <p>No Data</p>
                                        </div>
                                    @endforelse                                    
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>


                </div>
        </section>

    </main><!-- End #main -->





@endsection
