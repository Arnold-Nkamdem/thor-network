@extends('layouts.dashboard.app')

@section('content')
    <div class="card shadow-lg mx-4 mt-5">
        <div class="card-body p-3">
            <div class="row gx-2">
                <div class="col-auto">
                    <!-- Current Profile Photo" -->
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="profile_{{ Auth::user()->name }}" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="mt-3 h-100">
                        <h5 class="mb-0">
                            <span class="d-sm-inline d-none">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            <span class="d-sm-inline d-none">{{ Auth::user()->pseudo }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-auto my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Personnal Information</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form method="POST" action="{{ route('profile.update') }}" class="row">
                                @csrf
                                @method('patch')

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pseudo" class="form-control-label">Pseudo</label>
                                        <input id="pseudo" type="text" class="form-control" name="pseudo" placeholder="Pseudo" value="{{ Auth::user()->pseudo }}" required autocomplete="off">
                                    </div>
                                    @error('pseudo')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Email address</label>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ Auth::user()->email }}" required autocomplete="off">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name" class="form-control-label">First Name</label>
                                        <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name" value="{{ Auth::user()->first_name }}" required autocomplete="off">
                                    </div>
                                    @error('first_name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name" class="form-control-label">Last Name</label>
                                        <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ Auth::user()->name }}" required autocomplete="off">
                                    </div>
                                    @error('last_name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Change Password</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form method="POST" action="{{ route('profile.update') }}" class="row">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="form-control-label">Current password</label>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Your current password" required autocomplete="off">
                                        </div>
                                        @error('password')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="new_password" class="form-control-label">New password</label>
                                        <input id="new_password" type="password" class="form-control" name="new_password" placeholder="Your new password" required autocomplete="off">
                                    </div>
                                    @error('new_password')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirm_password" class="form-control-label">Confirm password</label>
                                        <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirm password" required autocomplete="off">
                                    </div>
                                    @error('confirm_password')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
