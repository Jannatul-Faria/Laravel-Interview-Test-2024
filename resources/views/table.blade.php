
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
        <div class="dashboard__body">
            <div class="dashboard__inner">
                <div class="dashboard__inner__item dashboard__card bg__white padding-20 radius-10">
                    <h4 class="dashboard__inner__item__header__title">Latest Order</h4>
                    <!-- Table Design One -->
                    <div class="tableStyle_one mt-4">
                        <div class="table_wrapper">
                            <!-- Table -->
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Order Id</th>
                                        <th>Customer name</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Amout</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product1.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td  class="text-success">Delivered</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product2.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td class="text-warning">Pending</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product3.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td class="text-danger">Cancell</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product4.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td class="text-blue">New Order</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton4">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product1.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td  class="text-success">Delivered</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product2.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td class="text-warning">Pending</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton6">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product3.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td class="text-danger">Cancell</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productWrap d-flex align-items-center">
                                            <img src="{{ asset ('assets') }}/img/gallery/product4.jpg" alt="image">
                                        </td>
                                        <td>Nicole Brooks</td>
                                        <td>5425683 </td>
                                        <td>$Darlene Robertson</td>
                                        <td class="text-blue">New Order</td>
                                        <td>24 May, 2022</td>
                                        <td>$490</td>
                                        <td>Geoegia,USA</td>
                                        <td>
                                            <!-- DropDown -->
                                            <div class="dropdown custom__dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="las la-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton8">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- End-of Table one -->
                </div>
            </div>
        </div>
    </div>

@endsection