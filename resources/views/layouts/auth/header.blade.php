<!--start header-->
<header class="top-header">
    <nav class="navbar navbar-expand align-items-center gap-4">
        <div class="btn-toggle">
            <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
        </div>
        <div class="search-bar flex-grow-1">
            <div class="position-relative">
                <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text"
                    placeholder="Search">
                <span
                    class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
                <span
                    class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
                <div class="search-popup p-3">
                    <div class="card rounded-4 overflow-hidden">
                        <div class="card-header d-lg-none">
                            <div class="position-relative">
                                <input class="form-control rounded-5 px-5 mobile-search-control" type="text"
                                    placeholder="Search">
                                <span
                                    class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                                <span
                                    class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
                            </div>
                        </div>
                        <div class="card-body search-content">
                            <p class="search-title">Recent Searches</p>
                            <div class="d-flex align-items-start flex-wrap gap-2 kewords-wrapper">
                                <a href="javascript:;" class="kewords"><span>Angular Template</span><i
                                        class="material-icons-outlined fs-6">search</i></a>
                                <a href="javascript:;" class="kewords"><span>Dashboard</span><i
                                        class="material-icons-outlined fs-6">search</i></a>
                                <a href="javascript:;" class="kewords"><span>Admin Template</span><i
                                        class="material-icons-outlined fs-6">search</i></a>
                                <a href="javascript:;" class="kewords"><span>Bootstrap 5 Admin</span><i
                                        class="material-icons-outlined fs-6">search</i></a>
                                <a href="javascript:;" class="kewords"><span>Html eCommerce</span><i
                                        class="material-icons-outlined fs-6">search</i></a>
                                <a href="javascript:;" class="kewords"><span>Sass</span><i
                                        class="material-icons-outlined fs-6">search</i></a>
                                <a href="javascript:;" class="kewords"><span>laravel 9</span><i
                                        class="material-icons-outlined fs-6">search</i></a>
                            </div>
                            <hr>
                            <p class="search-title">Tutorials</p>
                            <div class="search-list d-flex flex-column gap-2">
                                <div class="search-list-item d-flex align-items-center gap-3">
                                    <div class="list-icon">
                                        <i class="material-icons-outlined fs-5">play_circle</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 search-list-title ">Wordpress Tutorials</h5>
                                    </div>
                                </div>
                                <div class="search-list-item d-flex align-items-center gap-3">
                                    <div class="list-icon">
                                        <i class="material-icons-outlined fs-5">shopping_basket</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 search-list-title">eCommerce Website Tutorials</h5>
                                    </div>
                                </div>

                                <div class="search-list-item d-flex align-items-center gap-3">
                                    <div class="list-icon">
                                        <i class="material-icons-outlined fs-5">laptop</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 search-list-title">Responsive Design</h5>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <p class="search-title">Members</p>

                            <div class="search-list d-flex flex-column gap-2">
                                <div class="search-list-item d-flex align-items-center gap-3">
                                    <div class="memmber-img">
                                        <img src="{{ asset('dashboard/assets/images/avatars/01.png') }}" width="32"
                                            height="32" class="rounded-circle" alt="">
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 search-list-title ">Andrew Stark</h5>
                                    </div>
                                </div>

                                <div class="search-list-item d-flex align-items-center gap-3">
                                    <div class="memmber-img">
                                        <img src="{{ asset('dashboard/assets/images/avatars/02.png') }}" width="32"
                                            height="32" class="rounded-circle" alt="">
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 search-list-title ">Snetro Jhonia</h5>
                                    </div>
                                </div>

                                <div class="search-list-item d-flex align-items-center gap-3">
                                    <div class="memmber-img">
                                        <img src="{{ asset('dashboard/assets/images/avatars/03.png') }}" width="32"
                                            height="32" class="rounded-circle" alt="">
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 search-list-title">Michle Clark</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer text-center bg-transparent">
                            <a href="javascript:;" class="btn w-100">See All Search Results</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="navbar-nav gap-1 nav-right-links align-items-center">
            <li class="nav-item d-lg-none mobile-search-btn">
                <a class="nav-link" href="javascript:;"><i class="material-icons-outlined">search</i></a>
            </li>

            @hasrole('admin')
                <x-admin.notifications />
            @endhasrole

            @hasrole('user')
                <x-user.notifications />
            @endhasrole

            <li class="nav-item dropdown">
                <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                    <img src="{{ auth()->user()->mediaUrl() == null ? asset('dashboard/assets/images/avatars/01.png') : auth()->user()->mediaUrl() }}"
                        class="rounded-circle p-1 border" width="45" height="45">
                </a>
                <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                    <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                        <div class="text-center">
                            <img src="{{ auth()->user()->mediaUrl() == null ? asset('dashboard/assets/images/avatars/01.png') : auth()->user()->mediaUrl() }}"
                                class="rounded-circle p-1 shadow mb-3" width="90" height="90" alt="">
                            <h5 class="user-name mb-0 fw-bold">Hello, {{ auth()->user()->name }}</h5>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('myprofile') }}"><i
                            class="material-icons-outlined">person_outline</i>Profile</a>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                        href="{{ route('change_password') }}"><i
                            class="material-icons-outlined">local_bar</i>Setting</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('logout') }}"><i
                            class="material-icons-outlined">power_settings_new</i>Logout</a>
                </div>
            </li>
        </ul>

    </nav>
</header>
<!--end top header-->

@hasrole('user')
    <!--start cart-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
        <div class="offcanvas-header border-bottom h-70">
            <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body p-0">
            <div class="order-list">
                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('dashboard/assets/images/orders/08.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Goldan Watch</h5>
                        <p class="mb-0 order-price">$689</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end cart-->
@endhasrole
