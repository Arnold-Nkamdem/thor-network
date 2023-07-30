@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid py-4 mt-5">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Users</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $users }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div>
                                    <i class="fa fa-users me-sm-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Posts</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $posts }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div>
                                    <i class="fa fa-newspaper me-sm-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Comments</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $comments }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div>
                                    <i class="fa fa-comments me-sm-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Admin Users</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $admins }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div>
                                    <i class="fa fa-users me-sm-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
