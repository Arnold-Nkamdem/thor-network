@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid py-4 mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Posts list</h4>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">#ID</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Image</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Content</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Status</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Created At</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Updated At</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Id User</th>
                                        <th class="text-uppercase text-secondary text-start font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span>{{ $post->id }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="text-center">
                                                @if(isset($post->image_post))
                                                    <img src="{{ Storage::url($post->image_post) }}" class="avatar avatar-sm me-3" alt="{{ $post->id }}">
                                                @else
                                                    <span class="text-secondary opacity-7">None</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if(isset($post->text_post))
                                                <span>{{ $post->text_post }}</span>
                                            @else
                                                <span class="text-secondary opacity-7">None</span>
                                            @endif
                                        </td>
                                        @if($post->status == "enabled")
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-success">Enabled</span>
                                            </td>
                                        @elseif($post->status == "disabled")
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-secondary">Disabled</span>
                                            </td>
                                        @endif
                                        <td class="align-middle text-center">
                                            <span>{{ $post->created_at }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $post->updated_at }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $post->user_id }}</span>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex">
                                                @if($post->status == "enabled")
                                                    <a href="#changePostStatus-{{ $post->id }}" class="btn btn-warning btn-md me-3" data-bs-toggle="modal">Block</a>
                                                    <a href="#deletePost-{{ $post->id }}" class="btn btn-danger btn-md" data-bs-toggle="modal">Delete</a>
                                                @elseif($post->status == "disabled")
                                                    <a href="#changePostStatus-{{ $post->id }}" class="btn btn-primary btn-md me-3" data-bs-toggle="modal">Unblock</a>
                                                    <a href="#deletePost-{{ $post->id }}" class="btn btn-danger btn-md" data-bs-toggle="modal">Delete</a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Block or Unblock post modal -->
                                    @include('modals.dashboard.changePostStatus')

                                    <!-- Delete post modal -->
                                    @include('modals.dashboard.deletePost')

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
