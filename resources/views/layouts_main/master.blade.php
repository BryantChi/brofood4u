<!DOCTYPE html>
<html lang="zh_TW">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description" content="{{ $seoInfo->description ?? '' }}" />
    <meta name="keywords" content="{{ $seoInfo->keywords ?? '' }}" />
    <meta property="og:locale" content="zh_TW" />
    <meta name="author" content="紀孟勳 Bryantchi.work@gmail.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seoInfo->og_title ?? '' }}" />
    <meta property="og:description" content="{{ $seoInfo->og_discription ?? '' }}" />
    <meta property="og:image" content="{{ asset('assets/images/fimgs/fbimg.jpg') }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="{{ $seoInfo->og_site_name ?? '兄弟會客菜' }}" />
    <title>{{ $seoInfo->title ?? '兄弟會客菜' }}</title>
    <meta name="title" content="{{ $seoInfo->title ?? '兄弟會客菜' }}" />
    <link rel="canonical" href="{{ url()->full() }}" />

    <!-- Favicons -->
    <link href="{{ asset('assets/images/LOGO/資產 2.png') }}" rel="icon">
    <link href="{{ asset('assets/images/LOGO/資產 2.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- FancyBox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}?v={{time()}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}?v={{time()}}">

    <link rel="preload" as="image" href="{{ asset('assets/images/Banner/1.png')}}">
</head>

<body class="index-page">

    @include('layouts_main.header')

    @include('layouts_main.hero')

    @yield('content')

    @include('layouts_main.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>


    <div class="d-none d-md-block social-links-btn">
        <a href="https://lin.ee/EC88vJt?fbclid=IwZXh0bgNhZW0CMTAAAR06B3jHdL4BSwQxROcegWxJw4HZ1EkJ6Ej2da1Uj17qHO3ymwWTfZ3eCSA_aem_6PGVjVlqvp0xcksExTeNqA"
            class="d-none d-md-block"><img src="{{ asset('assets/images/left_line.png') }}"
                class="img-fluid left-line-img" alt=""></a>
        <a href="https://www.facebook.com/profile.php?id=61572163022204" class="d-none d-md-block"><img
                src="{{ asset('assets/images/left_mes.png') }}" class="img-fluid left-msg-img" alt=""></a>
    </div>


    <div class="d-flex d-md-none w-100 position-fixed bottom-0 left-0 social-links-btn-mobile">
        <div class="row justify-content-center align-content-center text-center p-0 m-0 w-100">
            <div class="col-6 s-line-btn align-self-center">
                <a href="https://lin.ee/EC88vJt?fbclid=IwZXh0bgNhZW0CMTAAAR06B3jHdL4BSwQxROcegWxJw4HZ1EkJ6Ej2da1Uj17qHO3ymwWTfZ3eCSA_aem_6PGVjVlqvp0xcksExTeNqA"
                    target="_blank">
                    <span><i class="bi bi-line"></i></span> 下單訂購
                </a>
            </div>
            <div class="col-6 s-phone-btn align-self-center">
                <a href="tel:0900-730-256" target="_blank">
                    <span><i class="bi bi-telephone-fill"></i></span> 聯絡專人
                </a>
            </div>
            <!-- <div class="col-4 s-location-btn align-self-center">
            <a href="" target="_blank">
                <span><i class="bi bi-map-fill"></i></span> 地址導航
            </a>
        </div> -->
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <!-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js "></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.js')}}?v={{time()}}"></script>
    <script src="{{asset('assets/js/custom.js')}}?v={{time()}}"></script>

</body>

</html>
