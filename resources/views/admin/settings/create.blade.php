@extends('admin.layout.app')

@section('title', 'Settings')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <!-- <li class="breadcrumb-item active">Create</li> -->
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Settings</h5>

                            <form method="POST" action="{{ route('admin.settings.store') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- News Title -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Logo</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="logo" class="form-control" placeholder="Enter title"
                                            value="{{ $setting->logo ?? '' }}">
                                    </div>
                                </div>
                                  <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email"
                                            value="{{ $setting->email ?? '' }}">
                                    </div>
                                </div>
                                  <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Contact</label>
                                    <div class="col-sm-9">
                                        <input type="tel" name="contact" class="form-control" placeholder="Enter Contact"
                                            value="{{ $setting->contact ?? '' }}">
                                    </div>
                                </div>
                                 <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" placeholder="Enter address"
                                            value="{{ $setting->address ?? '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">twitter link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="twitter" class="form-control" placeholder="twitter link"
                                            value="{{ $setting->twitter ?? '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">facebook link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="facebook" class="form-control"
                                            placeholder="facebook link" value="{{ $setting->facebook ?? '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">website link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="website" class="form-control" placeholder="website link"
                                            value="{{ $setting->website ?? '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">instagram link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="instagram" class="form-control"
                                            placeholder="instagram link" value="{{ $setting->instagram ?? '' }}">
                                    </div>
                                </div>
                                 <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Youtube link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="youtube" class="form-control"
                                            placeholder="Youtube link" value="{{ $setting->youtube ?? '' }}">
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    {{-- <a href="{{route('admin.index')}}" class="btn btn-secondary">back</a> --}}
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        </script>
    @endif
@endsection
