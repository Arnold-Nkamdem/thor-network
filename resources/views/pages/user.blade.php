@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <!-- Add user button -->
                <div class="col-2 text-end">
                    <a href="#addUser" class="card bg-success btn btn-success" data-bs-toggle="modal">Add User</a>
                </div>
                @include('modals.dashboard.addUser')

                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Users list</h4>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">#ID</th>
                                        <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">Photo</th>
                                        <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">First Name</th>
                                        <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">Last Name</th>
                                        <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">Pseudo</th>
                                        <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">Email address</th>
                                        <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">Role</th>
                                        <th class="text-uppercase text-start text-secondary font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr class="">
                                        <td class="align-middle text-center">
                                            <span>{{ $user->id }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="text-center">
                                                <img src="{{ Storage::url($user->profile_photo_path) }}" class="avatar avatar-sm me-3" alt="{{ $user->first_name }}-profile_photo">
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $user->first_name }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $user->last_name }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $user->pseudo }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $user->email }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $user->role }}</span>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex" {{ $user->id }}>
                                                <a href="#updateUser-{{ $user->id }}" class="btn btn-primary btn-md me-3" data-bs-toggle="modal">Edit</a>
                                                <a href="#deleteUser-{{ $user->id }}" class="btn btn-danger btn-md" data-bs-toggle="modal">Delete</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Update user modal -->
                                    @include('modals.dashboard.updateUser')
                                    <!-- Delete user modal -->
                                    @include('modals.dashboard.deleteUser')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
