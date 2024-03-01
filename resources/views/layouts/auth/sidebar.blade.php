<aside class="sidebar-wrapper">
    <div class="sidebar-header">
        <div class="logo-icon">
            <a href="{{ route('front.welcome') }}">
                <img src="{{ asset('dashboard/assets/images/logo.png') }}" class="logo-img w-75" alt="">
            </a>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav" data-simplebar="true">

        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ route('auth') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            @hasrole('admin')
                <x-admin.sidebar />
            @endhasrole

            @hasrole('user')
                <x-user.sidebar />
            @endhasrole

        </ul>
        <!--end navigation-->
    </div>
    <div class="sidebar-bottom gap-4">
        <div class="dark-mode">
            <a href="javascript:;" class="footer-icon dark-mode-icon">
                <i class="material-icons-outlined">dark_mode</i>
            </a>
        </div>

    </div>
</aside>
