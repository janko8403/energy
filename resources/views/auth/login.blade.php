@extends('auth.layouts.app_login')

@section('content')
<div class="be-wrapper be-login">
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="splash-container">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header">
                        <img class="logo-img" src="{{ asset('img/cms-logo.png') }}" alt="logo" width="78" height="45">
                        <span class="splash-description">Wprowadź e-mail i hasło aby sie zalogować</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Hasło">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group login-submit">
                                <button type="submit" class="btn btn-primary btn-xl">
                                    {{ __('Zaloguj się') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="splash-footer">&copy; <script>document.write(new Date().getFullYear())</script> OneNet</div>
            </div>
        </div>
    </div>
</div>
@endsection
