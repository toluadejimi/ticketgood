@extends('layout.app')
@section('content')

<!-- ==========Sign-In-Section========== -->
<section class="account-section bg_img" data-background="./assets/images/account/account-bg.jpg">
    <div class="container">

        <div class="padding-top padding-bottom">
            <div class="account-area">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
                <div class="section-header-3">

                    <span class="cate">welcome</span>
                    <h2 class="title">to Click N Cart Tickets </h2>
                </div>
                <form action="register" method="POST" class="account-form">
                    @csrf
                    <div class="form-group">
                        <label for="email1">First Name<span>*</span></label>
                        <input type="text" placeholder="Enter Your First Name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email1">Last Name<span>*</span></label>
                        <input type="text" placeholder="Enter Your Last Name" name="last_name" required>
                    </div>


                    <div class="form-group">
                        <label for="email1">Email<span>*</span></label>
                        <input type="email" placeholder="Enter Your Email" name="email" required>
                    </div>



                    <div class="form-group">
                        <label for="">Account Type<span>*</span></label>
                        <select name="role" class="form-group text-dark">

                            <option value="1">Customer</option>
                            <option value="2">Agent</option>



                        </select>

                    </div>



                    <div class="form-group">
                        <label for="pass1">Password<span>*</span></label>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="pass2">Confirm Password<span>*</span></label>
                        <input type="password" placeholder="Password" name="password_confirmation" required>
                    </div>


                    <div class="form-group checkgroup">
                        <input type="checkbox" id="bal" required checked>
                        <label for="bal">I agree to the <a href="sign-up.html#0">Terms, Privacy Policy</a> and <a
                                href="sign-up.html#0">Fees</a></label>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Sign Up">
                    </div>
                </form>
                <div class="option">
                    Already have an account? <a href="sign-in.html">Login</a>
                </div>
                <div class="or"><span>Or</span></div>
                <ul class="social-icons">
                    <li>
                        <a href="sign-up.html#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="sign-up.html#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="sign-up.html#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==========Sign-In-Section========== -->



@endsection