@extends('layouts.user')
@section('content')
    <!--------------- login-section--------------->
    <section class="login product footer-padding">
        <div class="container">
            <div class="login-section account-section">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xs-12">
                        <div class="review-form box-shadows">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="review-form-text">
                                    <h5 class="comment-title">Create Account</h5>
                                    <img src="https://quomodosoft.com/html/ecoshop/assets/images/homepage-one/vector-line.png" alt="img">
                                </div>
                                <div class=" account-inner-form">
                                    <div class="review-form-name">
                                        <label for="fname" class="form-label">Username*</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" account-inner-form">
                                    <div class="review-form-name">
                                        <label for="email" class="form-label">Email*</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" account-inner-form">
                                    <div class="review-form-name">
                                        <label for="cpass" class="form-label">Password*</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="review-form-name">
                                        <label for="rpass" class="form-label">Retype Password*</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>



                                <div class="review-form-name checkbox">
                                    <div class="checkbox-item">
                                        <input type="checkbox">
                                        <p class="remember">
                                            I agree all terms and condition in <span class="inner-text">EcoShop.</span></p>
                                    </div>
                                </div>
                                <div class="login-btn text-center">
                                    <button type="submit" class="shop-btn">Buat Akun Anda</button>
                                    <span class="shop-account">Already have an account ?<a href="login.html">Log
                                            In</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 d-none d-lg-block">
                        <div class="account-img">
                            <img src="https://quomodosoft.com/html/ecoshop/assets/images/homepage-one/account-img.webp" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- login-section-end --------------->
@endsection
