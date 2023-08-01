<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control form-control-sm" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown d-flex align-items-center">
                    <a href="#" class="nav-link text-white font-weight-bold px-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ (Auth::user()->profile_photo_path !== null) ? Storage::url(Auth::user()->profile_photo_path) : './images/user_circle.svg'  }}" class="avatar rounded-circle avatar-sm me-sm-1" alt="{{ Auth::user()->first_name }}-profile_photo">
                        <span class="d-sm-inline d-none me-3">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="{{ route('profile.show') }}">
                            Profile
                            </a>
                        </li>
                        <li class="mb-0">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input type="submit" class="dropdown-item bg-transparent text-danger border-0" value="Log Out">
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="#" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="#">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="{{ asset('images/dashboard/img/team-2.jpg') }}" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
