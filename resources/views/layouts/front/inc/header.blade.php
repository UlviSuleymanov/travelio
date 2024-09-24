<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">
    <!-- Site Title -->
    <title>Traven - Personal & Lifestyle Blog HTML Template</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<header class="cs_site_header cs_style_1 cs_with_hamburger cs_primary_color cs_sticky_header">
    <div class="cs_main_header">
        <div class="container-fluid">
            <div class="cs_main_header_in">
                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="index.html">
                        <img src="{{asset('assets/img/logo.svg')}}" alt="Logo">
                    </a>
                </div>
                <div class="cs_main_header_right">
                    <div class="cs_header_btns">
                        <button class="cs_search_toggle_btn" type="button">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M24.9999 24.0271L18.477 17.5042C20.1714 15.4319 21.0045 12.7876 20.8039 10.1183C20.6033 7.44901 19.3845 4.9589 17.3995 3.16306C15.4144 1.36722 12.8151 0.40303 10.1391 0.469938C7.46312 0.536846 4.91521 1.62973 3.02241 3.52253C1.12961 5.41533 0.036724 7.96324 -0.0301841 10.6392C-0.0970923 13.3152 0.867093 15.9146 2.66294 17.8996C4.45878 19.8846 6.94889 21.1035 9.61819 21.304C12.2875 21.5046 14.9318 20.6715 17.0041 18.9771L23.527 25.5L24.9999 24.0271ZM10.4166 19.25C8.76838 19.25 7.15722 18.7613 5.78681 17.8456C4.4164 16.9299 3.3483 15.6284 2.71757 14.1057C2.08683 12.583 1.92181 10.9074 2.24335 9.29093C2.56489 7.67442 3.35857 6.18956 4.52401 5.02413C5.68944 3.85869 7.1743 3.06502 8.79081 2.74347C10.4073 2.42193 12.0829 2.58696 13.6056 3.21769C15.1283 3.84842 16.4298 4.91652 17.3455 6.28693C18.2612 7.65734 18.7499 9.26851 18.7499 10.9167C18.7474 13.1261 17.8686 15.2442 16.3064 16.8065C14.7441 18.3688 12.6259 19.2475 10.4166 19.25Z" fill="currentColor"/>
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="25" height="25" fill="white" transform="translate(0 0.5)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <button class="cs_hamburger_btn cs_hamburger_icon" type="button">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="cs_hamburger_header">
    <div class="cs_hamburger_in">
        <button class="cs_hamburger_close" type="button">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.4233 14.7567L21.18 20L26.4233 25.2433C26.7483 25.5683 26.7483 26.0967 26.4233 26.4217C26.26 26.585 26.0467 26.665 25.8333 26.665C25.62 26.665 25.4067 26.5833 25.2433 26.4217L20 21.1783L14.7567 26.4217C14.5933 26.585 14.38 26.665 14.1667 26.665C13.9533 26.665 13.74 26.5833 13.5767 26.4217C13.2517 26.0967 13.2517 25.5683 13.5767 25.2433L18.82 20L13.5767 14.7567C13.2517 14.4317 13.2517 13.9033 13.5767 13.5783C13.9017 13.2533 14.43 13.2533 14.755 13.5783L19.9983 18.8217L25.2417 13.5783C25.5667 13.2533 26.095 13.2533 26.42 13.5783C26.745 13.9033 26.745 14.4317 26.42 14.7567H26.4233ZM40 20C40 31.0283 31.0283 40 20 40C8.97167 40 0 31.0283 0 20C0 8.97167 8.97167 0 20 0C31.0283 0 40 8.97167 40 20ZM38.3333 20C38.3333 9.89167 30.1083 1.66667 20 1.66667C9.89167 1.66667 1.66667 9.89167 1.66667 20C1.66667 30.1083 9.89167 38.3333 20 38.3333C30.1083 38.3333 38.3333 30.1083 38.3333 20Z" fill="currentColor"/>
            </svg>
        </button>
        <div class="cs_hamburger_overlay cs_header_overlay"></div>
        <div class="cs_hamburger_nav">
            <ul class="cs_hamburger_nav_list cs_fs_45 cs_white_color">
                <li class="menu-item-has-children">
                    <a href="index.html">Home</a>
                    <ul>
                        <li><a href="index.html">Lifestyle</a></li>
                        <li><a href="podcast.html">Podcast</a></li>
                        <li><a href="creative.html">Creative</a></li>
                        <li><a href="fashion.html">Fashion</a></li>
                        <li><a href="cooking.html">Cooking</a></li>
                        <li><a href="travel.html">Travel</a></li>
                        <li><a href="dev.html">DEV</a></li>
                        <li><a href="classic.html">Classic</a></li>
                        <li><a href="personal.html">Personal</a></li>
                        <li><a href="masonary.html">Masonary</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="episodes.html">Episodes</a></li>
                        <li><a href="archive.html">Archive</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="blogs.html">Blogs</a>
                    <ul>
                        <li><a href="blogs.html">Blog Grid</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                        <li><a href="blog-details-v2.html">Blog Details V2</a></li>
                        <li><a href="blog-details-v3.html">Blog Details V3</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="cs_social_links cs_style_1">
            <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i>WhatsApp</a>
        </div>
    </div>
</div>
<div class="cs_modal_search cs_center">
    <div class="cs_search_overlay cs_header_overlay"></div>
    <form action="#" class="cs_modal_search_form">
        <button class="cs_search_close" type="button">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.4233 14.7567L21.18 20L26.4233 25.2433C26.7483 25.5683 26.7483 26.0967 26.4233 26.4217C26.26 26.585 26.0467 26.665 25.8333 26.665C25.62 26.665 25.4067 26.5833 25.2433 26.4217L20 21.1783L14.7567 26.4217C14.5933 26.585 14.38 26.665 14.1667 26.665C13.9533 26.665 13.74 26.5833 13.5767 26.4217C13.2517 26.0967 13.2517 25.5683 13.5767 25.2433L18.82 20L13.5767 14.7567C13.2517 14.4317 13.2517 13.9033 13.5767 13.5783C13.9017 13.2533 14.43 13.2533 14.755 13.5783L19.9983 18.8217L25.2417 13.5783C25.5667 13.2533 26.095 13.2533 26.42 13.5783C26.745 13.9033 26.745 14.4317 26.42 14.7567H26.4233ZM40 20C40 31.0283 31.0283 40 20 40C8.97167 40 0 31.0283 0 20C0 8.97167 8.97167 0 20 0C31.0283 0 40 8.97167 40 20ZM38.3333 20C38.3333 9.89167 30.1083 1.66667 20 1.66667C9.89167 1.66667 1.66667 9.89167 1.66667 20C1.66667 30.1083 9.89167 38.3333 20 38.3333C30.1083 38.3333 38.3333 30.1083 38.3333 20Z" fill="currentColor"/>
            </svg>
        </button>
        <input type="text" placeholder="Type to search..." class="cs_fs_32 cs_modal_search_input">
    </form>
</div>
<div class="cs_header_height_100"></div>
