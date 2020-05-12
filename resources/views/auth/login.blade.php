@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-box card">   <!-- 変更箇所 -->
                <div class="login-header card-header mx-auto">{{ __('messages.Login') }}</div>  <!-- 変更箇所 -->
                <div class="login-body card-body">  <!-- 変更箇所 -->
                    <form method="POST" action="{{ route('login') }}">

                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('messages.E-Mail Address') }}</label>  <!-- 変更箇所 -->
                            <div class="col-md-6">
                               <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>  <!-- 変更箇所 -->

                                @if ($errors->has('email')) <!-- 変更箇所 -->
                                    <span class="invalid-feedback"> <!-- 変更箇所 -->
                                        <strong>{{ $errors->first('email') }}</strong> <!-- 変更箇所 -->
                                    </span>
                                    
                                @endif <!-- 変更箇所 -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('messages.Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> <!-- 変更箇所 -->

                                @if ($errors->has('password'))  <!-- 変更箇所 -->
                                    <span class="invalid-feedback">  <!-- 変更箇所 -->
                                        <strong>{{ $errors->first('password') }}</strong>  <!-- 変更箇所 -->
                                    </span>
                                    
                                @endif  <!-- 変更箇所 -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">  <!-- 変更箇所 -->
                                    <label> <!-- 変更箇所 -->
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('messages.Remember Me') }} <!-- 変更箇所 -->
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    
                                    {{ __('messages.Login') }}
                                </button>   <!-- 変更箇所 -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
