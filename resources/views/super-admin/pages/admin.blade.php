@extends('super-admin.layout.master')
@section('content')


    {{-- create admin modal --}}
    <div class="modal" tabindex="-1" id="adminModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create Admin</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('superadmin.admin.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" value="" placeholder="write admin name">
                        </div>
                      </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="email" value="" placeholder="write email address">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" id="password">
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>



    @if ($users->isEmpty())
        <p>No admin users found.</p>
    @else
    <div class="container-lg">
        <div class="table">
            <div class="table-wrapper">
                <div class="table-title mt-3">
                    <div class="row">
                        <div class="col-sm-10"><h2>Admin</h2></div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-info add-new" data-bs-toggle="modal" data-bs-target="#adminModal">+ Add New</button>
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
