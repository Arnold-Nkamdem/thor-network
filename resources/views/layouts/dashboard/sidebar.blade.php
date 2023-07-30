<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header mb-5">
      <div>
        <a class="" href="{{ route('network') }}">
          <img src="{{ asset('images/thor_network_logo.svg') }}" class="w-100 h-100" alt="main_logo">
        </a>
      </div>
    </div>
    <hr class="border border-dark border-1">
    <div class="w-auto ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('dashboard') }}">
                    <div>
                        <i class="fa fa-dashboard me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('users.index') }}">
                    <div>
                        <i class="fa fa-users me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('posts.index') }}">
                    <div>
                        <i class="fa fa-newspaper me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Posts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('comments.index') }}">
                    <div>
                        <i class="fa fa-comments me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Comments</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-0 text-xs font-weight-bolder opacity-6">Account page</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('profile.show') }}">
                    <div>
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenav-footer mx-1">
        <div class="card" style="margin-top: 100px"></div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <form class="nav-link " action="{{ route('logout') }}" method="post">
                    @csrf

                    <button type="submit" class="btn bg-transparent border-0">
                        <i class="fa fa-sign-out me-sm-1 text-danger"></i>
                        <span class="nav-link-text ms-1 text-danger">Disconnect</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
