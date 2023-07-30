<!-- Update user modal -->
<div id="updateUser-{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update User Information</h5>
                <button type="button" class="btn-close bg-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name" value="{{ $user->first_name }}" required autofocus autocomplete="off">
                        @error('first_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ $user->last_name }}" required autocomplete="off">
                        @error('last_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="pseudo" type="text" class="form-control" name="pseudo" placeholder="Pseudo" value="{{ $user->pseudo }}" required autocomplete="off">
                        @error('pseudo')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ $user->email }}" required autocomplete="off">
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-4">
                        <span class="input-group-text text-body"><i class="fa fa-hashtag" aria-hidden="true"></i></span>
                        <select name="role" id="role" class="form-select">
                            <option value="{{ $user->role }}">{{ $user->role }}</option>
                            @if($user->role == "admin")
                                <option value="user">user</option>
                            @else
                                <option value="admin">admin</option>
                            @endif
                        </select>
                        @error('role')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
