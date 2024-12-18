@extends('layout.app')
@section('content')
@include('includes.sidenav')
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
                <div class="row g-4">
                    <div class="col-xxl-6 col-lg-12">
                        <div class="dashboard__card bg__white padding-20 radius-10">
                            <div class="dashboard__card__header">
                                <h4 class="dashboard__card__header__title">Horizontal Input</h4>
                            </div>
                            <div class="dashboard__card__inner mt-4">
                                <div class="form__input">
                                    {{-- <form action="#">
                                        <div class="form__input__flex">

                                            <div class="form__input__single">
                                                <label for="name5" class="form__input__single__label">First Name</label>
                                                <input type="text" id="name5" class="form__control radius-5" placeholder="First Name...">
                                            </div>
                                            <div class="form__input__single">
                                                <label for="name6" class="form__input__single__label">Last Name</label>
                                                <input type="text" id="name6" class="form__control radius-5" placeholder="Last Name...">
                                            </div>
                                            <div class="form__input__single">
                                                <label for="email3" class="form__input__single__label">Type Email</label>
                                                <input type="text" id="email3" class="form__control radius-5" placeholder="Type Email...">
                                            </div>
                                            <div class="form__input__single">
                                                <label for="password3" class="form__input__single__label">Type Password</label>
                                                <input type="password" id="password3" class="form__control radius-5" placeholder="Type Password...">
                                            </div>

                                            <div class="form__input__single">
                                                <label for="name7" class="form__input__single__label">First Name</label>
                                                <div class="form__input__single__item">
                                                    <input type="text" id="name7" class="form__control radius-5" placeholder="First Name...">
                                                    <div class="input__icon">
                                                        <i class="material-symbols-outlined">person</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__input__single">
                                                <label for="name8" class="form__input__single__label">Last Name</label>
                                                <div class="form__input__single__item">
                                                    <input type="text" id="name8" class="form__control radius-5" placeholder="Last Name...">
                                                    <div class="input__icon">
                                                        <i class="material-symbols-outlined">person</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__input__single">
                                                <label for="email4" class="form__input__single__label">Type Email</label>
                                                <div class="form__input__single__item">
                                                    <input type="text" id="email4" class="form__control radius-5" placeholder="Type Email...">
                                                    <div class="input__icon">
                                                        <i class="material-symbols-outlined">person</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__input__single">
                                                <label for="password4" class="form__input__single__label">Type Password</label>
                                                <div class="form__input__single__item">
                                                    <input type="password" id="password4" class="form__control radius-5" placeholder="Type Password...">
                                                    <div class="input__icon">
                                                        <i class="material-symbols-outlined">lock</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form> --}}
                                    <div class="container mt-5">
                                        <h2>Country-State-City CRUD with AJAX</h2>
                                        <hr>
                                
                                        <!-- Country Section -->
                                        <h4>Manage Countries</h4>
                                        <form id="countryForm" class="mb-3">
                                            <div class="input-group">
                                                <input type="text" name="name" id="countryName" class="form-control" placeholder="Enter Country Name" required>
                                                <button type="submit" class="btn btn-primary">Add Country</button>
                                            </div>
                                        </form>
                                        <div id="countriesList" class="mb-5"></div>
                                
                                        <!-- State Section -->
                                        <h4>Manage States</h4>
                                        <form id="stateForm" class="mb-3">
                                            <div class="input-group">
                                                <select name="country_id" id="stateCountry" class="form-select" required>
                                                    <option value="">Select Country</option>
                                                </select>
                                                <input type="text" name="name" id="stateName" class="form-control" placeholder="Enter State Name" required>
                                                <button type="submit" class="btn btn-primary">Add State</button>
                                            </div>
                                        </form>
                                        <div id="statesList" class="mb-5"></div>
                                
                                        <!-- City Section -->
                                        <h4>Manage Cities</h4>
                                        <form id="cityForm" class="mb-3">
                                            <div class="input-group">
                                                <select name="state_id" id="cityState" class="form-select" required>
                                                    <option value="">Select State</option>
                                                </select>
                                                <input type="text" name="name" id="cityName" class="form-control" placeholder="Enter City Name" required>
                                                <button type="submit" class="btn btn-primary">Add City</button>
                                            </div>
                                        </form>
                                        <div id="citiesList"></div>
                                    </div>
                                
                                    <!-- Scripts -->
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                    <script>
                                        // CSRF Token setup for AJAX requests
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                
                                        // Fetch and Display Countries
                                        function fetchCountries() {
                                            $.get('/countries', function(data) {
                                                let countryOptions = '<option value="">Select Country</option>';
                                                let countryHtml = '<ul class="list-group">';
                                                data.forEach(country => {
                                                    countryOptions += `<option value="${country.id}">${country.name}</option>`;
                                                    countryHtml += `
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            ${country.name}
                                                            <button class="btn btn-danger btn-sm" onclick="deleteCountry(${country.id})">Delete</button>
                                                        </li>`;
                                                });
                                                countryHtml += '</ul>';
                                                $('#stateCountry').html(countryOptions);
                                                $('#countriesList').html(countryHtml);
                                            });
                                        }
                                
                                        // Add Country
                                        $('#countryForm').submit(function(e) {
                                            e.preventDefault();
                                            const name = $('#countryName').val();
                                            $.post('/countries', { name }, function(response) {
                                                alert('Country added successfully');
                                                fetchCountries();
                                                $('#countryName').val('');
                                            });
                                        });
                                
                                        // Delete Country
                                        function deleteCountry(id) {
                                            $.ajax({
                                                url: `/countries/${id}`,
                                                type: 'DELETE',
                                                success: function() {
                                                    alert('Country deleted');
                                                    fetchCountries();
                                                }
                                            });
                                        }
                                
                                        // Fetch and Display States
                                        function fetchStates() {
                                            $.get('/states', function(data) {
                                                let stateOptions = '<option value="">Select State</option>';
                                                let stateHtml = '<ul class="list-group">';
                                                data.forEach(state => {
                                                    stateOptions += `<option value="${state.id}">${state.name}</option>`;
                                                    stateHtml += `
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            ${state.name} (Country: ${state.country.name})
                                                            <button class="btn btn-danger btn-sm" onclick="deleteState(${state.id})">Delete</button>
                                                        </li>`;
                                                });
                                                stateHtml += '</ul>';
                                                $('#cityState').html(stateOptions);
                                                $('#statesList').html(stateHtml);
                                            });
                                        }
                                
                                        // Add State
                                        $('#stateForm').submit(function(e) {
                                            e.preventDefault();
                                            const name = $('#stateName').val();
                                            const country_id = $('#stateCountry').val();
                                            $.post('/states', { name, country_id }, function(response) {
                                                alert('State added successfully');
                                                fetchStates();
                                                $('#stateName').val('');
                                                $('#stateCountry').val('');
                                            });
                                        });
                                
                                        // Delete State
                                        function deleteState(id) {
                                            $.ajax({
                                                url: `/states/${id}`,
                                                type: 'DELETE',
                                                success: function() {
                                                    alert('State deleted');
                                                    fetchStates();
                                                }
                                            });
                                        }
                                
                                        // Fetch and Display Cities
                                        function fetchCities() {
                                            $.get('/cities', function(data) {
                                                let cityHtml = '<ul class="list-group">';
                                                data.forEach(city => {
                                                    cityHtml += `
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            ${city.name} (State: ${city.state.name})
                                                            <button class="btn btn-danger btn-sm" onclick="deleteCity(${city.id})">Delete</button>
                                                        </li>`;
                                                });
                                                cityHtml += '</ul>';
                                                $('#citiesList').html(cityHtml);
                                            });
                                        }
                                
                                        // Add City
                                        $('#cityForm').submit(function(e) {
                                            e.preventDefault();
                                            const name = $('#cityName').val();
                                            const state_id = $('#cityState').val();
                                            $.post('/cities', { name, state_id }, function(response) {
                                                alert('City added successfully');
                                                fetchCities();
                                                $('#cityName').val('');
                                                $('#cityState').val('');
                                            });
                                        });
                                
                                        // Delete City
                                        function deleteCity(id) {
                                            $.ajax({
                                                url: `/cities/${id}`,
                                                type: 'DELETE',
                                                success: function() {
                                                    alert('City deleted');
                                                    fetchCities();
                                                }
                                            });
                                        }
                                
                                        // Initial Fetch
                                        $(document).ready(function() {
                                            fetchCountries();
                                            fetchStates();
                                            fetchCities();
                                        });
                                    </script>
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