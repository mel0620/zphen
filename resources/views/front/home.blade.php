@extends("layout")
@section('content')
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="categories">
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
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
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
                    <button>Be a vendor</button>
                </div>
            </div>
            <div class="card-item">
                <div class="card-item__content">

                </div>
                <div class="card-item__bottom-action">
                    <button>Sell Used Items</button>
                </div>
            </div>
            <div class="card-item">
                <div class="card-item__content">

                </div>
                <div class="card-item__bottom-action">
                    <button>Shop now</button>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->

    <!-- ADS SECTION -->
    <section class="ads-section">
        @for ($i = 0; $i < 2; $i++)
        <div class="ads">
            <span>zphen ads</span>
        </div>
        @endfor
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
                        <div class="product-item__image">
                            <img src="https://static.bhphoto.com/images/images500x500/1484050840_1308819.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-item__bottom">
                        <div class="product-item__info">
                            <div class="product-item__name">Nikon D5600</div>
                            <div class="product-item__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, minus.</div>
                        </div>
                        <div class="product-item__order">
                            <div class="product-item__price">
                                <div class="product-item__current">₱ 24,000.00</div>
                                <div class="product-item__prev">₱ 42,000.00</div>
                            </div>
                            <div class="product-item__action">
                                <button class="z-btn-outline">Add to cart</button>
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
                        <div class="product-item__image">
                            <img src="https://static.bhphoto.com/images/images500x500/1484050840_1308819.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-item__bottom">
                        <div class="product-item__info">
                            <div class="product-item__name">Nikon D5600</div>
                            <div class="product-item__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, minus.</div>
                        </div>
                        <div class="product-item__order">
                            <div class="product-item__price">
                                <div class="product-item__current">₱ 24,000.00</div>
                                <div class="product-item__prev">₱ 42,000.00</div>
                            </div>
                            <div class="product-item__action">
                                <button class="z-btn-outline">Add to cart</button>
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

@section('style')
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
@endsection

@section('script')
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
        },
    });
  </script>
@endsection