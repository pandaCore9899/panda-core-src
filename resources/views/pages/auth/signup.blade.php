@extends('layouts.layout', ['no_frame' => true])
@section('content')
    <div class="login-container">
        <div class="login-option">
            <div class="login-logo">
                <img src='assets/images/panda-logo.png' alt="">
            </div>
            <div class="login-mini-form">

            </div>
        </div>
        <div class="sky" style="position: absolute;z-index:80;margin-top:50px; height:100%">

            <div class="cloud-container" style="margin-left: 100px;">
                <div class="raining-cloud"></div>
                <div class="raining-cloud"></div>
            </div>
            <div class="cloud-container">
                <div class="raining-cloud"></div>
                <div class="raining-cloud"></div>
                <div class="raining-cloud"></div>
            </div>
            <div class="cloud-container" style="margin-left: 400px;">
                <div class="raining-cloud"></div>
                <div class="raining-cloud"></div>
            </div>
        </div>
        <div class="login-form__wrapper">
            <div class="login-form lightning-box-shadow-all">
                <div class="login-form__title">Panda Core</div>
                <form class="login-form__form " method="POST" action="{{route('signup')}}">
                    @csrf
                    <div class="login-form__input">
                        <label for="name">User name</label>
                        <input type="text" placeholder="Enter your Username" name="name">
                    </div>
                    <div class="login-form__input">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="login-form__input">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password" name="password">
                    </div>
                    <button class="" type="submit"> Create Account <i class="fa fa-user-plus"></i></button>
                    
                </form>
            </div>
            
        </div>

    </div>
@endsection
