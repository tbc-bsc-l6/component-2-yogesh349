@extends('layout.layout')
@section('title','Register')
@section('content')
<div class="f-flex">
    <div class="game-outer row align-items-center">
        <h1 class="text-center">{{ __('Register') }}</h1>
                <form action="{{ route('register') }}" method="post">
                    @csrf 
              <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <div class="form-group mt-4">
                <label for="exampleInputEmail1">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-groupmt-4">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
              </div>
              <div class="form-group mt-4">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <div style="float: right"><a href="{{route('login')}}">{{__('Already Registered')}}</a></div>
              </div>
              <button type="submit" class="btn btn-primary mt-4">Register</button>
            </form>
            </div>
        
        </div>
</div>

@endsection

   


