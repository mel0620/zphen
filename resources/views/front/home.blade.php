@extends("layout")
@section('content')
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="categories">
            <!-- TODO: SUB CATEGORIES -->
            <div class="categories__label">Categories</div>
            <ul class="categories__items" id="custom-scroll">
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Construction</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Automotive</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Motorcycle</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Computer</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Farm & Gardening</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Marine & Boating</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Gym and Sport</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Per Accessories & Food</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Camping</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Home</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Office</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Others</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                </li>
                <ul class="sub-category">
                    @for ($i = 0; $i < 10; $i++)
                        <li class="sub-category__item">
                            <a class="sub-categories__item-link" href="javascript:">
                                <span class="text">Lorem ipsum</span>
                            </a>
                        </li>
                    @endfor
                </ul>
            </ul>
        </div>
        <div class="product-slider">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('https://image.freepik.com/free-vector/cosmetic-spray-bottle-banner-beauty-product_33099-2072.jpg')"></div>
                    <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-vector/sale-banner-with-product-description_1361-1333.jpg?size=626&ext=jpg')"></div>
                    <div class="swiper-slide" style="background-image: url('https://avartanslider.com/wp-content/uploads/2016/01/product-slider.png')"></div>
                    <div class="swiper-slide" style="background-image: url('https://i.pinimg.com/originals/03/11/62/0311622466bc4c9406c411cc8417888d.jpg')"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="others">
            <div class="card-item">
                <div class="card-item__content">

                </div>
                <div class="card-item__bottom-action">
                    <a href="/vendor">Be a vendor</a>
                </div>
            </div>
            <div class="card-item">
                <div class="card-item__content">

                </div>
                <div class="card-item__bottom-action">
                    <a href="javascript:">Sell Used Items</a>
                </div>
            </div>
            <div class="card-item">
                <div class="card-item__content">

                </div>
                <div class="card-item__bottom-action">
                    <a href="javascript:">Shop now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->

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

    <!-- ACCREDITATION SECTION -->
    <section class="accreditation">
        <div class="label">Available slots for free Accreditation</div>
        <button class="btn-inquire">INQUIRE</button>
    </section>
    <!-- END ACCREDITATION SECTION -->

    <!-- FEATURE PRODUCTS SECTION -->
    <section class="feature-products">
        <header class="section-header">
            <div class="section-title">FEATURED PRODUCTS</div>
            <a class="section-action" href="javascript:">See all <span class="mdi mdi-chevron-right"></span></a>
        </header>
        <div class="product-wrapper">
            @for ($i = 0; $i < 5; $i++)
                <div class="product-item">
                    <div class="product-item__top">
                        <a href="/product-view" class="product-item__image">
                            <img src="https://static.bhphoto.com/images/images500x500/1484050840_1308819.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-item__bottom">
                        <div class="product-item__info">
                            <div class="product-item__name">Nikon D5600</div>
                            <div class="product-item__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, minus.</div>
                        </div>
                        <div class="product-item__order">
                            <div class="product-item__price">
                                <div class="product-item__current">₱ 24,000</div>
                                <div class="product-item__prev">₱ 42,000</div>
                            </div>
                            <div class="product-item__action">
                                <button class="z-btn-outline">Add to cart</button>
                                <div class="z-star mt-2 d-flex">
                                    <svg class="star-source" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <g id="icon-star">
                                            <path d="M20.388,10.918L32,12.118l-8.735,7.749L25.914,31.4l-9.893-6.088L6.127,31.4l2.695-11.533L0,12.118
                                                    l11.547-1.2L16.026,0.6L20.388,10.918z" />
                                            </g>

                                            <linearGradient id="halfGradient">
                                                <stop stop-opacity="1" offset="50%" stop-color="#FFB317"></stop>
                                                <stop stop-opacity="0" offset="50%"></stop>
                                            </linearGradient>    
                                        </defs>
                                    </svg>

                                    <svg class="star" viewBox="-3 -2 220 36">
                                        <use xlink:href="#icon-star" x="0" y="0" />
                                        <use xlink:href="#icon-star" x="45" y="0"  />      
                                        <use xlink:href="#icon-star" x="90" y="0" /> 
                                        <use xlink:href="#icon-star" x="135" y="0" class="star--half" />       
                                        <use xlink:href="#icon-star" x="180" y="0" class="star--empty" />  
                                    </svg>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
    <!-- END FEATURE PRODUCTS SECTION -->
    
    <!-- MOST POPULAR SECTION -->
    <section class="most-popular">
        <header class="section-header">
            <div class="section-title">MOST POPULAR</div>
            <a class="section-action" href="javascript:">See all <span class="mdi mdi-chevron-right"></span></a>
        </header>
        <div class="product-wrapper">
            @for ($i = 0; $i < 5; $i++)
                <div class="product-item">
                    <div class="product-item__top">
                        <a href="/product-view" class="product-item__image">
                            <img src="https://static.bhphoto.com/images/images500x500/1484050840_1308819.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-item__bottom">
                        <div class="product-item__info">
                            <div class="product-item__name">Nikon D5600</div>
                            <div class="product-item__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, minus.</div>
                        </div>
                        <div class="product-item__order">
                            <div class="product-item__price">
                                <div class="product-item__current">₱ 24,000</div>
                                <div class="product-item__prev">₱ 42,000</div>
                            </div>
                            <div class="product-item__action">
                                <button class="z-btn-outline">Add to cart</button>
                                <div class="z-star mt-2 d-flex">
                                    <svg class="star-source" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <g id="icon-star">
                                            <path d="M20.388,10.918L32,12.118l-8.735,7.749L25.914,31.4l-9.893-6.088L6.127,31.4l2.695-11.533L0,12.118
                                                    l11.547-1.2L16.026,0.6L20.388,10.918z" />
                                            </g>

                                            <linearGradient id="halfGradient">
                                                <stop stop-opacity="1" offset="50%" stop-color="#FFB317"></stop>
                                                <stop stop-opacity="0" offset="50%"></stop>
                                            </linearGradient>    
                                        </defs>
                                    </svg>

                                    <svg class="star" viewBox="-3 -2 220 36">
                                        <use xlink:href="#icon-star" x="0" y="0" />
                                        <use xlink:href="#icon-star" x="45" y="0"  />      
                                        <use xlink:href="#icon-star" x="90" y="0" /> 
                                        <use xlink:href="#icon-star" x="135" y="0" class="star--half" />       
                                        <use xlink:href="#icon-star" x="180" y="0" class="star--empty" />  
                                    </svg>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="d-flex justify-content-center py-3 mt-4">
            <button class="z-btn-filled">LOAD MORE</button>
        </div>
    </section>
    <!-- END MOST POPULAR SECTION -->
    
    <!-- BUILD, RENOVATE, PROJECTS SECTION -->
    <section class="grid">
        <div class="grid__item">
            <div class="label">Build</div>
        </div>
        <div class="grid__item">
            <div class="label">Renovate</div>
        </div>
        <div class="grid__item">
            <div class="label">Projects</div>
        </div>
    </section>
    <!-- END BUILD, RENOVATE, PROJECTS SECTION -->

@endsection

@section('script')
    <script>
        var swiper = new Swiper('.swiper-container', {
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });
  </script>
@endsection