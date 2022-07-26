@extends('layouts.app')

@section('content')
<div class="containers">
    <div class="forms">
        <div class="form">
        <span class="title">Login</span>

        <div>
            
            @if(Session::has('error'))
                <span style="color: red;">{{Session::get('error')}}</span>
                @endif
            </div>


            <form method="post" action="{{route('logincheck')}}">

                @csrf
                <div class="input-field">
                    <input type="text" placeholder="Enter your email" required name="email" value="{{old('email')}}">
                    <i class="uil uil-envelope icon"></i>
                </div>
                @if($errors->has('email'))
                <span class="text-danger"><strong>{{$errors->first('email')}}</strong></span>
                @endif
                <div class="input-field">
                    <input type="password" class="password" placeholder="Enter your password" required name="password">
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                @if($errors->has('password'))
                <span class="text-danger"><strong>{{$errors->first('password')}}</strong></span>
                @endif
                <div class="input-field">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <span class="text-danger"><strong>{{$errors->first('g-recaptcha-response')}}</strong></span>
                </div>
                <br>
                <br>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Remember me</label>
                    </div>

                    
                    <a href="{{ route('password.request') }}" class="text">Forgot password?</a>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Login">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">Not a member?
                    <a href="{{route('register')}}" class="text signup-link">Signup Now</a>
                </span>
            </div>
        </div>
    </div>
</div>
    @endsection
