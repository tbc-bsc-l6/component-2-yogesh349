@extends('layout.layout')
@section('title','Verify Email')
@section('content')
<div class="game-outer">
                <h3 mb-5 class="text-center">{{ __('Verify Your Email Address') }}</h3>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 mt-5 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
</div>
@endsection
