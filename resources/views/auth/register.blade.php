@extends('layout.app')
@section('content')

   <!--login Area start-->
   <section class="loginForm">
    <div class="loginForm__flex">
        <div class="loginForm__left">
            <div class="loginForm__left__inner desktop-center">
                <div class="loginForm__header">
                    <h2 class="loginForm__header__title">Welcome Back</h2>
                    <p class="loginForm__header__para mt-3">Login with your data that you entered during registration.</p>
                </div>
                <div class="loginForm__wrapper mt-4">
                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}" class="custom_form">
                        @csrf
                        <div class="single_input">
                            <label class="label_title" for="name" :value="__('Name')">Name</label>
                            <div class="include_icon">
                                <input class="form--control radius-5" placeholder="Enter your Full Name" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                                <div class="icon"><span class="material-symbols-outlined">person</span></div>
                            </div>
                        </div>
                        <div class="single_input" >
                            <label class="label_title" for="email" :value="__('Email')" >Email</label>
                            <div class="include_icon">
                                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"  class="form--control radius-5" placeholder="Enter your email address">
                                <div class="icon"><span class="material-symbols-outlined">mail</span></div>
                            </div>
                        </div>
                        <div class="single_input">
                            <label class="label_title" for="password" :value="__('Password')">Password</label>
                            <div class="include_icon">
                                <input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" class="form--control radius-5" placeholder="New-password">
                                <div class="icon"><span class="material-symbols-outlined">lock</span></div>
                            </div>
                        </div>
                        <div class="single_input">
                            <label class="label_title" for="password_confirmation" :value="__('Confirm Password')" >Confirm Password</label>
                            <div class="include_icon">
                                <input class="form--control radius-5" 
                                id="password_confirmation" 
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                                <div class="icon"><span class="material-symbols-outlined">lock</span></div>
                            </div>
                        </div>
                        <div class="btn_wrapper single_input">
                            <button type="submit" style="none" class=" single_input cmn_btn w-100 radius-5">
                                <a href="{{ url('register') }}"  >Sign In</a>
                            </button>
                        </div>
                        <div class="btn-wrapper mt-4">
                            <p class="loginForm__wrapper__signup"><span>Already have an Account?  </span> <a href="{{ route('login') }}" class="loginForm__wrapper__signup__btn">Sign In</a></p>
                            <div class="loginForm__wrapper__another d-flex flex-column gap-2 mt-3">
                                <a href="javascript:void(0)" class="loginForm__wrapper__another__btn radius-5 w-100"><img src="{{ asset ('assets') }}/img/icon/googleIocn.svg" alt="" class="icon"> Login With Google</a>
                                <a href="javascript:void(0)" class="loginForm__wrapper__another__btn radius-5 w-100"><img src="{{ asset ('assets') }}/img/icon/fbIcon.svg" alt="" class="icon">Login With Facebook</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="loginForm__right loginForm__bg " style="background-image: url({{ asset ('assets') }}/img/login.jpg);">
            <div class="loginForm__right__logo">
                <div class="loginForm__logo">
                    <a href="index.html"><img src="{{ asset ('assets') }}/img/logo.webp" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area end -->
@endsection