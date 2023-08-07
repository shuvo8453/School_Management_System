@extends('layout.master')
@section('content')
    <main class="content">
        <head>
            <title>Super Admin Dashboard</title>
        </head>

        <body>
            <!-- Main Content -->
            <div class="container mt-4">
                <h2>Welcome, {{ auth()->user()->name }}</h2>
                <div class="row mt-4">
                    <div class="col-lg-4">
                        <!-- User Management -->
                        <div class="card">
                            <div class="card-header">
                                User Management
                            </div>
                            <div class="card-body">
                                <p>Manage user accounts and roles.</p>
                                <a href="#" class="btn btn-primary">Manage Users</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Course Management -->
                        <div class="card">
                            <div class="card-header">
                                Course Management
                            </div>
                            <div class="card-body">
                                <p>Add, edit, and delete courses.</p>
                                <a href="#" class="btn btn-primary">Manage Courses</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Fee Management -->
                        <div class="card">
                            <div class="card-header">
                                Fee Management
                            </div>
                            <div class="card-body">
                                <p>Track fee collection and dues.</p>
                                <a href="#" class="btn btn-primary">Manage Fees</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </main>
@endsection
