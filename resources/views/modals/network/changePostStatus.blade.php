<!-- Change post status modal -->
<div id="changePostStatus-{{ $post->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @if($post->status == "enabled")
                    <h5 class="modal-title">Block post <span class="text-success">{{ $post->id }}</span></h5>
                @else
                    <h5 class="modal-title">Unblock post <span class="text-success">{{ $post->id }}</span></h5>
                @endif

                <button type="button" class="btn-close bg-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('posts.changeStatus', $post->id) }}">
                    @csrf
                    @method('patch')

                    @if($post->status == "enabled")
                        <div class="text-center mt-4 mb-4">
                            <p>Do you want to block this post?</p>
                        </div>
                    @else
                        <div class="text-center mt-4 mb-4">
                            <p>Do you want to unblock this post?</p>
                        </div>
                    @endif

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
