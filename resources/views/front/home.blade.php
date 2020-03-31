@extends("layout")
@section('content')
    <section class="hero-section">
        <div class="categories">
            <div class="categories__label">Categories</div>
            <ul class="categories__items" id="custom-scroll">
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Construction</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                    <ul class="sub-category">
                        @for ($i = 0; $i < 10; $i++)
                            <li class="sub-category__item">
                                <a class="sub-categories__item-link" href="javascript:">
                                    <span class="text">Lorem ipsum</span>
                                </a>
                            </li>
                        @endfor
                    </ul>
                </li>
                <li class="categories__item">
                    <a class="categories__item-link" href="javascript:">
                        <span class="text">Automotive</span>
                        <span class="mdi mdi-chevron-right"></span>
                    </a>
                    {{-- <ul class="sub-category">
                        @for ($i = 0; $i < 10; $i++)
                            <li class="sub-category__item">
                                <a class="sub-categories__item-link" href="javascript:">
                                    <span class="text">Lorem ipsum</span>
                                </a>
                            </li>
                        @endfor
                    </ul> --}}
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
    <section class="ads-section">
        @for ($i = 0; $i < 2; $i++)
            <div class="ads">
                <span>zphen ads</span>
            </div>
        @endfor
    </section>
    <section class="accreditation">
        <div class="label">Available slots for free Accreditation</div>
        <button class="btn-inquire">INQUIRE</button>
    </section>
    <section class="feature-products">
        <header class="section-header">
            <div class="section-title">FEATURED PRODUCTS</div>
            <a class="section-action" href="javascript:">See all <span class="mdi mdi-chevron-right"></span></a>
        </header>
    </section>
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