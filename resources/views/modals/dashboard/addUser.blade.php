<!-- Add user modal -->
<div id="addUser" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="btn-close bg-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name" required autofocus autocomplete="off">
                        @error('first_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name" required autocomplete="off">
                        @error('last_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="pseudo" type="text" class="form-control" name="pseudo" placeholder="Pseudo" required autocomplete="off">
                        @error('pseudo')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email address" required autocomplete="off">
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-key" aria-hidden="true"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autocomplete="off">
                        @error('password')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-body"><i class="fa fa-key" aria-hidden="true"></i></span>
                        <input id="confirm_password" type="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm Password" required autocomplete="off">
                        @error('confirm_password')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add user</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
