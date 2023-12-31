<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('logo\stihslogo.png') }}" alt="logo-sm" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo\stihslogo.png') }}" alt="logo-dark" height="50">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('logo\stihslogo.png') }}" alt="logo-sm-light" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo\stihslogo.png') }}" alt="logo-light" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="px-3 btn btn-sm font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="align-middle ri-menu-2-line"></i>
            </button>

            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>
        </div>

        <div class="dropdown d-inline-block user-dropdown">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user"
                    src="{{ !empty(old('profile_image')) ? url('upload/profile_images/' . old('profile_image')) : (!empty(auth()->user()->profile_image) ? url('upload/profile_images/' . auth()->user()->profile_image) : url('upload/no_image.jpg')) }}"
                    alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1"> {{ auth()->user()->name }} </span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>

            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                        class="align-middle ri-user-line me-1"></i> Profile</a>
                <a class="dropdown-item" href="{{ route('change.password') }}"><i
                        class="align-middle ri-user-line me-1"></i> Change Password</a>
                <a class="dropdown-item d-block" href="#"><span
                        class="mt-1 badge bg-success float-end">11</span><i
                        class="align-middle ri-settings-2-line me-1"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="align-middle ri-lock-unlock-line me-1"></i> Lock
                    screen</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                        class="align-middle ri-shut-down-line me-1 text-danger"></i> Logout</a>
            </div>
        </div>
    </div>
</header>
