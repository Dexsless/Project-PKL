<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinansialKu</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.svg">
    <!-- CSS plugins files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Start Preloader -->
    <div class="cs_perloader">
        <div class="cs_perloader_in">
            <div class="cs_perloader_dots_wrap">
                <div class="cs_perloader_dots"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <span class="cs_perloader_text">Loading...</span>
    </div>
    <!-- End Preloader -->
    <!-- Start Header section -->
    <header class="cs_site_header cs_style_1 cs_version_2 cs_text_primary cs_sticky_header cs_medium">
        <div class="cs_main_header">
            <div class="container">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left">
                        <a class="cs_site_branding" href="">
                            {{-- <img src="assets/img/logo2.svg" alt="Logo"> --}}
                            <h4 style="color: black">Finansial<strong style="color: greenyellow">Ku</strong></h4>
                        </a>
                    </div>
                    <div class="cs_main_header_center">
                        <nav class="cs_nav cs_medium cs_primary_font cs_primary_color">
                            <ul class="cs_nav_list cs_onepage_nav">
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#features">Fitur</a></li>
                                {{-- <li><a href="#pricing">Pricing</a></li> --}}
                                {{-- <li><a href="#testimonial">Testimonial</a></li> --}}
                                {{-- <li class="menu-item-has-children"><a href="#">Tabungan</a>
                                    <ul>
                                        <li><a href="#">Masih Proses</a></li>
                                        <li><a href="#">Sudah Selesai</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="#faq">Seputar Pertanyaan</a>
                                <li><a href="#contact">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="cs_main_header_right">
                        @guest
                        <div class="cs_header_btns">
                            <a href="#" class="cs_header_text_btn cs_modal_btn" data-modal="login">Login</a>
                            <a href="#" class="cs_btn cs_bg_accent cs_dark_hover cs_modal_btn"
                                data-modal="register">Sign Up</a>
                        </div>
                        @else
                        <div class="" aria-labelledby="navbarDropdown">
                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="cs_content">
        <!-- End Header section -->
        <!-- Start Hero section -->
        <section class="cs_hero cs_style_2 position-relative" id="home">
            <div class="container">
                <div class="row align-items-center cs_gap_y_40 cs_reverse_md">
                    <div class="col-lg-7">
                        <div class="cs_hero_text">
                            <h1 class="cs_hero_title">Catat Keinginan Mu Di FinansialKu</h1>
                            <p class="cs_hero_subtitle">FinansialKu adalah aplikasi untuk mengatur keuangan,
                                dengan menggunakan aplikasi ini anda tidak perlu pusing-pusing untuk mencatat keuangan anda
                            </p>
                            <div class="cs_btn_group cs_version_2 wow fadeIn" data-wow-duration="0.8s"
                                data-wow-delay="0.25s">
                                @guest
                                <a href="#" class="cs_btn cs_bg_primary cs_dark_hover cs_modal_btn" data-modal="login">Mulai Menabung</a>
                                @else
                                <a href="{{route('login')}}" class="cs_btn cs_bg_primary cs_dark_hover cs_modal_btn">Mulai Menabung</a>
                                @endguest
                                {{-- <a href="#" class="cs_btn cs_bg_accent cs_dark_hover">Start Free Trial</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cs_hero_thumb">
                            <img src="img/gambar.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_hero_shape1">
                <img src="assets/img/hero_bg3.png" alt="Polygon Icon">
            </div>
            <div class="cs_hero_shape2">
                <img src="assets/img/hero_bg2.png" alt="Polygon Icon">
            </div>
        </section>
        <!-- End Hero section -->
        <!-- Start Featured section -->
        <center>
        <section class="cs_business_feature position-relative" id="features">
            <div class="cs_height_143 cs_height_lg_75"></div>
            <div class="container">
                <div class="cs_section_heading cs_style_1 text-center">
                    <p class="cs_section_subtitle cs_text_accent wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">Catat keuanganmu di FinansialKu</p>
                    <h2 class="cs_section_title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        Berikut adalah beberapa fitur <br> Yang kami sediakan</h2>
                </div>
                <div class="cs_height_85 cs_height_lg_60"></div>
                <div class="row cs_gap_y_30 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="col-lg-8 col-xl-4">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon">
                                <img src="assets/img/shop.svg" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title">Dapat Mencatat Keuangan pribadi menjadi lebih mudah</h3>
                            <p class="cs_iconbox_subtitle">Solusi praktis bagi mereka yang ingin mengelola keuangan dengan lebih efisien. Dengan teknologi terkini, proses pencatatan yang dulu merepotkan kini bisa dilakukan hanya dengan beberapa kali klik. Aplikasi ini memungkinkan kamu untuk memonitor pemasukan dan pengeluaran secara real-time, menetapkan anggaran, serta mendapatkan laporan keuangan yang komprehensif.</p>
                            <a href="#" class="cs_text_btn cs_text_accent">
                                Learn More
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-4">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon">
                                <img src="assets/img/price_bar.svg" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title">Dapat melihat grafik keuangan</h3>
                            <p class="cs_iconbox_subtitle">fitur yang memungkinkan pengguna untuk memvisualisasikan data keuangan mereka dalam bentuk grafik yang mudah dipahami. Dengan grafik yang interaktif, pengguna bisa dengan cepat mengenali pola pengeluaran dan pemasukan, mengidentifikasi area di mana mereka bisa menghemat, dan melihat perkembangan keuangan dari waktu ke waktu.</p>
                            <a href="#" class="cs_text_btn cs_text_accent">
                                Learn More
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-4">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon">
                                <img src="assets/img/ui.svg" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title">Dapat menambahkan tujuan/barang yang ingin di capai</h3>
                            <p class="cs_iconbox_subtitle">"Dapat Menambahkan Tujuan/Barang yang Ingin Dicapai" adalah fitur yang membantu pengguna menetapkan dan memantau tujuan keuangan mereka, baik itu membeli barang impian, merencanakan liburan, atau menabung untuk masa depan. Dengan fitur ini, pengguna bisa menetapkan target spesifik, menentukan jumlah dana yang dibutuhkan, dan mengatur jangka waktu pencapaian. Aplikasi ini kemudian akan membantu melacak progres, memberikan pengingat, dan menawarkan saran agar tujuan tersebut lebih mudah tercapai.</p>
                            <a href="#" class="cs_text_btn cs_text_accent">
                                Learn More
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs_featured_shape">
                    <img src="assets/img/Vector.svg" alt="">
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
        </section>
        </center>
        <!-- Software features -->
        {{-- <section>
            <div class="container">
                <div class="row align-items-center cs_gap_y_40">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_pr_45 text-center">
                            <img src="assets/img/illustartion1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_section_heading cs_style_1">
                            <p class="cs_section_subtitle cs_text_accent">Software Key Features</p>
                            <h2 class="cs_section_title mb-0">Powerful Features with Incredible Design</h2>
                        </div>
                        <div class="cs_height_60 cs_height_lg_40"></div>
                        <div class="row cs_gap_y_40">
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">01</div>
                                    <h3 class="cs_iconbox_title">Inventory Management</h3>
                                    <p class="cs_iconbox_subtitle">Pos can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">02</div>
                                    <h3 class="cs_iconbox_title">Sales & Payment Process</h3>
                                    <p class="cs_iconbox_subtitle">If can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">03</div>
                                    <h3 class="cs_iconbox_title">Report and Analysis</h3>
                                    <p class="cs_iconbox_subtitle">If can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cs_iconbox cs_style_2">
                                    <div class="cs_number_box cs_bg_accent cs_text_white">04</div>
                                    <h3 class="cs_iconbox_title">Secure Fast Transaction</h3>
                                    <p class="cs_iconbox_subtitle">Pos can analyze large volumes of data quickly and
                                        accurate, valuable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_75"></div>
        </section> --}}
        <!-- Users features -->
        {{-- <section class="cs_user_feature">
            <div class="container">
                <div class="row align-items-center cs_gap_y_40 cs_reverse_lg">
                    <div class="col-xl-6 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_section_heading cs_style_1">
                            <p class="cs_section_subtitle cs_text_accent">Who Can Use Our Poze</p>
                            <h2 class="cs_section_title mb-0">Our Software Capable for Wide Range of Business and
                                Industries</h2>
                        </div>
                        <div class="cs_height_60 cs_height_lg_40"></div>
                        <ul class="cs_list cs_style_1 cs_mp0">
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">Retail Stores</span>
                            </li>
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">Grocery Stores</span>
                            </li>
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">Restaurants and Cafes</span>
                            </li>
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">Convenience Stores</span>
                            </li>
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">eCommerce Businesses</span>
                            </li>
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">Hospitality and Hotels</span>
                            </li>
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">Salons and Spas</span>
                            </li>
                            <li>
                                <span class="cs_list_icon">
                                    <img src="assets/img/arrow.svg" alt="Icon">
                                </span>
                                <span class="cs_list_text">And Many More..</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_feature_thumb_1 text-center">
                            <img src="assets/img/illustartion.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
        </section> --}}
        <!-- End Featured section -->
        <!-- Start CTA section -->
        <section>
            <div class="container">
                <div class="cs_cta cs_style_1 text-center position-relative">
                    <div class="cs_cta_in">
                        <div class="cs_section_heading cs_style_1">
                            <h2 class="cs_section_title cs_text_white">Catat Keuangan mu di FinansialKu
                            </h2>
                            <p class="cs_section_subtitle mb-0">Aplikasi yang dirancang untuk memudahkan pengelolaan keuangan pribadi. Dengan fitur-fitur canggih seperti pengingat tagihan,
                                <br>pencatatan dan analisis pengeluaran dan juga pemasukan, FinansialKu membantu kamu mengontrol keuangan dengan lebih efektif.
                                <br>Dapatkan wawasan mendalam tentang kebiasaan belanja, buat anggaran yang realistis, dan capai tujuan finansialmu dengan lebih cepat.
                                <br>FinansialKu adalah teman setia yang akan memastikan setiap pengeluaran tercatat dengan rapi dan transparan, sehingga kamu bisa merencanakan masa depan dengan percaya diri
                            </p>
                        </div>
                        <div class="cs_btn_group text-center">
                                @guest
                                <a href="#" class="cs_btn cs_bg_accent  cs_modal_btn" data-modal="login">Mulai Menabung</a>
                                @else
                                <a href="{{route('login')}}" class="cs_btn cs_bg_accent  cs_modal_btn">Mulai Menabung</a>
                                @endguest
                                {{-- <a href="#" class="cs_btn cs_bg_accent cs_dark_hover">Start Free Trial</a> --}}
                        </div>
                    </div>
                    <div class="cs_cta_shape1">
                        <img src="assets/img/Ellipse_small.svg" alt="">
                    </div>
                    <div class="cs_cta_shape2">
                        <img src="assets/img/stroke.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA section -->
        <!--Start FAQ's section -->
        <section class="cs_faq_wrap position-relative" id="faq">
            <div class="cs_height_143 cs_height_lg_75"></div>
            <div class="container">
                <div class="cs_section_heading cs_style_1 text-center">
                    <p class="cs_section_subtitle cs_text_accent wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">Ada Pertanyaan?
                    </p>
                    <h2 class="cs_section_title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">Ini adalah jawaban dari <br> beberapa pertanyaan</h2>
                </div>
                <div class="cs_height_85 cs_height_lg_60"></div>
                <div class="row wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cs_accordian_wrap">
                            <div class="cs_accordian active">
                                <h2 class="cs_accordian_title">
                                    Framework apa yang digunakan untuk FinansialKu?
                                    <span class="cs_accordian_toggle">
                                        <span></span>
                                    </span>
                                </h2>
                                <div class="cs_accordian_body">
                                    Untuk framework kami menggunakan laravel, dan juga bahasa program yang kami gunakan adalah php native untuk kebutuhan back end, dan juga html untuk kebutuhan front end.
                                </div>
                            </div>
                            <!-- .cs_accordian -->
                            <div class="cs_accordian">
                                <h2 class="cs_accordian_title">
                                    Bagaimana cara menambahkan tujuan keuangan di FinansialKu, seperti menabung untuk liburan atau membeli barang?
                                    <span class="cs_accordian_toggle">
                                        <span></span>
                                    </span>
                                </h2>
                                <div class="cs_accordian_body">
                                    Untuk menambahkan tujuan keuangan di FinansialKu, silahkan klik tombol mulai menabung lalu secara otomatis kita akan diarahkan ke aplikasi FinansialKu, setelah itu kita pencet tombol tambah untuk mulai menambahkan barang yang ingin dituju.
                                </div>
                            </div>
                            <!-- .cs_accordian -->
                            <div class="cs_accordian">
                                <h2 class="cs_accordian_title">
                                    Bagaimana FinansialKu melindungi data pribadi dan keuangan pengguna?
                                    <span class="cs_accordian_toggle">
                                        <span></span>
                                    </span>
                                </h2>
                                <div class="cs_accordian_body">
                                    Tentu saja, semua data penting yang dimasukan ke dalam website FinansialKu akan diubah menjadi kode acak. dengan kata lain kami menggunakan fitur hashing agar data pengguna aman dari oknum oknum yang tidak bertanggung jawab.
                                </div>
                            </div>
                            <!-- .cs_accordian -->
                            <div class="cs_accordian">
                                <h2 class="cs_accordian_title">
                                    Apakah kita bisa melakukan deposit atau withdraw pada aplikasi FinansialKu?
                                    <span class="cs_accordian_toggle"><span></span></span>
                                </h2>
                                <div class="cs_accordian_body">
                                    Sayangnya aplikasi FinansialKu masih tidak dapat melakukan deposit atau withdraw, kami masih berusaha sebaik mungkin untuk menambahkan fitur yang menarik untuk kedepannya.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_faq_shape1"></div>
            <div class="cs_faq_shape2"></div>
            <div class="cs_height_150 cs_height_lg_75"></div>
        </section>
        <!--End FAQ's section -->

        <!--Start contact Section -->
        <div class="cs_contact" id="contact">
            <div class="cs_height_143 cs_height_lg_75"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_contact_thumb text-center">
                            <img src="img/contact.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_section_heading cs_style_1">
                            <p class="cs_section_subtitle cs_text_accent">Hubungi Kami</p>
                            <h2 class="cs_section_title mb-0">Jika ada saran dan juga <br>Kritikan, Silahkan hubungi kami</h2>
                        </div>
                        <div class="cs_height_50 cs_height_lg_40"></div>
                        <form id="cs_form" class="row">
                            <div class="col-sm-6">
                                <input type="text" class="cs_form_field" placeholder="Nama Lengkap*" required="">
                                <div class="cs_height_30 cs_height_lg_30"></div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="cs_form_field" placeholder="Email*" required="">
                                <div class="cs_height_30 cs_height_lg_30"></div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="cs_form_field" placeholder="Nomor Telepon*" required="">
                                <div class="cs_height_30 cs_height_lg_30"></div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="cs_form_field" placeholder="Tujuan*" required="">
                                <div class="cs_height_30 cs_height_lg_30"></div>
                            </div>
                            <div class="col-lg-12">
                                <textarea rows="7" class="cs_form_field m-0" placeholder="Deskripsi*"
                                    required=""></textarea>
                                <div class="cs_height_30 cs_height_lg_30"></div>
                            </div>
                            <div class="col-lg-12">
                                <button class="cs_btn cs_bg_accent cs_dark_hover" type="submit">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
        </div>
        <!--End contact Section -->
    </div>
    <!-- Blog Details Modal -->
    <div class="cs_modal" data-modal="details">
        <div class="cs_close_overlay"></div>
        <div class="cs_modal_in">
            <div class="cs_modal_container cs_white_bg">
                <button class="cs_close_modal cs_center cs_primary_bg">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="cs_post_details cs_style_1">
                    <div class="cs_post_meta_wrap">
                        <div class="cs_post_meta">
                            <div class="cs_post_meta_icon cs_text_accent">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <p class="mb-0">
                                Admin
                            </p>
                        </div>
                        <div class="cs_post_meta">
                            <div class="cs_post_meta_icon cs_text_accent">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <p class="mb-0">
                                25.03.2023
                            </p>
                        </div>
                    </div>
                    <h2 class="cs_post_title">How they shape our digital world with software innovation</h2>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the
                        day, going forward, a new normal that has evolved from generation X is on the runway heading
                        towards a streamlined cloud solution. User generated content in real-time will have multiple
                        touchpoints for offshoring.</p>
                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                        Override the digital divide with additional clickthroughs from DevOps.</p>
                    <div class="cs_height_5 cs_height_lg_5"></div>
                    <img src="assets/img/blog_details.jpg" alt="blog1">
                    <h2>Collaboratively administrate empowered.</h2>
                    <div class="cs_post_text">
                        <p>Podcasting operational change management inside of workflows to establish a framework. Taking
                            seamless key performance indicators offline to maximise the long tail. Keeping your eye on
                            the ball
                            while performing a deep dive on the start-up mentality to derive convergence on
                            cross-platform
                            integration.</p>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                            procrastinate
                            B2C users after installed base benefits. Dramatically visualize customer directed
                            convergence without
                            revolutionary ROI.</p>
                        <p>Podcasting operational change management inside of workflows to establish a framework. Taking
                            seamless key performance indicators offline to maximise the long tail.</p>
                        <h2>Blog video post can also added.</h2>
                        <p>Completely synergize resource taxing relationships via premier niche markets. Professionally
                            cultivate one-to-one customer service with robust ideas. Dynamically innovate
                            resource-leveling
                            customer service for state of the art customer service.</p>
                        <blockquote>Integer accumsan arcu ligula, eget dictum augue egestas sed. Curabitur bibendum,
                            lorem ac
                            dapibus pellentesque, justo lectus bibendum enim.<small>by: <span>Mark Parker</span></small>
                        </blockquote>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration some form, by injected humour, or randomised words which don't look even slightly
                            believable. If you are going to use passage of Lorem Ipsum.</p>
                        <h2>Phosfluorescently engage worldwide?</h2>
                        <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.
                            Seamlessly
                            visualize quality intellectual capital without superior collaboration and idea-sharing.
                            Holistically pontificate installed base portals after maintainable products.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="assets/img/blog2.jpg" alt="Image">
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/img/blog3.jpg" alt="Image">
                            </div>
                        </div>
                        <!-- <div class="cs_height_20 cs_height_lg_20"></div> -->
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                            Override
                            the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the
                            information highway will close the loop on focusing solely on the bottom line.</p>
                    </div>
                    <div class="cs_height_35 cs_height_lg_35"></div>
                </div>
                <div class="comments_area">
                    <div class="comment_list_outer">
                        <h2 class="comments_title">Comments(3)</h2>
                        <ol class="comment_list">
                            <li class="comment">
                                <div class="comment_body">
                                    <div class="comment_meta">
                                        <div class="comment_author">
                                            <img src="assets/img/comment1.jpg" alt="comment1" class="avatar">
                                            <a href="#" class="nm">Smith Jhon</a>
                                        </div><!-- .comment_author -->
                                        <div class="comment_metadata">
                                            <a href="#"><span>15 Jan, 2023</span></a>
                                        </div><!-- .comment_metadata -->
                                    </div><!-- .comment_meta -->
                                    <div class="comment_content">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                    <div class="reply"><a href="#" class="comment_reply_link">Reply</a></div>
                                </div>
                                <ol class="children">
                                    <li class="comment">
                                        <div class="comment_body">
                                            <div class="comment_meta">
                                                <div class="comment_author">
                                                    <img src="assets/img/comment2.jpg" alt="comment1" class="avatar">
                                                    <span class="nm"><a href="#">Robat Newman</a></span>
                                                </div><!-- .comment_author -->
                                                <div class="comment_metadata">
                                                    <a href="#"><span>15 Jan, 2023</span></a>
                                                </div><!-- .comment_metadata -->
                                            </div><!-- .comment_meta -->
                                            <div class="comment_content">
                                                <p>Consectetuer adipiscing elit. Lorem ipsum dolor sit amet,
                                                    consectetuer.</p>
                                            </div>
                                            <div class="reply"><a href="#" class="comment_reply_link">Reply</a></div>
                                        </div>
                                    </li>
                                </ol><!-- .children -->
                            </li>
                            <li class="comment">
                                <div class="comment_body">
                                    <div class="comment_meta">
                                        <div class="comment_author">
                                            <img src="assets/img/comment1.jpg" alt="comment1" class="avatar">
                                            <span class="nm"><a href="#">Hannibal Lecter</a></span>
                                        </div><!-- .comment_author -->
                                        <div class="comment_metadata">
                                            <a href="#"><span>26 Jan, 2023</span></a>
                                        </div><!-- .comment_metadata -->
                                    </div><!-- .comment_meta -->
                                    <div class="comment_content">
                                        <p>Lorem ipsum dolor sit amet. Lorem ipsum adipiscing elit.</p>
                                    </div>
                                    <div class="reply"><a href="#" class="comment_reply_link">Reply</a></div>
                                </div>
                            </li>
                        </ol><!-- .comment_list -->
                    </div><!-- .comment_lics_outer -->
                    <div class="comment_respond">
                        <h2 class="comment_reply_title">Add your comment</h2>
                        <form class="comment_form" action="https://wa.me/6281234567?text=Halo,%20salam%20kenal">
                            <div class="comment_form_author">
                                <input type="text" placeholder="Name*" required="">
                            </div>
                            <div class="comment_form_email">
                                <input type="email" placeholder="E-mail*" required="">
                            </div>
                            <div class="comment_form_url">
                                <input type="url" placeholder="Website">
                            </div>
                            <div class="comment_form_comment">
                                <textarea rows="5" placeholder="Write here...*" required=""></textarea>
                            </div>
                            <div class="form_submit">
                                <button type="submit" class="cs_btn cs_bg_accent cs_dark_hover">Send Message</button>
                            </div>
                        </form>
                    </div><!-- .comment_respond -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Details Modal -->
    <!-- Login modal -->
    <div class="cs_modal cs_size_sm" data-modal="login">
        <div class="cs_close_overlay"></div>
        <div class="cs_modal_in">
            <div class="cs_modal_container">
                <button class="cs_close_modal cs_center cs_primary_bg">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="cs_login">
                    <div class="cs_login_container text-center">
                        <div class="cs_logo">
                            <img src="assets/img/Poze.svg" alt="Logo">
                        </div>
                        <form method="POST" action="{{route('login')}}" class="cs_login_form">
                            @csrf
                            <h2 class="cs_login_title">Login into account</h2>
                            <p class="cs_login_subtitle">Use your credentials to access your account</p>
                            <div class="cs_text_field">
                                <img src="assets/img/envelop.svg" alt="Icon">
                                <input class="form-control @error('email') is-invalid @enderror cs_form_field" name="email" value="{{ old('email') }}" required type="text" placeholder="Email address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="cs_text_field position-relative">
                                <img src="assets/img/lock.svg" alt="Icon">
                                <input type="password" class="form-control @error('password') is-invalid @enderror cs_form_field" name="password" required placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="cs_login_meta">
                                <div class="cs_check">
                                    <input type="checkbox">
                                    <label>Remember me</label>
                                </div>
                                <span class="cs_text_btn cs_modal_btn" data-modal="forgot"><span>Forgot
                                        Password?</span></span>
                            </div>
                            <button class="cs_btn cs_bg_accent w-100 cs_dark_hover">
                                <span>Login</span>
                            </button>
                            <div class="cs_or"><span>or login with</span></div>
                            <div class="cs_social_btn cs_style_1 d-flex justify-content-center">
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <img src="assets/img/linkedin.svg" alt="Icon">
                                </a>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <img src="assets/img/twitter.svg" alt="Icon">
                                </a>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <img src="assets/img/facebook.svg" alt="Icon">
                                </a>
                            </div>
                            <p class="mb-0">
                                Don't have an account?
                                <span class="cs_text_btn cs_modal_btn" data-modal="register"><span>Register
                                        Here</span></span>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <!-- Register modal -->
    <div class="cs_modal cs_size_sm" data-modal="register">
        <div class="cs_close_overlay"></div>
        <div class="cs_modal_in">
            <div class="cs_modal_container">
                <button class="cs_close_modal cs_center cs_primary_bg">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="cs_login">
                    <div class="cs_login_container text-center">
                        <div class="cs_logo">
                            <img src="assets/img/Poze.svg" alt="Logo">
                        </div>
                        <form class="cs_login_form" method="POST" action="{{route('register')}}">
                            @csrf
                            <h2 class="cs_login_title">Create an account</h2>
                            <p class="cs_login_subtitle">Use your credentials to create an account</p>
                            <div class="cs_text_field">
                                <span><i class="fa-regular fa-circle-user"></i></span>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror cs_form_field" placeholder="Full Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="cs_text_field">
                                <img src="assets/img/envelop.svg" alt="Icon">
                                <input name="email" id="email" value="{{ old('email') }}" type="email" class="form-control @error('name') is-invalid @enderror cs_form_field" placeholder="Email address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="cs_text_field position-relative">
                                <img src="assets/img/lock.svg" alt="Icon">
                                <input name="password" id="password" value="{{ old('password') }}" type="password" class="form-control @error('name') is-invalid @enderror cs_form_field" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="cs_text_field position-relative">
                                <img src="assets/img/lock.svg" alt="Icon">
                                <input name="password_confirmation" id="password-confirma" value="{{ old('password') }}" type="password" class="form-control cs_form_field" placeholder="Password Confirmation">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="cs_login_meta">
                                <div class="cs_check">
                                    <input type="checkbox">
                                    <label>Remember me</label>
                                </div>
                            </div>
                            <button class="cs_btn cs_bg_accent w-100 cs_dark_hover">
                                <span>Register</span>
                            </button>
                            <p class="mb-0">
                                Already have an account?
                                <span class="cs_text_btn cs_modal_btn" data-modal="login"><span>Login</span></span>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <!-- Recovery Password modal -->
    <div class="cs_modal cs_size_sm" data-modal="forgot">
        <div class="cs_close_overlay"></div>
        <div class="cs_modal_in">
            <div class="cs_modal_container">
                <button class="cs_close_modal cs_center cs_primary_bg">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="cs_login">
                    <div class="cs_login_container text-center">
                        <div class="cs_logo">
                            <img src="assets/img/Poze.svg" alt="Logo">
                        </div>
                        <form class="cs_login_form">
                            <h2 class="cs_login_title">Change Password</h2>
                            <div class="cs_text_field">
                                <input type="password" class="cs_form_field" placeholder="Old Password">
                            </div>
                            <div class="cs_text_field">
                                <input type="password" class="cs_form_field" placeholder="New Password">
                            </div>
                            <button class="cs_btn cs_bg_accent w-100 cs_dark_hover">
                                <span>Submit</span>
                            </button>
                            <p class="mb-0">
                                Don't have an account?
                                <span class="cs_text_btn cs_modal_btn" data-modal="register"><span>Register
                                        Here</span></span>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <!--Start Footer Section -->
    <footer class="cs_site_footer cs_color_1 cs_sticky_footer">
        <div class="cs_footer_shape1">
            <img src="assets/img/Vector1.svg" alt="Vector-Icon">
        </div>
        <div class="cs_height_140 cs_height_lg_70"></div>
        <div class="cs_main_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-4">
                        <div class="cs_footer_widget">
                            <div class="cs_text_field">
                                {{-- <img src="assets/img/logo.svg" alt="Logo" class="cs_footer_logo"> --}}
                                <h1 style="color: white">Finansial<strong style="color: greenyellow">Ku</strong></h1>
                                <p class="cs_text_white mb-0">
                                    Website sederhana yang dikembangkan oleh pelajar di SMK ASSALAAM khususnya kelompok 18,
                                    yang bertujuan untuk menambah pengetahuan dan juga mengembangkan skill terutama pada PKL kali ini.
                                </p>
                            </div>
                        </div>
                        <div class="cs_footer_widget">
                            <div class="cs_social_btn cs_style_1 d-flex">
                                <a href="https://www.facebook.com/dexsless" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://www.github.com/Dexsless" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/k4genou._" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_height_0 cs_height_lg_30"></div>
                    </div>
                    <!-- .col -->
                    <div class="col-lg-2 col-xl-2 offset-lg-1">
                        <div class="cs_footer_widget">
                            <h2 class="cs_footer_widget_title">Halaman</h2>
                            <ul class="cs_footer_widget_nav cs_mp0">
                                <li>
                                    <a href="/">Beranda</a>
                                </li>
                                <li>
                                    <a href="/#features">Fitur</a>
                                </li>
                                <li>
                                    <a href="/#faq">Seputar Pertanyaan</a>
                                </li>
                                <li>
                                    <a href="/#contact">Kontak</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cs_height_0 cs_height_lg_30"></div>
                    </div>
                    <!-- .col -->
                    <div class="col-xl-1 col-lg-2">
                        <div class="cs_footer_widget">
                            <h2 class="cs_footer_widget_title">Anggota Kelompok</h2>
                            <ul class="cs_footer_widget_nav cs_mp0">
                                <li>
                                    <a href="/#faq">Dani</a>
                                </li>
                                <li>
                                    <a href="#">Zahran</a>
                                </li>
                                <li>
                                    <a href="#">Raihan</a>
                                </li>
                                <li>
                                    <a href="#">Lutfiah</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cs_height_0 cs_height_lg_30"></div>
                    </div>
                    <!-- .col -->
                    <div class="col-lg-4 col-xl-3 offset-xl-1">
                        <div class="cs_footer_widget">
                            <h2 class="cs_footer_widget_title">Hubungi kami</h2>
                            <div class="cs_newsletter position-relative">
                                <input type="text" placeholder="Your email address" class="cs_form_field">
                                <a href="/#contact" class="cs_btn cs_bg_accent cs_send">
                                    Send
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.147 1.75739C10.147 1.28795 9.76649 0.907395 9.29705 0.907394L1.64705 0.907394C1.17761 0.907395 0.797048 1.28795 0.797048 1.75739C0.797048 2.22684 1.17761 2.60739 1.64705 2.60739H8.44705V9.4074C8.44705 9.87684 8.82761 10.2574 9.29705 10.2574C9.76649 10.2574 10.147 9.87684 10.147 9.4074L10.147 1.75739ZM1.41281 10.8437L9.89809 2.35844L8.69601 1.15635L0.210727 9.64163L1.41281 10.8437Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .col -->
                </div>
                <div class="cs_height_110 cs_height_lg_50"></div>
            </div>
            <div class="container cs_copyright_text cs_text_white text-center">
                Copyright 2024. Design by<a href="https://github.com/Dexsless" target="_blank"
                    class="cs_site_link cs_text_accent"> Cidd.</a>
            </div>
        </div>
    </footer>
    <!--End Footer Section -->

    <!-- Back to top btn -->
    <div id="cs_backtotop"><i class="fas fa-angle-up"></i></div>

    <!-- All Scripts Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
