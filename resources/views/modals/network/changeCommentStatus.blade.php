<!-- Change comment status modal -->
<div id="changeCommentStatus-{{ $comment->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @if($comment->status == "enabled")
                    <h5 class="modal-title">Block comment <span class="text-success">{{ $comment->id }}</span></h5>
                @else
                    <h5 class="modal-title">Unblock comment <span class="text-success">{{ $comment->id }}</span></h5>
                @endif

                <button type="button" class="btn-close bg-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('comments.changeStatus', $comment->id) }}">
                    @csrf
                    @method('patch')

                    @if($comment->status == "enabled")
                        <div class="text-center mt-4 mb-4">
                            <p>Do you want to block this comment?</p>
                        </div>
                    @else
                        <div class="text-center mt-4 mb-4">
                            <p>Do you want to unblock this comment?</p>
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
