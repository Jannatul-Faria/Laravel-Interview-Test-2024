<div class="dashboard__left dashboard-left-content">
    <div class="dashboard__left__main">
        <div class="dashboard__left__close close-bars"><i class="fa-solid fa-times"></i></div>
        <div class="dashboard__top">
            <div class="dashboard__top__logo">
                <a href="{{ url('/') }}">
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
                            <a href="{{ url('/') }}">Default</a>
                        </li>
                    </ul>
                </li>
                <li class="dashboard__bottom__list__item has-children">
                    <a href="{{ route('form') }}"><span class="icon_title">Form</span></a>
                </li>

                <li class="dashboard__bottom__list__item has-children ">
                    <a href="javascript:void(0)"><i class="material-symbols-outlined">Table</i> <span class="icon_title">Tables</span></a>
                    <ul class="submenu">
                        <li class="dashboard__bottom__list__item selected">
                            <a href="{{ route('countries.index') }}"><span class="icon_title">Countries</span></a>
                        </li>
                        <li class="dashboard__bottom__list__">
                            <a href="{{ route('states.index') }}"><span class="icon_title">States</span></a>
                        </li>
                        <li class="dashboard__bottom__list__">
                            <a href="{{ route('cities.index') }}"><span class="icon_title">Cities</span></a>
                        </li>
                    </ul>
                </li>

              
                <li class="dashboard__bottom__list__item has-children">
                    <a href="javascript:void(0)"><i class="material-symbols-outlined">group</i> <span class="icon_title">User</span></a>
                    <ul class="submenu">
                        <li class="dashboard__bottom__list__item">
                            <a href="sign_in.html">Login</a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="sign_up.html">Register</a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="forgot_password.html">Reset Password</a>
                        </li>
                        <li class="dashboard__bottom__list__item">
                            <a href="mail_varification.html">Mail Varification</a>
                        </li>
                    </ul>
                </li>
                <li class="dashboard__bottom__list__item">
                    <a href="javascript:void(0)"><i class="material-symbols-outlined">logout</i> <span class="icon_title">Log Out</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>