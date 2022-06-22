@extends('layouts.main')

@section('page-content')

<!-- start page title section -->
<section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 text-md-start text-center">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Tentang</h1>
                <!-- end page title -->
            </div>
            <div class="col-lg-4 col-md-6 breadcrumb text-small alt-font justify-content-center justify-content-md-end sm-margin-15px-top">
                <!-- breadcrumb -->
                <ul>
                    <li><a href="/" class="text-dark-gray">Beranda</a></li>
                    <li class="text-dark-gray">Tentang Kami</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start story section -->
<section class="wow animate__fadeIn">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-md-6 text-center md-margin-30px-bottom wow animate__fadeInLeft">
                <img src="https://via.placeholder.com/900x650" alt="" class="border-radius-6 w-100">
            </div> 
            <div class="col-12 col-lg-7 col-md-6 text-center text-md-start padding-eight-lr lg-padding-six-lr md-padding-15px-lr wow animate__fadeInRight" data-wow-delay="0.2s">
                <h6 class="alt-font text-extra-dark-gray">Cerita Desa</h6>
                <p>
                    Konon Katanya Kampung Tololela dijaga oleh dua ekor Naga yang dalam bahasa daerah disebut SAWA. Hal ini dbuktikan dengan Ukiran Naga di 32 (Tiga Puluh Dua ) Rumah adat yang mendiami kampung adat Tololela. Selain menjaga warga kampung Tololela, Naga tersebut juga menjaga semua orang yang datang berkunjung. Jika yang datang dengan maksud baik akan mendapatkan berkat serta perlindungan dari Naga. dan jikalau yang datang dengan maksud yang kurang baik, maka akan mendapatkan kesialan tanpa disadarinya.
                </p>
            </div>
        </div>
        <div class="divider-full bg-extra-light-gray margin-seven-bottom margin-eight-top"></div>
        <!-- start feature box -->
        <div class="row row-cols-1 row-cols-lg-8 row-cols-md-10">
            <div class="col md-margin-50px-bottom sm-margin-40px-bottom wow animate__fadeInUp">
                <div class="feature-box-5 position-relative">
                    <div class="feature-content">
                        <h6 class="text-extra-dark-gray padding-20px-left alt-font font-weight-600">Tradisi Adat Desa Manubhara</h6>
                        <ol class="text-start">
                            <li>Ka sa'o  merupakan upacara adat presmian dan syukuran atas terbangunnya rumah ada, yang melibatkan seluruh warga masyarakat</li>
                            <li>Reba adalah upacara adat tahunan yang diselengaarakan setiap tanggal 28 Desember sebagai ucapan syukur kepada leluhur atas semua perjalanan hidup selama satu tahun</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end story section -->
<!-- start feature box  -->
<section class="bg-extra-dark-gray wow animate__fadeIn md-padding-one-half-lr sm-padding-two-lr">
    <div class="container">
        <div class="row justify-content-center">
            <!-- feature box item-->
            <div class="col-12 col-lg-4 col-md-6 col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight">
                <div class="d-flex align-items-center margin-7px-bottom alt-font">
                    <h6 class="text-large line-height-22 padding-20px-left sm-padding-15px w-100">Fasilitas & Layanan</h6>
                </div>
                <ul>
                    <li>Areal parkir</li>
                    <li>Balai pertemuan</li>
                    <li>Homestay / rumah tinggal</li>
                    <li>Kamar mandi umum</li>
                    <li>Tempat makan (Kuliner, warung)</li>
                </ul>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-20px-left margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item-->
            <!-- start feature box item-->
            <div class="col-12 col-lg-4 col-md-6 col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight" data-wow-delay="0.2s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h6 class="text-large line-height-22 padding-20px-left w-100">Souvenir</h6>
                </div>
                <ul>
                    <li>Kain tenun pewarna alam</li>
                    <li>Selempang pewarna alam</li>
                    <li>Souvenir Bambu</li>
                    <li>Anyaman Lontar</li>
                </ul>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-20px-left margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item-->
            <!-- start feature box item-->
            <div class="col-12 col-lg-4 col-md-6 col-sm-8 feature-box-1 wow animate__fadeInRight" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h6 class="text-large line-height-22 padding-20px-left w-100">Makanan Khas & Hasil Bumi</h6>
                </div>
                <ul>
                    <li>Singkong</li>
                    <li>Pisang</li>
                    <li>Nasi bakar</li>
                    <li>Ubi-ubian</li>
                    <li>Kemiri</li>
                    <li>Cengkeh</li>
                    <li>Cokelat</li>
                </ul>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-20px-left margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item-->
        </div>
    </div>
</section>
<!-- end feature box -->
<!-- start team section -->
<section class="wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-7 col-lg-8 col-md-10 margin-seven-bottom md-margin-30px-bottom sm-margin-20px-bottom text-center">
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Foto Adat Desa</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 filter-content overflow-hidden">
                <ul class="hover-option2 zoom-gallery portfolio-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-small" style="position: relative; height: 513.25px;">
                    <li class="grid-sizer"></li>
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="https://via.placeholder.com/750x500" data-group="zoom-gallery">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/750x500" alt="" class="project-img-gallery" data-no-retina=""></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 33.3292%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="https://via.placeholder.com/750x500" data-group="zoom-gallery">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/750x500" alt="" class="project-img-gallery" data-no-retina=""></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s" style="position: absolute; left: 66.6584%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="https://via.placeholder.com/750x500" data-group="zoom-gallery">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/750x500" alt="" class="project-img-gallery" data-no-retina=""></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.6s" style="position: absolute; left: 0%; top: 256.625px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="https://via.placeholder.com/750x500" data-group="zoom-gallery">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/750x500" alt="" class="project-img-gallery" data-no-retina=""></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.8s" style="position: absolute; left: 33.3292%; top: 256.625px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="https://via.placeholder.com/750x500" data-group="zoom-gallery">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/750x500" alt="" class="project-img-gallery" data-no-retina=""></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="1s" style="position: absolute; left: 66.6584%; top: 256.625px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="https://via.placeholder.com/750x500" data-group="zoom-gallery">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/750x500" alt="" class="project-img-gallery" data-no-retina=""></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                </ul>
            </div>
        </div>                
    </div>
</section>
<!-- end team section -->

@endsection