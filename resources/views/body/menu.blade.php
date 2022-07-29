<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    <div class="user-profile text-center mt-3">
        <div class="">
            <img src="{{asset('backend/assets/images/users/avatar-1.png')}}" alt="" class="avatar-md rounded-circle">
        </div>
        <div class="mt-3">
            <h4 class="font-size-16 mb-1">
                @if (Auth::check())
                                    <span class="d-none d-xl-inline-block ms-1">{{Auth::user()->name}}</span>
                                    @endif
            </h4>
            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{route('home')}}" class="waves-effect">
                    <i class="ri-home-heart-line"></i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="{{route('user.index')}}" class="waves-effect">
                    <i class="ri-spy-fill"></i>
                    <span>Admin</span>
                </a>
            </li>

            <li>
                <a href="{{route('pelanggan.index')}}" class="waves-effect">
                    <i class=" ri-parent-fill"></i><span class="badge rounded-pill bg-success float-end">99+</span>
                    <span>User</span>
                </a>
            </li>

            <li>
                <a href="{{route('shop.index')}}" class="waves-effect">
                    <i class=" ri-parent-fill"></i><span class="badge rounded-pill bg-success float-end">99+</span>
                    <span>Pet Shop</span>
                </a>
            </li>

            <li>
                <a href="{{route('hewan.index')}}" class="waves-effect">
                    <i class="ri-bear-smile-fill"></i><span class="badge rounded-pill bg-success float-end">10</span>
                    <span>Animal</span>
                </a>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Category</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-starter.html">Accesories</a></li>
                    <li><a href="pages-timeline.html">Food & Drink</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html" class="waves-effect">
                    <i class="ri-alert-line"></i><span class="badge rounded-pill bg-success float-end">10</span>
                    <span>Laporan</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>