@extends('layouts.app')

@section('content')
<div class="containers">
    <div class="forms">
        <div class="form signup">
            <span class="title">Reset Password Link Send</span>

            <form method="post" action="{{ route('password.email') }}">
                <div>

                    @if(Session::has('status'))
                    <span class="text-success">{{Session::get('status')}}</span>
                    @endif
                </div>


                @csrf
                <div class="input-field">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required  required style="width:320px;" placeholder="Enter your Email">
                    <i class="uil uil-envelope icon"></i>
                </div>

                @if($errors->has('email'))
                <span class="text-danger"><strong>{{$errors->first('email')}}</strong></span>
                @endif

                <div class="input-field button">
                    <input type="submit" value="Send Password Reset Link">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection