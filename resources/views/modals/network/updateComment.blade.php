<!-- Update comment modal -->
<div id="updateComment-{{ $comment->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('comments.update', $comment->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div>
                        <input type="text" id="comment" name="comment" class="form-control rounded-4" value="{{ $comment->comment }}" required autofocus/>
                        @error('comment')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH /opt/lampp/htdocs/my_projects/IncH_Class/thor-network/resources/views/modals/comments/updateComment.blade.php ENDPATH**/ ?>
