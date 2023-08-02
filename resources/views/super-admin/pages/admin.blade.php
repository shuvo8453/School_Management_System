@extends('super-admin.layout.master')
@section('content')
    @if ($users->isEmpty())
        <p>No admin users found.</p>
    @else
    <div class="container-lg">
        <div class="table">
            <div class="table-wrapper">
                <div class="table-title mt-3">
                    <div class="row">
                        <div class="col-sm-10"><h2>Admin <b>Details</b></h2></div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-info add-new">+ Add New</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                {{-- <a class="add" title="" data-toggle="tooltip" data-original-title="Add"><i class="material-icons"></i></a> --}}
                                <a class="edit" title="" data-toggle="tooltip" data-original-title="Edit">edit</a>
                                <a class="delete" title="" data-toggle="tooltip" data-original-title="Delete">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
@endsection
