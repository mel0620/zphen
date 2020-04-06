@extends('layout')
@section('content')
    <!-- PRODUCT VIEW -->
    <section class="product-view">
        <div class="product-display">
            <div class="product-display-swiper">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img data-src="https://static.bhphoto.com/images/images500x500/1484050840_1308819.jpg" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://www.dpreview.com/files/p/E~products/nikon_d5600/shots/044f2162cc054a10a4aa442ed1f4a1da.png" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://cdn-4.nikon-cdn.com/e/Q5NM96RZZo-YRYNeYvAi9beHK4x3L-8go_p7JUL6JpQM8B_IxDfxyg==/Views/1575_D5600_back.png" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://www.bhphotovideo.com/images/images2000x2000/nikon_d5600_dslr_camera_with_1308913.jpg" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://www.adorama.com/images/Large/inkd5600bk1b.jpg" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img data-src="https://static.bhphoto.com/images/images500x500/1484050840_1308819.jpg" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://www.dpreview.com/files/p/E~products/nikon_d5600/shots/044f2162cc054a10a4aa442ed1f4a1da.png" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://cdn-4.nikon-cdn.com/e/Q5NM96RZZo-YRYNeYvAi9beHK4x3L-8go_p7JUL6JpQM8B_IxDfxyg==/Views/1575_D5600_back.png" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://www.bhphotovideo.com/images/images2000x2000/nikon_d5600_dslr_camera_with_1308913.jpg" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img data-src="https://www.adorama.com/images/Large/inkd5600bk1b.jpg" class="swiper-lazy" alt="">
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-custom"></div>
                    <div class="swiper-button-prev swiper-button-custom"></div>
                </div>
            </div>
            <div class="product-display-info">
                <div class="product-name">Nikon D5600</div>
                <div class="product-desc">Adorama Nikon D5600 DSLR Camera w/DX 18-140mm f/3.5-56G ED VR Lens w/Premium Acc Bundle</div>
            
                <div class="rating-share">
                    <div class="rating-holder">
                        <div class="c-rating c-rating--small" data-rating-value="3.5">
                            <button>1</button>
                            <button>2</button>
                            <button>3</button>
                            <button>4</button>
                            <button>5</button>
                        </div>
                        <div class="label">97 Ratings / 5 Reviews</div>
                    </div>
                    <a href="javascript:" class="btn-share justify-self-end text-black">
                        <span class="mdi mdi-share-variant"></span>
                    </a>
                </div>

                <div class="pricing">
                    <div class="price-current">₱ 24,000</div>
                    <div class="price-prev-and-discount">
                        <span class="price-prev">₱ 42,000 </span>&nbsp;<span class="price-discount"> - 60% off</span>
                    </div>
                </div>

                <div class="actions">
                    <div class="grid-column-2">
                        <select class="z-input" name="" id="">
                            <option value="">Color Variant</option>
                            <option value="">Black</option>
                        </select>
                        <select class="z-input" name="" id="">
                            <option value="">Size</option>
                            <option value="">Small</option>
                            <option value="">Medium</option>
                            <option value="">Large</option>
                        </select>
                    </div>
                    <div class="grid-column-2 mt-3">
                        <div class="counter">
                            <button>
                                <i class="mdi mdi-minus"></i>
                            </button>
                            <input type="number" value="1">
                            <button>
                                <i class="mdi mdi-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="grid-column-2 mt-3">
                        <button class="z-btn-outline py-2 w-100">Add to Cart</button>
                        <button class="z-btn-filled py-2 w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-shipping">
            <div class="list">
                <div class="list__item">
                    <div class="list__icon">
                        <span class="mdi mdi-map-marker"></span>
                    </div>
                    <div class="list__text">
                        <div class="list__header">Deliver & Shipped to</div>
                        <div class="list__content">Metro Manila,
                            Parañaque City, Brgy, San Isidro
                        </div>
                    </div>
                    <div class="list__action">
                        <a href="javascript:" class="text-link">
                            <span class="mdi mdi-pencil"></span>
                            EDIT
                        </a>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <span class="mdi mdi-credit-card-outline"></span>
                    </div>
                    <div class="list__text">
                        <div class="list__header">Payment Options Available</div>
                        <div class="list__content">Cash on Delivery
                            Cash on Pick-up
                            Online Payment
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <span class="mdi mdi-tag"></span>
                    </div>
                    <div class="list__text">
                        <div class="list__header">Return & Warranty</div>
                        <div class="list__content">7 days return to seller
                            Change of mind is not applicable
                            Warranty not available
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <span class="mdi mdi-store"></span>
                    </div>
                    <div class="list__text">
                        <div class="list__header">Vendor Details</div>
                        <div class="list__content">Company Vendor Name

                            Metro Manila,
                            Quezon City, Quezon City, Project 6

                            <div><span class="fw-regular">Email:</span> company@zphen.com</div>
                            <div><span class="fw-regular">Mobile:</span> 09171125808</div>
                            <div><span class="fw-regular">Landline:</span> 1234567</div>
                        </div>
                    </div>
                    <div class="list__action">
                        <a href="javascript:" class="text-link">
                            <span class="mdi mdi-phone"></span>
                            CALL NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-others-info">
        <div class="product-view-sections">
            <section class="product-view-section product-details">
                <div class="section-header">
                    <div class="section-header__title">Product Details</div>
                </div>
                <div class="section-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptates, ipsam, vitae earum reiciendis quis magnam debitis repellat fuga minima assumenda! Eveniet delectus quasi eos, quis alias libero officiis quas maxime tempora harum minus animi, assumenda atque eaque tempore facere debitis eligendi vel quisquam quaerat? Doloribus necessitatibus quam expedita est ipsam laborum repellat molestiae quaerat. Deserunt totam ducimus hic facilis sed, aliquid porro velit quos eum. Repellat voluptas error voluptate similique, odio expedita omnis laborum necessitatibus in illo! Veniam velit ipsa ipsum enim repellendus provident nihil incidunt sit voluptates neque, doloremque error. Molestias odit voluptatem facere voluptates harum ad incidunt.</p>

                    <div class="image-container">
                        <img src="https://live.staticflickr.com/2596/32938264502_1919dd4f65_b.jpg" alt="">
                    </div>
                </div>
            </section>
            <section class="product-view-section">
                <div class="section-header">
                    <div class="section-header__title">Product Rating</div>
                </div>
                <div class="section-body">
                    
                </div>
            </section>
            <section class="product-view-section product-review">
                <div class="section-header">
                    <div class="section-header__title">Product Review</div>
                </div>
                <div class="section-body">
                    <div class="review-wrapper">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="review-item">
                                <div class="review-item__header">
                                    <div class="left">
                                        <div class="rating-holder d-flex justify-content-start">
                                            <div class="c-rating c-rating--small" data-rating-value="3.5">
                                                <button>1</button>
                                                <button>2</button>
                                                <button>3</button>
                                                <button>4</button>
                                                <button>5</button>
                                            </div>
                                        </div>
                                        <div class="reviewer">John Doe</div>
                                    </div>
                                    <div class="right">2 Weeks ago</div>
                                </div>
                                <div class="review-item__body">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore ratione, aperiam iste quos nesciunt maxime nemo doloribus cumque. Recusandae, vero eligendi quisquam cumque, fugiat accusamus itaque quam pariatur earum maxime placeat ab doloremque laborum libero eaque doloribus vitae impedit? Aliquam illum non, similique dignissimos consectetur iste nulla neque optio fugit.</p>

                                    <div class="media-wrapper">
                                        <a class="media" target="_blank" href="https://cnet3.cbsistatic.com/img/qhohkY6EeDYWs1xoyHCiE6tDCeM=/868x488/2017/10/10/0b2a6d82-8284-4209-90ae-7cab09d3cd81/14-nikon-d5600.jpg">
                                            <img src="https://cnet3.cbsistatic.com/img/qhohkY6EeDYWs1xoyHCiE6tDCeM=/868x488/2017/10/10/0b2a6d82-8284-4209-90ae-7cab09d3cd81/14-nikon-d5600.jpg" alt="">
                                        </a>
                                        <a class="media" target="_blank" href="https://3.img-dpreview.com/files/p/E~TS590x393~articles/6109279344/d5600_handson_01.jpeg">
                                            <img src="https://3.img-dpreview.com/files/p/E~TS590x393~articles/6109279344/d5600_handson_01.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>
        </div>
        <div class="ads">
            <div class="ads__item"></div>
            <div class="ads__item"></div>
            <div class="ads__item"></div>
        </div>
    </section>
    <section class="may-also-like mt-3">
        <header class="section-header">
            <div class="section-title">YOU MAY ALSO LIKE</div>
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
                                <div class="rating-holder d-flex justify-content-end">
                                    <div class="c-rating c-rating--small" data-rating-value="3.5">
                                        <button>1</button>
                                        <button>2</button>
                                        <button>3</button>
                                        <button>4</button>
                                        <button>5</button>
                                    </div>
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
@endsection

@section('script')
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        lazy: true,
        spaceBetween: 10,
        slidesPerView: 4,
        // freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    var galleryTop = new Swiper('.gallery-top', {
        lazy: true,
        spaceBetween: 10,
        thumbs: {
            swiper: galleryThumbs
        }
    });
</script>
@endsection