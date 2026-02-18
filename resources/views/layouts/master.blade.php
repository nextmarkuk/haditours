<!DOCTYPE html>

<html lang="en-GB">

<head>
    <meta charset="utf-8">
    @yield('meta')
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/png">
    <meta name="google-site-verification" content="2qZwf-NipKZhqF73LrKkCL-T1lwmd69Hpr-J5_ST3kk" />
    <script>
        function loadCCWidget() {
            (new window["click-connector-widget"]).mount({})
        }

        function loadCCScript() {
            var t = document.createElement("script");
            t.id = "cc-widget-script", t.setAttribute("data-widget-id", "de41f0-ffdd9"), t.type = "text/javascript", t.defer = !0, t.addEventListener("load", (function(t) {
                loadCCWidget()
            })), t.src = "https://widget.clickconnector.app/widget.js", document.getElementsByTagName("head")[0].appendChild(t)
        }
        loadCCScript();
    </script>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@hajjumrahhub">
    <meta name="twitter:title" content="Trusted Islamic Travel Agency in the UK for Umrah Services">
    <meta name="twitter:description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
    <meta name="twitter:creator" content="@hajjumrahhub">
    <meta name="twitter:image:src" content="https://www.hajjumrahhub.co.uk/userfiles/files/hajjumrahhub_logo11.jpeg">
    <meta name="twitter:domain" content="https://www.hajjumrahhub.co.uk/">
    <link rel="canonical" href="https://www.hajjumrahhub.co.uk/" />
    
    <!-- facebook -->
    <meta property="og:title" content="Trusted Islamic Travel Agency in the UK for Umrah Services" />
    <meta property="og:type" content="Hajj & Umrah" />
    <meta property="og:image" content="https://www.hajjumrahhub.co.uk/userfiles/files/hajjumrahhub_logo11.jpeg" />
    <meta property="og:url" content="https://www.hajjumrahhub.co.uk/" />
    <meta property="og:description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals." />

    <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery-ui-autocomplete.min.css')}}">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&display=swap">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap">
    <!-- Preload Google Fonts (Playfair Display) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" media="print" onload="this.media='all'">
    <!-- Preload Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--fonts-->
    <!--owl carousel-->
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.default.min.css')}}" rel="stylesheet">
    <!--owl carousel-->
    <link href="{{asset('assets/css/checkbox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.offcanvas.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/datepicker.style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/upload-style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <link rel="preload" href="{{asset('assets/media/pages/home-page-banner-for-huh-1.jpeg')}}" as="image" type="image/webp">
    <link rel="preconnect" href="https://embed.tawk.to">
    <link rel="preconnect" href="https://www.googleadservices.com">
    <link rel="preconnect" href="https://googleads.g.doubleclick.net">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://analytics.google.com">
    <link rel="preconnect" href="https://www.google.com.pk">
    <link rel="preconnect" href="https://www.google.com">
    <style>
        .featuredPackagesUid .item {
            max-width: 545px;
        }
    </style>
</head>

<body>
    <!--header section Start-->
    @include('layouts.header')
    <!--header section End-->
    @yield('content')
    <!--footer section Start-->
    @include('layouts.footer')
    <!--footer section End-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script defer src="{{asset('assets/js/popper.min.js')}}"></script>
    <script defer src="{{asset('assets/js/bootstrap.offcanvas.min.js')}}"></script>
    <script defer src="{{asset('assets/js/jquery.matchHeight-min.js')}}"></script>
    <script defer src="{{asset('assets/js/jquery-ui-autocomplete.min.js')}}"></script>
    <script defer src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script defer src="{{asset('assets/js/jquery.fileupload.js')}}" async></script>
    <script defer src="{{asset('assets/js/lity.js')}}"></script>
    <script defer src="{{asset('assets/js/smooth_scroll.js')}}"></script>
    <script src="{{asset('assets/js/svg.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script type="text/javascript">
        var base_url = "https://www.hajjumrahhub.co.uk";
        $().ready(function() {
            customUploader(base_url);
        });
    </script>
    <!-- Meta Pixel Code -->
    <script async defer>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '227919139647499');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=227919139647499&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX9P9TQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script async defer src="https://www.googletagmanager.com/gtag/js?id=AW-10950422211"></script>
    <script async defer>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10950422211');
    </script>
    <script async defer>
        gtag('event', 'conversion', {
            'send_to': 'AW-10950422211/vjiqCLDV-s0DEMPdyOUo'
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-76624980-1"></script>
    <script async defer>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-76624980-1');
    </script>
    <!-- Google Tag Manager -->
    <script async defer>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KX9P9TQ');
    </script>
    <!-- End Google Tag Manager -->
    </script>
</body>
</html>