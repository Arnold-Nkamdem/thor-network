<!-- Delete user modal -->
<div id="deleteUser-{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete User</h5>
                <button type="button" class="btn-close bg-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                    @csrf
                    @method('delete')

                    <div class="text-center mt-5 mb-5">
                        <p class="text-center">Do you want to detele the user N°
                            <span class="text-success">{{ $user->id }}</span>
                            <span class="text-primary">{{ $user->first_name }} {{ $user->last_name }}</span>?
                        </p>
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
