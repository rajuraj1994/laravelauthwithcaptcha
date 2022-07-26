@extends('layouts.app')

@section('content')
<div class="containers">
    <div class="forms">
        <!-- Reset Form -->
        <div class="form signup">
            <span class="title">Reset Password</span>
            @if(Session::has('error'))
            <div class="alert alert-success">
                {{Session::get('error')}}

            </div>
            @endif
            <form method="post" action="{{ route('password.update') }}">
                {{@csrf_field()}}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="input-field">
                    <input type="text" placeholder="Enter your email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus class=" @error('email') is-invalid @enderror">
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

                @if($errors->has('confirmation_password'))
                <span class="text-danger"><strong>{{$errors->first('confirmation_password')}}</strong></span>
                @endif
               

                <div class="input-field button">
                    <input type="submit" value="Reset Password">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
