@extends('layouts.app')

@section('content')
<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ config('app.logo') }}" height="36" alt="{{ config('app.name') }}"></a>
        </div>
        <div class="card card-md">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Verify Your Email Address') }}</h2>
                @if (session('resent'))
                <div class="mb-3">
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                </div>
                @endif
                <div class="form-footer">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
