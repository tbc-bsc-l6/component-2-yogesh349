@extends('layout.layout')
@section('title','Login Form')

@section('show-submit_form_message')
@if (session()->has('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong>{{session('status')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endsection

@section('content')
<div class="f-flex">
  <div class="game-outer  row align-items-center">
    <h2 class="text-center">{{__('Login')}}</h2>
  
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
              <div class="form-group mt-4"> 
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control custom-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group mt-4"> 
                <label for="email">{{ __('Password ') }}</label>
                <input id="password" type="password" class="form-control  custom-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember ">Check me out</label>
                 <div style="float: right">
                  @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
                   @endif
                 </div>
               
              </div>
              <button type="submit" class="btn btn-primary mt-3">{{ __('Login') }}</button>
        </form>
</div>
</div>
@endsection

