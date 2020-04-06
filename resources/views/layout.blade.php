<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zphen</title>

        <link rel="icon" href="assets/favicon.png" type="image/png" sizes="45x45">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

        {{-- MDI font --}}
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css">

        {{-- FONTAWESOME --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
        
        {{-- swiper --}}
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

        @yield('style')
    </head>
    <body>
        <header class="main-header container-fluid">
            <div class="header-toolbar">
                <div class="header-toolbar__brand">
                    <a href="/">
                        <img width="150px" src="assets/brand.svg" alt="">
                    </a>
                </div>
                <div class="header-toolbar__center-actions">
                    <div class="search">
                        <input type="text" placeholder="Search in zphen..." class="search__input">
                        <button class="search__btn">
                            <span class="mdi mdi-magnify"></span>
                        </button>
                    </div>
                    <div class="actions">
                        <div class="cart">
                            <a href="javascript:" class="cart__dropdown">
                                My Cart <span class="mdi mdi-menu-down"></span>
                            </a>
                            <a href="javascript:" class="cart__add">
                                <span class="mdi mdi-cart"></span>
                                <div class="round-icon">
                                    {{-- <span class="value">20</span> --}}
                                    <span class="mdi mdi-plus"></span>
                                </div>
                            </a>
                            <div class="cart__dropdown-menu">
                                <div class="cart__dropdown-header">
                                    <ul class="unstyled">
                                        <li>
                                            <input id="allitems" type="checkbox" value="value1">
                                            <label for="allitems">Select All(0) Items</label>
                                        </li>
                                    </ul>
                                    <button class="cart__dropdown-delete">
                                        <span class="mdi mdi-trash-can-outline"></span>
                                    </button>
                                </div>

                                {{-- IF NO ITEMS --}}

                                {{-- <div class="cart__dropdown-content">
                                    <div class="no-items">No Items</div>
                                </div> --}}
                                
                                {{-- IF HAS ITEMS --}}
                                <div class="cart__dropdown-content" id="custom-scroll">
                                    <div class="product-items">
                                        @for ($i = 0; $i < 5; $i++)
                                            <div class="product-item">
                                                <div class="product-item__check">
                                                    <ul class="unstyled">
                                                        <input id="c2" type="checkbox">
                                                    </ul>
                                                </div>
                                                <div class="product-item__preview">
                                                    <div class="image-holder">
                                                        <img src="https://static.bhphoto.com/images/images500x500/1484050840_1308819.jpg" alt="">
                                                    </div>
                                                    <div class="prod-info">
                                                        <div class="prod-info__top">
                                                            <div class="prod-name">Nikon D5600</div>
                                                            <div class="prod-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, nulla.</div>
                                                        </div>
                                                        <div class="prod-info__bottom">
                                                            <div class="price">
                                                                <div class="price__current">₱ 5,600.00</div>
                                                                <div class="price__prev">₱ 24,000.00</div>
                                                            </div>
                                                            <div class="counter">
                                                                <button>
                                                                    <i class="mdi mdi-plus"></i>
                                                                </button>
                                                                <input type="number" value="1">
                                                                <button>
                                                                    <i class="mdi mdi-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                <div class="cart__dropdown-footer">
                                    <div class="cart__total">TOTAL: ₱ 28,000.00</div>

                                    {{-- NO ITEMS ON CART --}}
                                    {{-- <button class="cart__action">ADD ITEMS TO PROCEED</button> --}}

                                    <button class="cart__action">PROCEED TO CHECKOUT</button>
                                </div>
                            </div>
                        </div>
                        <a class="notif" href="javascript:">
                            <span class="mdi mdi-bell"></span>
                            <div class="round-icon">
                                <span class="mdi mdi-plus"></span>
                            </div>
                        </a>
                    </div>
                </div>
                
                {{-- VISITOR --}}

                <div class="header-toolbar__right-actions">
                    <a href="/register">Sign up</a>
                    <span class="mx-2 separator">|</span> 
                    <a href="/login">
                        <span>Login</span>
                        <span class="mdi mdi-account-circle"></span>
                    </a>
                </div>

                {{-- LOGGED IN --}}

                {{-- <div class="header-toolbar__is-logged-in">
                    <div class="user">
                        <a class="user__dropdown" href="javascript:">John Doe <span class="mdi mdi-account-circle"></span></a>
                        <div class="user__menu">
                            <ul>
                                <li><a href="javascript:">My Profile</a></li>
                                <li><a href="javascript:">My Orders</a></li>
                                <li><a href="javascript:">My Reviews</a></li>
                                <li><a href="javascript:">Sell Items</a></li>
                                <li><a href="javascript:">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </header>
        <main class="main-content container">
            @yield("content")
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__top">
                    <div class="footer-nav">
                        <div class="footer-nav__title">Customer Care</div>
                        <ul class="footer-nav__links">
                            <li class="footer-nav__link"><a href="javascript:">Help Center</a></li>
                            <li class="footer-nav__link"><a href="javascript:">How to Buy</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Shipping and Delivery</a></li>
                            <li class="footer-nav__link"><a href="javascript:">International Product Policy</a></li>
                            <li class="footer-nav__link"><a href="javascript:">How to Return</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Question</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <div class="footer-nav__title">Zphen</div>
                        <ul class="footer-nav__links">
                            <li class="footer-nav__link"><a href="javascript:">About Zphen</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Careers</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Terms and Conditions</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Privacy Policy</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Cookies Notice</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Press & Media</a></li>
                            <li class="footer-nav__link"><a href="javascript:">Intellectual Property Protection</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <div class="footer-nav__title">Follow Us</div>
                        <div class="social">
                            <a href="javascript:">
                                <img src="assets/facebook.svg" alt="">
                            </a>
                            <a href="javascript:">
                                <img src="assets/instagram.svg" alt="">
                            </a>
                            <a href="javascript:">
                                <img src="assets/twitter.svg" alt="">
                            </a>
                            <a href="javascript:">
                                <img src="assets/linkedin.svg" alt="">
                            </a>
                            <a href="javascript:">
                                <img src="assets/youtube.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="footer-nav">
                        <div class="footer-nav__title">Download the App</div>
                        <div class="social">
                            <a href="javascript:">
                                <img src="assets/download-android.png" alt="">
                            </a>
                            <a href="javascript:">
                                <img src="assets/download-ios.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="footer-nav">
                        <div class="footer-nav__title">Payment Methods</div>
                        <img  src="assets/payment-methods.png" alt="">
                    </div>
                    <div class="footer-nav footer-nav--center">
                        <div class="footer-nav__title">Payment Methods</div>
                        <div class="social">
                            <a href="javascript:">
                                <img src="assets/phil.png" alt="">
                            </a>
                            <a href="javascript:">
                                <img src="assets/sing.png" alt="">
                            </a>
                            <a href="javascript:">
                                <img src="assets/kor.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="copyright">&copy; zphen 2019</div>
                </div>
            </div>
        </footer>

        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
        @yield('script')
    </body>
</html>
