@extends('layout')
@section('content')
<!-- ADS SECTION -->
<section class="ads-section">
    <a href="javascript:" class="ads" style="background-image: url('https://onlinecreative.org/wp-content/plugins/pushdownbanner/images/image-example.jpg')">
        {{-- <span>zphen ads</span> --}}
    </a>
    <a href="javascript:" class="ads" style="background-image: url('https://ghc.anitab.org/wp-content/uploads/sites/2/2017/08/example-banner-announcement-1.png')">
        {{-- <span>zphen ads</span> --}}
    </a>
</section>
<!-- END ADS SECTION -->

<!-- REGISTER SECTION -->
<section class="signup-wrapper">
    <div class="content-header">
        <div class="content-header__label">Create your Zphen Account</div>
        <div class="content-header__signup">Already a member? <a href="/login" class="text-link">LOGIN</a> here.</div>
    </div>
    <div class="content-body">
        <div class="tabs">
            <!--tabs navigation-->
            <div class="tabs__nav">
                <ul class="tabs__nav-list">
                    <li class="tabs__nav-item js-active">Sign up with Mobile</li>
                    <li class="tabs__nav-item">Sign up with Email</li>
                </ul>
            </div>
            <!--tabs panels-->
            <div class="tabs__panels">
                <!--single panel-->
                <div class="tabs__panel">
                    <form action="">
                        <div class="form-wrapper">
                            <div class="form-group">
                                <label class="text-black" for="mobile-number-0">Mobile Number</label>
                                <input class="z-input" id="mobile-number-0" type="text" placeholder="Please enter your mobile phone number">
                            </div>
                            <!-- TODO: SLIDE TO GET SMS CODE -->
                            <div class="form-group">
                                <label class="text-black" for="password-0">Password</label>
                                <input class="z-input" id="password-0" type="password" placeholder="Minimum 6 characters with a number and a letter">
                            </div>
                            <div class="form-group-custom">
                                <div class="birthday">
                                    <label class="text-black" for="birthday">Birthday</label>
                                    <div class="date-group" id="birthday">
                                        <select class="z-input">
                                            <option value="0">Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                        </select>
                                        <select class="z-input">
                                            <option value="0">Day</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <select class="z-input">
                                            <option value="0">Year</option>
                                            <option value="1">1997</option>
                                            <option value="2">1998</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="gender">
                                    <label class="text-black" for="birthday">Birthday</label>
                                    <select id="gender" class="z-input">
                                        <option value="0">Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-wrapper">
                            <div class="form-group">
                                <label class="text-black" for="fullname-0">Fullname</label>
                                <input class="z-input" id="fullname-0" type="text" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <ul class="unstyled">
                                    <li style="display: grid; grid-template-columns: auto auto; grid-gap: 4px">
                                        <input id="offers-0" type="checkbox" value="0">
                                        <label for="offers-0" class="text-black">I want to receive exclusive offers and promotions from zphen.com</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group pt-3">
                                <div class="text-center text-black mb-3">By clicking "SIGN UP" I agree to ZPHEN <a class="text-link" href="javascript:">Privacy Policy</a></div>
                                <button class="z-btn-filled w-100">SIGNUP</button>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="separator-text">OR SIGN UP WITH</div>
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
                <!--single panel-->
                <div class="tabs__panel">
                    <form action="">
                        <div class="form-wrapper">
                            <div class="form-group">
                                <label class="text-black" for="address-1">Email Address</label>
                                <input class="z-input" id="address-1" type="text" placeholder="Please enter your email">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-black">Check your email and click the confirmation link.</label>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="password-1">Password</label>
                                <input class="z-input" id="password-1" type="password" placeholder="Minimum 6 characters with a number and a letter">
                            </div>
                            <div class="form-group-custom">
                                <div class="birthday">
                                    <label class="text-black" for="birthday">Birthday</label>
                                    <div class="date-group" id="birthday">
                                        <select class="z-input">
                                            <option value="0">Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                        </select>
                                        <select class="z-input">
                                            <option value="0">Day</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <select class="z-input">
                                            <option value="0">Year</option>
                                            <option value="1">1997</option>
                                            <option value="2">1998</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="gender">
                                    <label class="text-black" for="gender-1">Birthday</label>
                                    <select id="gender-1" class="z-input">
                                        <option value="0">Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-wrapper">
                            <div class="form-group">
                                <label class="text-black" for="fullname-1">Fullname</label>
                                <input class="z-input" id="fullname-1" type="text" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <ul class="unstyled">
                                    <li style="display: grid; grid-template-columns: auto auto; grid-gap: 4px">
                                        <input id="offers-1" type="checkbox" value="0">
                                        <label for="offers-1" class="text-black">I want to receive exclusive offers and promotions from zphen.com</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group pt-3">
                                <div class="text-center text-black mb-3">By clicking "SIGN UP" I agree to ZPHEN <a class="text-link" href="javascript:">Privacy Policy</a></div>
                                <button class="z-btn-filled w-100">SIGNUP</button>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="separator-text">OR SIGN UP WITH</div>
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
            </div>
        </div>
    </div>
</section>
<!-- END REGISTER SECTION -->

@endsection

@section('script')
{{-- TABS SCRIPT --}}
<script>
    const DOM = {
        tabsNav: document.querySelector(".tabs__nav"),
        tabsNavItems: document.querySelectorAll(".tabs__nav-item"),
        panels: document.querySelectorAll(".tabs__panel")
    };
    
    //set active nav element
    const setActiveItem = (elem) => {
        DOM.tabsNavItems.forEach((el) => {
            el.classList.remove("js-active");
        });
        
        elem.classList.add("js-active");
    };
    
    //find active nav element
    const findActiveItem = () => {
        let activeIndex = 0;
        
        for (let i = 0; i < DOM.tabsNavItems.length; i++) {
            if (DOM.tabsNavItems[i].classList.contains("js-active")) {
                activeIndex = i;
                break;
            }
        }
        
        return activeIndex;
    };
    
    //find active nav elements parameters: left coord, width
    const findActiveItemParams = (activeItemIndex) => {
        const activeTab = DOM.tabsNavItems[activeItemIndex];
        
        //width of elem
        const activeItemWidth = activeTab.offsetWidth - 1;
        
        //left coord in the tab navigation
        const activeItemOffset_left = activeTab.offsetLeft;
        
        return [activeItemWidth, activeItemOffset_left];
    };
    
    //appending decoration block to an active nav element
    const appendDecorationNav = () => {
        //creating decoration element
        let decorationElem = document.createElement("div");
        
        decorationElem.classList.add("tabs__nav-decoration");
        decorationElem.classList.add("js-decoration");
        
        //appending decoration element to navigation
        DOM.tabsNav.append(decorationElem);
        
        //appending styles to decoration element
        return decorationElem;
    };
    
    //appending styles to decoration nav element
    const styleDecorElem = (elem, decorWidth, decorOffset) => {
        elem.style.width = `${decorWidth}px`;
        elem.style.transform = `translateX(${decorOffset}px)`;
    };
    
    //find active panel
    const findActivePanel = (index) => {
        return DOM.panels[index];
    };
    
    //set active panel class
    const setActivePanel = (index) => {
        DOM.panels.forEach((el) => {
            el.classList.remove("js-active");
        });
        
        DOM.panels[index].classList.add("js-active");
    };
    
    //onload function
    window.addEventListener("load", () => {
        //find active nav item
        const activeItemIndex = findActiveItem();
        
        //find active nav item params
        const [decorWidth, decorOffset] = findActiveItemParams(activeItemIndex);
        
        //appending decoration element to an active elem
        const decorElem = appendDecorationNav();
        
        //setting styles to the decoration elem
        styleDecorElem(decorElem, decorWidth, decorOffset);
        
        //find active panel
        findActivePanel(activeItemIndex);
        
        //set active panel
        setActivePanel(activeItemIndex);
    });
    
    //click nav item function
    DOM.tabsNav.addEventListener("click", (e) => {
        const navElemClass = "tabs__nav-item";
        
        //check if we click on a nav item
        if (e.target.classList.contains(navElemClass)) {
            const clickedTab = e.target;
            
            const activeItemIndex = Array.from(DOM.tabsNavItems).indexOf(clickedTab);
            
            //set active nav item
            setActiveItem(clickedTab);
            
            //find active nav item
            const activeItem = findActiveItem();
            
            //find active nav item params
            const [decorWidth, decorOffset] = findActiveItemParams(activeItem);
            
            //setting styles to the decoration elem
            const decorElem = document.querySelector(".js-decoration");
            
            styleDecorElem(decorElem, decorWidth, decorOffset);
            
            //find active panel
            findActivePanel(activeItemIndex);
            
            //set active panel
            setActivePanel(activeItemIndex);
        }
    });
</script>
@endsection