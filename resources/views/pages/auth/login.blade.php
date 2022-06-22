@extends('layouts.layout',['no_frame' => true])
@section('content')
    <div class="login-container">
        <div class="login-option">
            <div class="login-logo"></div>
            <div class="login-mini-form">

            </div>
        </div>
        <div class="sky" style="position: absolute;z-index:80;margin-top:200px">
            
            <div class="cloud-container" style="margin-left: 100px;">
                <div class="raining-cloud" ></div>
                <div class="raining-cloud"></div>
            </div>
            <div class="cloud-container">
                <div class="raining-cloud"></div>
                <div class="raining-cloud"></div>
                <div class="raining-cloud"></div>
            </div>
            <div class="cloud-container" style="margin-left: 400px;">
                <div class="raining-cloud" ></div>
                <div class="raining-cloud"></div>
            </div>
        </div>
        <div class="login-form__wrapper">
            <div class="login-form">
            <div class="login-form__title">Login Form</div>
            <div class="login-form__form">
                <div class="login-form__input">
                    <label for="email">Email</label>
                    <input type="email" placeholder="enter your email" id="email">
                </div>
                <div class="login-form__input">
                    <label for="password">Password</label>
                    <input type="password" placeholder="enter your password" id="password">
                </div>
                <button class="" type="submit">Login</button>
            </div>
        </div>
        </div>
        
    </div>
@endsection