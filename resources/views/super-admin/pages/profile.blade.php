@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Profile</h1>
                <a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                    Get more page examples
                </a>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile Details</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ asset('admin/img/avatars/avatar-4.jpg') }}" alt="Christina Mason"
                                class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title mb-0">Christina Mason</h5>
                            <div class="text-muted mb-2">Lead Developer</div>
                        </div>
                        <hr class="my-0" />
                        {{-- <div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">San Francisco, SA</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Boston</a></li>
									</ul>
								</div> --}}
                        {{-- <hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="#">staciehall.co</a></li>
										<li class="mb-1"><a href="#">Twitter</a></li>
										<li class="mb-1"><a href="#">Facebook</a></li>
										<li class="mb-1"><a href="#">Instagram</a></li>
										<li class="mb-1"><a href="#">LinkedIn</a></li>
									</ul>
								</div> --}}
                    </div>
                </div>

                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile Information</h5>
                            <hr/>
                        </div>

                        <form action="">
                            <div class="card-body h-100">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <div class="row mb-3">
                                            <label for="" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="name"
                                                    name="name" placeholder="" value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-2 col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="{{ auth()->user()->email }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-2 col-form-label-lg">Profile Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="file" name="attachments"
                                                    placeholder="{{ auth()->user()->email }}">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
