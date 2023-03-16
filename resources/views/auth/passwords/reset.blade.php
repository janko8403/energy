@extends('layouts.app_login')
ssss
@section('content')
<div class="be-wrapper be-login">
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="splash-container forgot-password">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header">
                        <img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="78" height="#{conf.logoHeight}">
                        <span class="splash-description">Forgot your password?</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <p>Don't worry, we'll send you an email to reset your password.</p>
                            <div class="form-group pt-4">
                                <input class="form-control" type="email" name="email" required="" placeholder="Your Email" autocomplete="off">
                            </div>
                            <p class="pt-1 pb-4">Don't remember your email? <a href="#">Contact Support</a>.</p>
                            <div class="form-group pt-1">
                                <a class="btn btn-block btn-primary btn-xl" href="index.html">Reset Password</a>
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
