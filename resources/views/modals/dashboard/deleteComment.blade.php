<!-- Delete comment modal -->
<div id="deleteComment-{{ $comment->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete comment <span class="text-success">{{ $comment->id }}</span></h5>
                <button type="button" class="btn-close bg-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('comments.destroy1', $comment->id) }}">
                    @csrf
                    @method('delete')

                    <div class="text-center mt-4 mb-5">
                        <p class="text-center">Do you want to delete this comment?</p>
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
