@extends('layouts.app')

@section('content')
<div class="containers">
    <div class="forms">
        <!-- Registration Form -->
        <div class="form signup">
            <span class="title">Registration</span>
            @if(Session::has('msg'))
            <div class="alert alert-success">
                {{Session::get('msg')}}

            </div>
            @endif
            <form method="post" action="{{route('userstore')}}">
                {{@csrf_field()}}
                <div class="input-field">
                    <input type="text" placeholder="Enter your name" name="name" value="{{old('name')}}">
                    <i class="uil uil-user"></i>
                </div>
                @if($errors->has('name'))
                <span class="text-danger"><strong>{{$errors->first('name')}}</strong></span>
                @endif
                <div class="input-field">
                    <input type="text" placeholder="Enter your email" name="email" value="{{old('email')}}">
                    <i class="uil uil-envelope icon"></i>

                </div>
                @if($errors->has('email'))
                <span class="text-danger"><strong>{{$errors->first('email')}}</strong></span>
                @endif
                <div class="input-field">
                    <input type="password" class="password" placeholder="Create a password" name="password" id="password">
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>

                </div>
                @if($errors->has('password'))
                <span class="text-danger"><strong>{{$errors->first('password')}}</strong></span>
                @endif
                <div class="input-field">
                    <input type="password" class="password" placeholder="Confirm a password" name="password_confirmation">
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <!-- @if($errors->has('confirmation_password'))
                <span class="text-danger"><strong>{{$errors->first('confirmation_password')}}</strong></span>
                @endif -->
                <div id="popover-password">
                    <p><span id="result"></span></p>
                    <div class="progress">
                        <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                    </div><br>
                    <ul class="list-unstyled">
                        <li class="">
                            <span class="low-upper-case">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                &nbsp;Lowercase &amp; Uppercase
                            </span>
                        </li>
                        <li class="">
                            <span class="one-number">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                &nbsp;Number (0-9)
                            </span>
                        </li>
                        <li class="">
                            <span class="one-special-char">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                &nbsp;Special Character (!@#$%^&*)
                            </span>
                        </li>
                        <li class="">
                            <span class="eight-character">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                &nbsp;Atleast 8 Character
                            </span>
                        </li>
                    </ul>
                </div>

               
                <div class="input-field">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <span class="text-danger"><strong>{{$errors->first('g-recaptcha-response')}}</strong></span>
                </div>
                <br>
                <br>
                <br>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="termCon" required>
                        <label for="termCon" class="text">I accepted all terms and conditions</label>
                    </div>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Signup">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">Already a member?
                    <a href="{{route('login')}}" class="text login-link">Login Now</a>
                </span>
            </div>
        </div>
    </div>
</div>

@endsection