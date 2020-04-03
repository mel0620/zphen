@extends("layout")
@section('content')
    <!-- ADS SECTION -->
    <section class="ads-section mt-0">
        @for ($i = 0; $i < 2; $i++)
        <div class="ads">
            <span>zphen ads</span>
        </div>
        @endfor
    </section>
    <!-- END ADS SECTION -->
    
    <!-- END ADS SECTION -->
    <section class="login-wrapper">
        <div class="header">
            <div class="header__label">Login your Account</div>
            <div class="header__signup">New member? <a href="javascript:" class="text-link">SIGN UP</a> here.</div>
        </div>
        <div class="content">
            <form action="">
                <div class="form-wrapper">
                    <div class="form-group">
                        <label class="text-black" for="number-email">Mobile Number or Email</label>
                        <input class="z-input" id="number-email" type="text" placeholder="Please enter your phone number or email">
                    </div>
                    <div class="form-group">
                        <label class="text-black" for="number-email">Password</label>
                        <input class="z-input" id="number-email" type="password" placeholder="Minimum 6 characters with a number and a letter">
                        <div class="w-100 text-center mt-2">
                            <a href="javascript:" class="text-link">Forgot Password?</a>
                        </div>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="form-group">
                        <label for=""></label>
                        <button class="z-btn-outline w-100 py-2">I CANNOT LOGIN CONTACT US</button>
                    </div>
                    <div class="form-group pt-3">
                        <button class="z-btn-filled w-100">LOGIN</button>
                    </div>
                </div>
            </form>
            <div class="d-flex justify-content-center">
                <div class="separator-text">OR LOGIN WITH</div>
            </div>
            <div class="login-with">
                <button class="btn-fb">
                    <img src="assets/facebook-white.svg" alt="">
                    <span>Facebook</span>
                </button>
                <button class="btn-google">
                    <img src="assets/google.svg" alt="">
                    <span>Google</span>
                </button>
            </div>
        </div>
    </section>
@endsection