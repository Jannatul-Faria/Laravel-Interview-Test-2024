@extends('layout.app')
@section('content')

   
    <div class="dashboard__right">
        <div class="dashboard__header single_border_bottom">
            <div class="row gx-4 align-items-center justify-content-between">
                <div class="col-sm-2">
                    <div class="dashboard__header__left">
                        <div class="dashboard__header__left__inner">
                            <span class="dashboard__sidebarIcon d-none d-lg-block"></span>
                            <span class="dashboard__sidebarIcon__mobile sidebar-icon d-lg-none"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <div class="dashboard__header__middle">
                        <div class="dashboard__header__middle__search">
                            <div class="dashboard__header__middle__search__item">
                                <input class="form--control radius-5" type="text" placeholder="Search anything...">
                                <button class="search_icon"><i class="material-symbols-outlined">search</i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="dashboard__header__right">
                        <div class="dashboard__header__right__flex">
                            <div class="dashboard__header__right__item responsive_search">
                                <a href="javascript:void(0)" class="dashboard__search__icon search__click"> <i class="material-symbols-outlined">search</i> </a>
                                <div class="search__wrapper">
                                    <form class="search__wrapper__form" action="#">
                                        <div class="search__wrapper__close"> <i class="fa-solid fa-times"></i> </div>
                                        <input class="search__wrapper__input" type="text" placeholder="Search Here.....">
                                        <button type="submit"><i class="material-symbols-outlined">search</i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="dashboard__header__right__item">
                                <a href="javascript:void(0)" class="dashboard__header__notification__icon lightMode" id="mode_change"> <i class="material-symbols-outlined">wb_sunny</i> </a>
                            </div>
                            <div class="dashboard__header__right__item">
                                <div class="dashboard__header__notification">
                                    <a href="javascript:void(0)" class="dashboard__header__notification__icon"> <i class="material-symbols-outlined">notifications</i> </a>
                                    <span class="dashboard__header__notification__number">9</span>
                                    <div class="dashboard__header__notification__wrap">
                                        <h6 class="dashboard__header__notification__wrap__title"> Notifications </h6>
                                        <ul class="dashboard__header__notification__wrap__list">
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification One </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 4 hours ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Two </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 8 hours ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Three </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 1 day ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Four </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 3 day ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Five </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 7 day ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0)" class="dashboard__header__notification__wrap__btn"> See All Notification </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__header__right__item">
                                <div class="dashboard__header__author">
                                    <a href="javascript:void(0)" class="dashboard__header__author__flex flex-btn">
                                        <div class="dashboard__header__author__thumb">
                                            <img src="{{ asset ('assets') }}/img/author_nav_new.jpg" alt="authorImg">
                                        </div>
                                    </a>
                                    <div class="dashboard__header__author__wrapper">
                                        <div class="dashboard__header__author__wrapper__list">
                                            <a href="javascript:void(0)" class="dashboard__header__author__wrapper__list__item">Sign In</a>
                                            <a href="javascript:void(0)" class="dashboard__header__author__wrapper__list__item">Sign Up</a>
                                            <a href="javascript:void(0)" class="dashboard__header__author__wrapper__list__item">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard__body posPadding">
            <div class="dashboard__inner">
                <div class="dashboard__inner__item">
                    <div class="dashboard__inner__item__flex">
                        <div class="dashboard__inner__item__left bodyItemPadding">
                            <div class="dashboard__inner__header">
                                <div class="dashboard__inner__header__flex">
                                    <div class="dashboard__inner__header__left">
                                        <h4 class="dashboard__inner__header__title">Good Morning, Md Zahid</h4>
                                        <p class="dashboard__inner__header__para">Manage your dashboard here</p>
                                    </div>
                                    <div class="dashboard__inner__header__right">
                                        <div class="dashboard__inner__item__right recent_activities">
                                            <div class="btn-wrapper">
                                                <a href="javascript:void(0)" class="cmn_btn btn_small radius-5" id="activity_btn">Show Activities</a>
                                            </div>
                                            <div class="dashboard__recentActivities bg__white padding-20">
                                                <div class="dashboard__recentActivities__flex">
                                                    <div class="dashboard__recentActivities__left">
                                                        <h5 class="dashboard__recentActivities__title">Recent Activities</h5>
                                                    </div>
                                                    <span class="dashboard__recentActivities__close"><i class="material-symbols-outlined">close</i></span>
                                                </div>
                                                <div class="dashboard__recentActivities__inner mt-4">
                                                    <div class="dashboard__recentActivities__item">
                                                        <div class="dashboard__recentActivities__single">
                                                            <div class="dashboard__recentActivities__single__flex">
                                                                <div class="dashboard__recentActivities__single__thumb">
                                                                    <a href="javascript:void(0)"><img src="{{ asset ('assets') }}/img/recent_activities/activities1.jpg" alt="activities"></a>
                                                                </div>
                                                                <div class="dashboard__recentActivities__single__contents">
                                                                    <h6 class="dashboard__recentActivities__single__title"><a href="javascript:void(0)">Gown party wear is sold 01 piece</a></h6>
                                                                    <p class="dashboard__recentActivities__single__time mt-2">10 Min ago</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dashboard__recentActivities__item">
                                                        <div class="dashboard__recentActivities__single">
                                                            <div class="dashboard__recentActivities__single__flex">
                                                                <div class="dashboard__recentActivities__single__thumb">
                                                                    <a href="javascript:void(0)"><img src="{{ asset ('assets') }}/img/recent_activities/activities2.jpg" alt="activities"></a>
                                                                </div>
                                                                <div class="dashboard__recentActivities__single__contents">
                                                                    <h6 class="dashboard__recentActivities__single__title"><a href="javascript:void(0)">This product is running low on stock</a></h6>
                                                                    <p class="dashboard__recentActivities__single__time mt-2">1 Hours ago</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dashboard__recentActivities__item">
                                                        <div class="dashboard__recentActivities__single">
                                                            <div class="dashboard__recentActivities__single__flex">
                                                                <div class="dashboard__recentActivities__single__thumb">
                                                                    <a href="javascript:void(0)"><img src="{{ asset ('assets') }}/img/recent_activities/activities3.jpg" alt="activities"></a>
                                                                </div>
                                                                <div class="dashboard__recentActivities__single__contents">
                                                                    <h6 class="dashboard__recentActivities__single__title"><a href="javascript:void(0)">This product is added to stock</a></h6>
                                                                    <p class="dashboard__recentActivities__single__time mt-2">2 Hours ago</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dashboard__recentActivities__item">
                                                        <div class="dashboard__recentActivities__single">
                                                            <div class="dashboard__recentActivities__single__flex">
                                                                <div class="dashboard__recentActivities__single__thumb">
                                                                    <a href="javascript:void(0)"><img src="{{ asset ('assets') }}/img/recent_activities/activities4.jpg" alt="activities"></a>
                                                                </div>
                                                                <div class="dashboard__recentActivities__single__contents">
                                                                    <h6 class="dashboard__recentActivities__single__title"><a href="javascript:void(0)">Rafael is moved to Elgine St. Branch</a></h6>
                                                                    <p class="dashboard__recentActivities__single__time mt-2">3 Hours ago</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dashboard__recentActivities__item">
                                                        <div class="dashboard__recentActivities__single">
                                                            <div class="dashboard__recentActivities__single__flex">
                                                                <div class="dashboard__recentActivities__single__thumb">
                                                                    <a href="javascript:void(0)"><img src="{{ asset ('assets') }}/img/recent_activities/activities5.jpg" alt="activities"></a>
                                                                </div>
                                                                <div class="dashboard__recentActivities__single__contents">
                                                                    <h6 class="dashboard__recentActivities__single__title"><a href="javascript:void(0)">Robert F is added in Herbert St. Branch as General Staff</a></h6>
                                                                    <p class="dashboard__recentActivities__single__time mt-2">4 Hours ago</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-danger mt-4 rounded-2 fw-bold">Please review the README file to fully understand your task.</div>

                            <div class="dashboard_promo">
                                <div class="row g-4 mt-2">
                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="dashboard_promo__single bg__white radius-10 padding-20">
                                            <span class="dashboard_promo__single__subtitle">Total Countries</span>
                                            <h4 class="dashboard_promo__single__price mt-2">Countries</h4>
                                            <p class="dashboard_promo__single__para mt-3"><span class="percentage"> +20%</span> Than last month</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="dashboard_promo__single bg__white radius-10 padding-20">
                                            <span class="dashboard_promo__single__subtitle">Total States</span>
                                            <h4 class="dashboard_promo__single__price mt-2">States</h4>
                                            <p class="dashboard_promo__single__para mt-3"><span class="percentage">+19%</span> Than last month</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="dashboard_promo__single bg__white radius-10 padding-20">
                                            <span class="dashboard_promo__single__subtitle">Total City</span>
                                            <h4 class="dashboard_promo__single__price mt-2">Cities</h4>
                                            <p class="dashboard_promo__single__para mt-3"><span class="percentage"> +08%</span> Than last month</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row g-4 mt-1">
                                <div class="col-lg-12">
                                    <div class="dashboard__card bg__white padding-20 radius-10">
                                        <h5 class="dashboard__card__header__title">Recent Orders</h5>
                                        <div class="dashboard__card__inner border_top_1">
                                            <div class="dashboard__inventory__table custom_table">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>ORDER ID</th>
                                                            <th>CUSTOMER</th>
                                                            <th>ORDERED</th>
                                                            <th>AMOUNT</th>
                                                            <th>PAYMENT METHOD</th>
                                                            <th>STATUS</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table_row">
                                                            <td><span class="order_id">RTS2235611</span></td>
                                                            <td>
                                                                <div class="table_customer">
                                                                    <div class="table_customer__flex">
                                                                        <div class="table_customer__thumb">
                                                                            <img src="{{ asset ('assets') }}/img/customer/customer1.jpg" alt="customer">
                                                                        </div>
                                                                        <div class="table_customer__contents">
                                                                            <h6 class="table_customer__title">Naomi Russel</h6>
                                                                            <p class="table_customer__para mt-1">ckctm12@gmail.com</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="table_date">22 Feb 2023</span></td>
                                                            <td><span class="table_price">$446.61</span></td>
                                                            <td><span class="table_payment"><img src="{{ asset ('assets') }}/img/payment_method/apple.png" alt=""></span></td>
                                                            <td><p class="status_btn completed">Complete</p></td>
                                                            <td>
                                                                <div class="action__icon d-flex">
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">sticky_note_2</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">print</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <div class="btn-group">
                                                                            <a href="javascript:void(0)" class="icon" data-bs-toggle="dropdown"> <i class="material-symbols-outlined">more_vert</i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li class="single-item"><a class="dropdown-item" href="javascript:void(0)"><i class="material-symbols-outlined">edit</i> Edit Product</a></li>
                                                                                <li class="single-item"><a class="dropdown-item delete delete_item" href="javascript:void(0)"><i class="material-symbols-outlined">delete</i> Delete Product</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="table_row">
                                                            <td><span class="order_id">RTS2235612</span></td>
                                                            <td>
                                                                <div class="table_customer">
                                                                    <div class="table_customer__flex">
                                                                        <div class="table_customer__thumb">
                                                                            <img src="{{ asset ('assets') }}/img/customer/customer2.jpg" alt="customer">
                                                                        </div>
                                                                        <div class="table_customer__contents">
                                                                            <h6 class="table_customer__title">Wade Warren</h6>
                                                                            <p class="table_customer__para mt-1">vuhaithuongnute@gmail.com</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="table_date">23 Feb 2023</span></td>
                                                            <td><span class="table_price">$928.36</span></td>
                                                            <td><span class="table_payment"><img src="{{ asset ('assets') }}/img/payment_method/cash.png" alt=""></span></td>
                                                            <td><p class="status_btn in_progress">In Progress</p></td>
                                                            <td>
                                                                <div class="action__icon d-flex">
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">sticky_note_2</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">print</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <div class="btn-group">
                                                                            <a href="javascript:void(0)" class="icon" data-bs-toggle="dropdown"> <i class="material-symbols-outlined">more_vert</i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li class="single-item"><a class="dropdown-item" href="javascript:void(0)"><i class="material-symbols-outlined">edit</i> Edit Product</a></li>
                                                                                <li class="single-item"><a class="dropdown-item delete delete_item" href="javascript:void(0)"><i class="material-symbols-outlined">delete</i> Delete Product</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="table_row">
                                                            <td><span class="order_id">RTS2235613</span></td>
                                                            <td>
                                                                <div class="table_customer">
                                                                    <div class="table_customer__flex">
                                                                        <div class="table_customer__thumb">
                                                                            <img src="{{ asset ('assets') }}/img/customer/customer3.jpg" alt="customer">
                                                                        </div>
                                                                        <div class="table_customer__contents">
                                                                            <h6 class="table_customer__title">Kristin Watson</h6>
                                                                            <p class="table_customer__para mt-1">thuhang.nute@gmail.com</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="table_date">22 Feb 2023</span></td>
                                                            <td><span class="table_price">$275.43</span></td>
                                                            <td><span class="table_payment"><img src="{{ asset ('assets') }}/img/payment_method/google.png" alt=""></span></td>
                                                            <td><p class="status_btn pending">Pending</p></td>
                                                            <td>
                                                                <div class="action__icon d-flex">
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">sticky_note_2</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">print</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <div class="btn-group">
                                                                            <a href="javascript:void(0)" class="icon" data-bs-toggle="dropdown"> <i class="material-symbols-outlined">more_vert</i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li class="single-item"><a class="dropdown-item" href="javascript:void(0)"><i class="material-symbols-outlined">edit</i> Edit Product</a></li>
                                                                                <li class="single-item"><a class="dropdown-item delete delete_item" href="javascript:void(0)"><i class="material-symbols-outlined">delete</i> Delete Product</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="table_row">
                                                            <td><span class="order_id">RTS2235614</span></td>
                                                            <td>
                                                                <div class="table_customer">
                                                                    <div class="table_customer__flex">
                                                                        <div class="table_customer__thumb">
                                                                            <img src="{{ asset ('assets') }}/img/customer/customer4.jpg" alt="customer">
                                                                        </div>
                                                                        <div class="table_customer__contents">
                                                                            <h6 class="table_customer__title">Kristin Watson</h6>
                                                                            <p class="table_customer__para mt-1">thuhang.nute@gmail.com</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="table_date">24 Feb 2023</span></td>
                                                            <td><span class="table_price">$275.43</span></td>
                                                            <td><span class="table_payment"><img src="{{ asset ('assets') }}/img/payment_method/cash.png" alt=""></span></td>
                                                            <td><p class="status_btn cancelled">Canceled</p></td>
                                                            <td>
                                                                <div class="action__icon d-flex">
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">sticky_note_2</i></a>
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">sticky_note_2</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <a href="javascript:void(0)" class="icon"> <i class="material-symbols-outlined">print</i></a>
                                                                    </div>
                                                                    <div class="action__icon__item">
                                                                        <div class="btn-group">
                                                                            <a href="javascript:void(0)" class="icon" data-bs-toggle="dropdown"> <i class="material-symbols-outlined">more_vert</i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li class="single-item"><a class="dropdown-item" href="javascript:void(0)"><i class="material-symbols-outlined">edit</i> Edit Product</a></li>
                                                                                <li class="single-item"><a class="dropdown-item delete delete_item" href="javascript:void(0)"><i class="material-symbols-outlined">delete</i> Delete Product</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
@endsection