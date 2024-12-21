<div class="dashboard__left dashboard-left-content">
    <div class="dashboard__left__main">
        <div class="dashboard__left__close close-bars"><i class="fa-solid fa-times"></i></div>
        <div class="dashboard__top">
            <div class="dashboard__top__logo">
                <a href="{{ route('dashboard') }}">
                    <img class="main_logo px-3" src="{{ asset ('assets') }}/img/logo.webp" alt="logo" >
                    <img class="iocn_view__logo" src="{{ asset ('assets') }}/img/Favicon.png" alt="logo_icon">
                </a>
            </div>
        </div>
        <div class="dashboard__bottom mt-3">
            <div class="dashboard__bottom__search mb-3">
                <input class="form--control  w-100" type="text" placeholder="Search here..." id="search_sidebarList">
            </div>
            <ul class="dashboard__bottom__list dashboard-list">
                <li class="dashboard__bottom__list__item has-children show open active">
                    <a href="javascript:void(0)"><i class="material-symbols-outlined">dashboard</i> <span class="icon_title">Dashboard</span></a>
                    <ul class="submenu">
                        <li class="dashboard__bottom__list__item selected">
                            <a href="{{ route('dashboard') }}">Default</a>
                        </li>
                    </ul>
                </li>
                <li class="dashboard__bottom__list__item has-children">
                    <a href=""><span class="icon_title">Form</span></a>
                </li>

                <li class="dashboard__bottom__list__item has-children ">
                    <a href="javascript:void(0)"><i class="material-symbols-outlined">Table</i> <span class="icon_title">Tables</span></a>
                    <ul class="submenu">
                        <li class="dashboard__bottom__list__item">
                            <a href="{{ url('countries') }}"><span class="icon_title">Countries</span></a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="{{ url('states') }}"><span class="icon_title">States</span></a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="{{ url('cities') }}"><span class="icon_title">Cities</span></a>
                        </li>
                    </ul>
                </li>

              
                <li class="dashboard__bottom__list__item has-children">
                    <a href="javascript:void(0)"><i class="material-symbols-outlined">Group</i> <span class="icon_title">User</span></a>
                    <ul class="submenu">
                        <li class="dashboard__bottom__list__item">
                            <a href="{{ route('profile.edit') }}">Profile</a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="{{ route('password.request') }}">Reset Password</a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="mail_varification.html">Mail Varification</a>
                        </li>
                    </ul>
                </li>
                <li class="dashboard__bottom__list__item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                            this.closest('form').submit();"><i class="material-symbols-outlined">logout</i> <span class="icon_title">Log Out</span></a>
                    </form>
                   
                </li>
            </ul>
        </div>
    </div>
</div>