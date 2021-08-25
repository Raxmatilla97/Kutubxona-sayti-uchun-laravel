@extends('layouts.auth')

@section('content')

    <div class="auth-fluid">

        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <a href="index.html" class="logo-dark">
                            <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                        </a>
                        <a href="index.html" class="logo-light">
                            <span><img src="assets/images/logo.png" alt="" height="18"></span>
                        </a>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0">Saytga kirish</h4>
                    <p class="text-muted mb-4">SHaxsiy email pochta va parolingizni kiriting.</p>

                    <!-- form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">

                            <x-label class="form-label" for="emailaddress" :value="__('Email')" />
                            <x-input id="emailaddress" class="form-control " type="email" name="email" :value="old('email')"
                                required autofocus />
                        </div>
                        <div class="mb-3">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-muted float-end"><small>{{ __('Forgot your password?') }}</small></a>
                            @endif
                            <x-label class="form-label" for="password" :value="__('Parol')" />

                            <x-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">{{ __('Meni esda saqla') }}</label>
                            </div>
                        </div>
                        <div class="d-grid mb-0 text-center">

                            <x-button class="btn btn-primary">
                                {{ __('Saytga kirish') }}
                            </x-button>
                        </div>


                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Don't have an account? <a href="pages-register-2.html"
                                class="text-muted ms-1"><b>Sign Up</b></a></p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very
                    much!
                    . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Hyper Admin User
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>

@endsection
