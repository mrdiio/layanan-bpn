@extends('layouts.app-auth')

@section('content')
<!-- Tabbed form -->
<div class="tabbable panel login-form width-400">
    <div class="tab-content panel-body">
        <form method="post" action="{{ route('login') }}">
            @csrf
                <div class="text-center">
                    <h5 class="content-group">Silakan Login</h5>
                </div>

                <div class="form-group has-feedback has-feedback-left @error('email') has-error @enderror">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email atau Username" required autocomplete="email" autofocus>
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
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

                <div class="form-group">
                    <button type="submit" class="btn bg-pink-400 btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
    </div>
</div>
<!-- /tabbed form -->

{{-- <!-- Simple login form -->
<form method="post" action="{{ route('login') }}">
@csrf
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
        </div>
        
        <div class="form-group has-feedback has-feedback-left @error('email') has-error @enderror">
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
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

        <div class="form-group">
            <button type="submit" class="btn bg-orange-400 btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
        </div>
    </div>
</form>
<!-- /simple login form --> --}}
@endsection
