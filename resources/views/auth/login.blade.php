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
                       <form method="POST" action="{{ route('login') }}" class="custom_form">
                            @csrf
                            <div class="single_input">
                                <label class="label_title" for="email" :value="__('Email')">Email</label>
                                <div class="include_icon">
                                    <input class="form--control radius-5 " id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    <div class="icon"><span class="material-symbols-outlined">mail</span></div>
                                </div>
                               
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            </div>
                            <div class="single_input">
                                <label class="label_title" for="password" :value="__('Password')" >Password</label>
                                <div class="include_icon">
                                    <input id="password" class="form--control radius-5"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" type="password">
                                    <div class="icon"><span class="material-symbols-outlined">lock</span></div>
                                </div>
                                
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            </div>
                            <div class="loginForm__wrapper__remember single_input">
                                <div class="dashboard_checkBox ">
                                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <label for="remember_me" class="">Remember me</label>
                                </div>
                                <!-- forgetPassword -->
                                <div class="forgotPassword">
                                    @if (Route::has('password.request'))
                                        <a class="forgotPass" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                  
                                </div>
                            </div>
                            <div class="btn_wrapper">
                                <button type="submit" style="none" class=" single_input cmn_btn w-100 radius-5">
                                    <a href="{{ url('login') }}"  >Sign In</a>
                                </button>
                                
                            </div>
                            <div class="btn-wrapper mt-4">
                                <p class="loginForm__wrapper__signup"><span>Don’t have an account ? </span> <a href="sign_up.html" class="loginForm__wrapper__signup__btn">Sign Up</a></p>
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
                        <a href="{{ url('/') }}"><img src="{{ asset ('assets') }}/img/logo.webp" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area end -->
@endsection

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
