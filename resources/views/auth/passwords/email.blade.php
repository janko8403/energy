@extends('layouts.app_login')

@section('content')
<div class="be-wrapper be-login">
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="splash-container forgot-password">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header">
                        <img class="logo-img" src="{{ asset('images/logo-xx.png') }}" alt="logo" width="78" height="45">
                        <span class="splash-description">Zapomniałeś hasła?</span>
                    </div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            
                            <p>Nie martw się, wyślemy Ci wiadomość e-mail, aby zresetować hasło.</p>
                            
                            <div class="form-group pt-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group pt-1">
                                <button type="submit" class="btn btn-block btn-primary btn-xl">
                                    {{ __('Wyślij link resetowania hasła') }}
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
