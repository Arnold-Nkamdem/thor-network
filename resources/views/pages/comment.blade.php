@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid py-4 mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Comments list</h4>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">#ID</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Content</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Status</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Created At</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Updated At</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Id POST</th>
                                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Id User</th>
                                        <th class="text-uppercase text-secondary text-start font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span>{{ $comment->id }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if(isset($comment->comment))
                                                <span>{{ $comment->comment }}</span>
                                            @else
                                                <span class="text-secondary opacity-7">None</span>
                                            @endif
                                        </td>
                                        @if($comment->status == "enabled")
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-success">Enabled</span>
                                            </td>
                                        @elseif($comment->status == "disabled")
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-secondary">Disabled</span>
                                            </td>
                                        @endif
                                        <td class="align-middle text-center">
                                            <span>{{ $comment->created_at }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $comment->updated_at }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $comment->post_id }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span>{{ $comment->user_id }}</span>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex">
                                                @if($comment->status == "enabled")
                                                    <a href="#changeCommentStatus-{{ $comment->id }}" class="btn btn-warning btn-md me-3" data-bs-toggle="modal">Block</a>
                                                    <a href="#deleteComment-{{ $comment->id }}" class="btn btn-danger btn-md" data-bs-toggle="modal">Delete</a>
                                                @elseif($comment->status == "disabled")
                                                    <a href="#changeCommentStatus-{{ $comment->id }}" class="btn btn-primary btn-md me-3" data-bs-toggle="modal">Unblock</a>
                                                    <a href="#deleteComment-{{ $comment->id }}" class="btn btn-danger btn-md" data-bs-toggle="modal">Delete</a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Block or Unblock comment modal -->
                                    @include('modals.dashboard.changeCommentStatus')

                                    <!-- Delete comment modal -->
                                    @include('modals.dashboard.deleteComment')

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
