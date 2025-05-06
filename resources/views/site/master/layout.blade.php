<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="ALL" />
    <meta property="og:title" content="{{ isset($seo['title']) ? $seo['title'] : '' }}" />
    <meta property="og:description" content="{{ isset($seo['description']) ? $seo['description'] : '' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="description" content="{{ $seo['description'] ?? '' }}" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:site_name" content="{{ isset($seo['title']) ? $seo['title'] : '' }}" />

    @if (!empty($seo['keywords']))
        <meta name="keywords"
            content="{{ (json_decode($seo['keywords']) ? implode(',', json_decode($seo['keywords'], true)) : $seo['keywords']) ?? '' }}" />
    @endif
    @if (!empty($seo['canonical']))
        <link rel="canonical" href="{{ $seo['canonical'] ?? '' }}" />
    @endif

    @if (!empty($general['favicon']))
        <link rel="icon" href="storage/{{ $general['favicon'] }}">
    @endif

    @if (isset($seo['seo_img']))
        <meta property="og:image" content="{{ resize('storage/' . $seo['seo_img'], 512) }}" />
    @endif

    <base href="{{ url('') }}" />

    <title>{{ isset($seo['title']) ? $seo['title'] : '' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />



    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/qutiiz-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/qutiiz-icons-two/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/qutiiz.css" />


    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="assets/site/css/vendor.css?v=<?= filemtime('assets/site/css/vendor.css') ?>" rel="stylesheet">
    <link href="assets/site/css/main.css?v=<?= filemtime('assets/site/css/main.css') ?>" rel="stylesheet">



    @yield('css')

    {!! $general['script_head'] !!}

</head>

<body>

    {!! $general['script_body'] !!}

    @yield('content')

    @if (session()->has('user') && session('user'))
        <div class="cms-bar">
            <div class="cms-bar__row">
                <div class="text">
                    Deseja continuar editando o conteúdo do site?
                </div>
                <div class="button">
                    <a href="{{ session()->has('_previous') && strpos(session('_previous')['url'], 'gerenciador') !== false ? session('_previous')['url'] : route('admin.dashboard') }}"
                        class="btn">
                        VOLTAR PARA A EDIÇÃO
                    </a>
                </div>
            </div>
        </div>
    @endif

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/site/js/vendor.js?v=<?= filemtime('assets/site/js/vendor.js') ?>"></script>
    <script src="assets/site/js/main.js?v=<?= filemtime('assets/site/js/main.js') ?>" type="module"></script>qutiiz.js


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="assets/js/qutiiz.js"></script>





    @yield('js')

    {!! $general['script_footer'] !!}

</body>

</html>
