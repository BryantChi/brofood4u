@extends('layouts_main.master')

@section('content')
    <main class="main">

        <section id="services" class="servives py-0">
            <div class="container-fluid p-0 m-0">
                <div class="row align-items-center" data-aos="fade-in" data-aos-delay="250">
                    <div
                        class="col-md-4 position-relative d-flex justify-content-center align-items-center overflow-hidden services-content">
                        <div class="sbg sbg-1"></div>
                        <div class="py-5 text-center services-text position-relative z-2 text-white">
                            <h4 class="text-white" data-aos="fade-up" data-aos-delay="350">彰化、台中會客送外送服務</h4>
                        </div>
                    </div>
                    <div
                        class="col-md-4 position-relative d-flex justify-content-center align-items-center overflow-hidden services-content">
                        <div class="sbg sbg-2"></div>
                        <div class="py-5 text-center services-text position-relative z-2 text-white">
                            <h4 class="text-white" data-aos="fade-up" data-aos-delay="450">探監會客菜寄送、代寄錢、代寄百貨</h4>
                        </div>
                    </div>
                    <div
                        class="col-md-4 position-relative d-flex justify-content-center align-items-center overflow-hidden services-content">
                        <div class="sbg sbg-3"></div>
                        <div class="py-5 text-center services-text position-relative z-2 text-white">
                            <h4 class="text-white" data-aos="fade-up" data-aos-delay="550">訂購歡迎洽詢官方Line@</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">



            <div class="container">

                <div class="row gy-4 justify-content-center align-items-end position-relative">
                    <div class="col-lg-6 d-flex flex-column h-100" style="min-height: 100%;" data-aos="fade-right"
                        data-aos-delay="100">
                        <img src="{{ asset('assets/images/可用素材圖/1.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                            style="object-position: center;min-height: 320px;" alt="">
                    </div>
                    <!-- <div class="col-4 d-md-block d-none"></div> -->
                    <div class="col-lg-5 position-relative pe-lg-5 p-3 mx-lg-0 mx-3" data-aos="fade-left"
                        data-aos-delay="250">
                        <div class="about-content-mask z-2"></div>
                        <!-- Section Title -->
                        <div class="container section-title pb-3 text-lg-end text-start z-3" data-aos="fade-up"
                            data-aos-delay="450">
                            <h2>About Us<br></h2>
                            <!-- <p><span>Learn More</span> <span class="description-title">About Us</span></p> -->
                            <p><span>品牌</span> <span class="description-title">介紹</span></p>
                        </div>
                        <!-- End Section Title -->
                        <div class="content ps-0 ps-lg-4 position-relative z-3" data-aos="fade-up" data-aos-delay="550">
                            <p class="fst-italic">

                            </p>
                            <p class="text-justify">
                                阿宏年少時離開家鄉，迷失於社會的誘惑與現實。經歷過監獄生活的他，因一場與阿嬤的重逢，終於痛覺醒悟。出獄後，他學會烹飪，開設餐館，並以「兄弟會客菜」為名，傳遞家的溫暖。餐館不僅提供溫情料理，亦為迷失的年輕人提供第二次機會，教他們廚藝與服務，幫助他們重新定義人生方向。
                            </p>

                            <!-- <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div> -->
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <section id="latest-menu" class="latest-menu section light-background">

            <!-- Section Title -->
            <div class="container section-title pb-3" data-aos="fade-up">
                <h2>- Our Menu -</h2>
                <p><span>最新</span> <span class="description-title">菜單</span></p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="text-center mb-4">
                    <!-- <h2 class="accent">最新菜單</h2> -->
                    <!-- <p>最近更新日：2025/1/24</p> -->
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3" data-aos="fade-right" data-aos-delay="100">
                        <a href="{{ asset('assets/images/最新菜單/1.jpg') }}" data-fancybox="_menu">
                            <img src="{{ asset('assets/images/最新菜單/1.jpg') }}" alt="菜單圖片1" class="img-fluid" />
                        </a>
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-left" data-aos-delay="250">
                        <a href="{{ asset('assets/images/最新菜單/2.jpg') }}" data-fancybox="_menu">
                            <img src="{{ asset('assets/images/最新菜單/2.jpg') }}" alt="菜單圖片2" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section id="delivery" class="delivery section">
            <div class="container section-title pb-3" data-aos="fade-up">
                <h2>- popular Delivery -</h2>
                <p><span>精選</span> <span class="description-title">菜色</span></p>
            </div>
            <div class="swiper mySwiper" data-aos="fade-up" data-aos-delay="150">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/精選菜色/三杯菇菇炊飯.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price d-none"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    三杯菇菇炊飯
                                </h2>
                                <h3 class="food-rating">
                                    <span class="fw-bold">5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/精選菜色/涼拌酸辣木瓜絲.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price d-none"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    涼拌酸辣木瓜絲
                                </h2>
                                <h3 class="food-rating">
                                    <span class="fw-bold">5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/精選菜色/涼拌酸辣黃瓜.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price d-none"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    涼拌酸辣黃瓜
                                </h2>
                                <h3 class="food-rating">
                                    <span class="fw-bold">5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/精選菜色/蔥爆蝦仁.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price d-none"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    蔥爆蝦仁
                                </h2>
                                <h3 class="food-rating">
                                    <span class="fw-bold">5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/精選菜色/蝦仁滑蛋.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price d-none"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    蝦仁滑蛋
                                </h2>
                                <h3 class="food-rating">
                                    <span class="fw-bold">5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/精選菜色/麻辣鮮蝦.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price d-none"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    麻辣鮮蝦
                                </h2>
                                <h3 class="food-rating">
                                    <span class="fw-bold">5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="swiper-pagination"></div> -->
                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>

        <section id="faq" class="faq section light-background">
            <div class="container section-title pb-3 mb-2" data-aos="fade-up">
                <h2>- Faq -</h2>
                <p><span>常見</span> <span class="description-title">問答</span></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q1.</span>每天都可以幫忙寄菜嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    除了每月的第一個週日外，每週六、日不開放寄菜，其餘時間皆可提供寄菜服務。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q2.</span>每次寄菜有最低數量或金額限制嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們沒有最低數量限制，只要有下單，都能安排寄送。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q3.</span>全台監所都可以幫忙寄菜嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    目前我們可寄送至彰化區及台中區的監所，其中台中地區每次寄送需額外加收 200 元。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q4.</span>代寄現金需要手續費嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    代寄現金不需要手續費，但需為曾經配合過寄菜的朋友，以確保服務品質。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="500">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q5.</span>需要幫忙寄菜需要提供什麼？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    需請您提供同學的位置、編號。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="600">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q6.</span>最晚需要提前多久下單？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    請至少提前 7 天 下單，若有緊急需求，請先與我們聯繫確認。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="700">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q7.</span>可以指定送達時間嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們會依照您的需求安排寄菜日期，但無法保證確切送達時間，實際配送依監所規範與流程為主。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="800">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q8.</span>有哪些付款方式？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    目前僅提供現金轉帳，付款後請告知轉帳#後五碼。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="900">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q9.</span>如何確認餐點是否成功送達？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    完成出餐，我們會以LINE通知您，並附上聯單照片。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3" data-aos="fade-up" data-aos-delay="1000">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="q-num">Q10.</span>可以訂購菜單以外的餐點嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-plus-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們提供代購小吃服務，除了菜單上的餐點，您也可以聯繫我們提出需求。每筆代購將酌收 200 元跑腿費。
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>- Contact -</h2>
                <p><span>聯絡</span> <span class="description-title">我們</span></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- <div class="mb-5">

        </div> -->
                <!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-4 half p-4 ftco-animate">
                        <div class="contact-box h-100">
                            <div class="contact-content m-3 text-center">
                                <h4 class="text-uppercase m-0 text-light">
                                    兄弟會客菜</h4>
                                <div class="liner-h-2 mx-auto my-4"></div>
                                <div class="cta-s-1 text-center p-3 mb-3 mx-auto"
                                    style="width: max-content;background-color: #FFFFFFCC !important;">
                                    <h4>預約方式</h4>
                                    <h5 style="font-size: 20px;"><a
                                            href="https://lin.ee/EC88vJt?fbclid=IwZXh0bgNhZW0CMTAAAR06B3jHdL4BSwQxROcegWxJw4HZ1EkJ6Ej2da1Uj17qHO3ymwWTfZ3eCSA_aem_6PGVjVlqvp0xcksExTeNqA">Line預約</a>
                                    </h5>
                                    <div class="liner-h mx-auto"></div>
                                </div>
                                <div class="d-flex justify-content-center mb-4">
                                    <a href="https://www.facebook.com/profile.php?id=61572163022204"><img
                                            src="{{ asset('assets/images/icon/facebook.png') }}" class="img-fluid mx-2"
                                            width="26" alt=""></a>
                                    <a
                                        href="https://lin.ee/EC88vJt?fbclid=IwZXh0bgNhZW0CMTAAAR06B3jHdL4BSwQxROcegWxJw4HZ1EkJ6Ej2da1Uj17qHO3ymwWTfZ3eCSA_aem_6PGVjVlqvp0xcksExTeNqA"><img
                                            src="{{ asset('assets/images/icon/line.png') }}" class="img-fluid mx-2"
                                            width="26" alt=""></a>
                                    <a href="https://www.instagram.com/brofood4u/"><img
                                            src="{{ asset('assets/images/icon/instagram.png') }}" class="img-fluid mx-2"
                                            width="26" alt=""></a>
                                </div>
                                <p>
                                    <a href="https://maps.app.goo.gl/ueCrGrThqgr7Fe8u7" class="text-light"><i
                                            class="icon bi bi-geo-alt flex-shrink-0"></i> 彰化縣溪湖郵局第35號信箱</a><br>
                                    <a href="tel:0900-730-256" class="text-light"><i
                                            class="icon bi bi-telephone flex-shrink-0"></i> 0900-730-256</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <iframe style="width: 100%; height: 400px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.936664585369!2d120.47764047534257!3d23.962679678526268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34694977be54eb29%3A0x1591ad024bd1b841!2z5rqq5rmW6YO15bGA!5e0!3m2!1szh-TW!2stw!4v1740310419884!5m2!1szh-TW!2stw"
                            frameborder="0" allowfullscreen=""></iframe>
                    </div>

                    <!-- <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>聯絡地址</h3>
                <p><a href="https://maps.app.goo.gl/ueCrGrThqgr7Fe8u7">彰化縣溪湖郵局第35號信箱</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>聯絡電話</h3>
                <p><a href="tel:0900-730-256">0900-730-256</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-facebook flex-shrink-0"></i>
              <div>
                <h3>Facebook</h3>
                <p><a href="https://www.facebook.com/profile.php?id=61572163022204">兄弟會客菜</a><br>追蹤我們-Facebook</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-instagram flex-shrink-0"></i>
              <div>
                <h3>Instagram</h3>
                <p><a href="https://www.instagram.com/brofood4u/">兄弟會客菜</a><br>追蹤我們-Instagram</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-line flex-shrink-0"></i>
              <div>
                <h3>Line</h3>
                <p><a href="https://lin.ee/EC88vJt?fbclid=IwZXh0bgNhZW0CMTAAAR06B3jHdL4BSwQxROcegWxJw4HZ1EkJ6Ej2da1Uj17qHO3ymwWTfZ3eCSA_aem_6PGVjVlqvp0xcksExTeNqA">兄弟會客菜</a><br>下單訂購-line ID</p>
              </div>
            </div>
          </div> -->

                </div>



            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection
