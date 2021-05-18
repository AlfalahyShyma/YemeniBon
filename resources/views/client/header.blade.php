<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    
    <title>Yemeni Bon</title>

    <meta name="title" content="Yemeni Bon">
    <meta name="description" content="This is a Yemeni website that specialled in coffee and shows tools, types, and preparation of coffee. Also show different coffee projects.">
    <meta name="keywords" content="Coffee, Bon, Yemeni, Arabica, بن, البن اليمني, tools, types, how to, how to make, yemeni coffee, mocka, roaster, coffee maker, القهوة, robusta, liberica, cafe,  ‎Coffee bean,  ‎Coffee preparation ,  ‎Coffee roasting, coffee shop, coffee tree, شجرة البن">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">


    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>

    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('asset/css/main_style.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/content_style.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/pages_style.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/pre_style.css')}}" />

    <!-- Favicons -->
    <link href="{{asset('img/title.png')}} " rel="icon">

    {{-- animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />
    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="50" translate="no">
    <!-- Navigation -->

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <section class="navigation">
            <header>
                <div class="toggle"></div>
                <nav class="menu">
                    <div class="logo"><img loading="auto" src="{{asset('asset/img/logo.svg')}}" alt="" srcset="" width="80" height="80"></div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/publication">Publication</a></li>
                        <li class="sub-menu"><a href="#">World of coffee</a>
                            <ul>
                                <li><a href="#">Types</a></li>
                                <li><a href="#">Tools</a></li>
                                <li><a href="#">How To</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="search-icon"></div>
            </header>
        </section>

        <div class="search-box">
            <input type="text" placeholder="search...">
            <div class="s-icon"><i class="fas fa-search"></i></div>
        </div>
    </nav>