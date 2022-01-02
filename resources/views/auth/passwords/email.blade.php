@extends('layout.layout') 
@section('title','Edit Form')
@section('show-submit_form_message') 
@if (session()->has('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong>{{ session("status") }}
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
    ></button>
</div>
@endif 
@endsection

@section('content')
<div class="f-flex">
    <div class="game-outer row align-items-center">
        <h2 class="text-center">{{ __("Reset Password") }}</h2>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group mt-4">
                <label for="email">{{ __("E-Mail Address") }}</label>
                <input
                    id="email"
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">
                {{ __("Send Password Reset Link") }}
            </button>
        </form>
    </div>
</div>
@endsection
