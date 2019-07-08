@extends('layouts.app-auth')

@section('content')
<!-- Simple login form -->
<form method="post" action="{{ route('register') }}">
@csrf
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Create Account <small class="display-block">All fields are required</small></h5>
        </div>

        <div class="form-group has-feedback has-feedback-left @error('name') has-error @enderror">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            @error('name')
                <span class="help-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group has-feedback has-feedback-left @error('username') has-error @enderror">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
            <div class="form-control-feedback">
                <i class="icon-mention text-muted"></i>
            </div>
            @error('username')
                <span class="help-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group has-feedback has-feedback-left @error('email') has-error @enderror">
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="email" autofocus>
            <div class="form-control-feedback">
                <i class="icon-mention text-muted"></i>
            </div>
            @error('email')
                <span class="help-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group has-feedback has-feedback-left @error('password') has-error @enderror">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
            @error('password')
                <span class="help-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group has-feedback has-feedback-left @error('password_confirmation') has-error @enderror">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
            @error('password_confirmation')
                <span class="help-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn bg-orange-400 btn-block">Create Account <i class="icon-circle-right2 position-right"></i></button>
        </div>
    </div>
</form>
<!-- /simple login form -->
@endsection
