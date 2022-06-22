@extends('layouts.main')

@section('page-content')

<!-- start slider section -->
<section class="wow animate__fadeIn p-0">
    <div class="swiper-container slider-medium-screen white-move sm-h-500px md-landscape-h-580px" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background sm-background-image-center" style="background-image:url('https://via.placeholder.com/1920x900');">
                <div class="container-fluid  position-relative h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex flex-column justify-content-center text-start padding-ten-left sm-padding-five-left">
                            <span class="text-middle-line text-deep-pink d-block w-20 sm-w-50">Branding and Identity</span>
                            <span class="title-large alt-font text-white-2 font-weight-700 w-25 margin-40px-tb sm-margin-20px-tb d-block letter-spacing-minus-2 md-w-60">Rubber Design</span>
                            <a href="#" class="btn btn-small btn-deep-pink align-self-start">Explore Work</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background sm-background-image-center" style="background-image:url('https://via.placeholder.com/1920x900');">
                <div class="container-fluid position-relative h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex flex-column justify-content-center text-start padding-ten-left sm-padding-five-left">
                            <span class="text-middle-line text-deep-pink d-block w-20 sm-w-50">Identity and Photography</span>
                            <span class="title-large alt-font text-white-2 font-weight-700 w-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-w-60">Coffee Beans</span>
                            <a href="#" class="btn btn-small btn-deep-pink align-self-start">Explore Work</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background sm-background-image-center" style="background-image:url('https://via.placeholder.com/1920x900');">
                <div class="container-fluid position-relative h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex flex-column justify-content-center text-start padding-ten-left sm-padding-five-left">
                            <span class="text-middle-line text-deep-pink d-block w-20 sm-w-50">Branding and Identity</span>
                            <span class="title-large alt-font text-white-2 font-weight-700 w-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-w-60">Reutter Craft</span>
                            <a href="#" class="btn btn-small btn-deep-pink align-self-start">Explore Work</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-square swiper-pagination-white"></div>
        <!-- <div class="swiper-button-next light"><i class="ti-angle-right"></i></div>
        <div class="swiper-button-prev light"><i class="ti-angle-left"></i></div> -->
    </div>
</section>
<!-- end slider section -->
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
            <div class="col wow animate__fadeInUp">
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

<!-- start photo gallery section -->
<section class="wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Galeri</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Beberapa momen yang bisa anda lihat</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 lightbox-portfolio p-0">
                <div id="justified" class="justified-gallery" data-justified-options='{ "rowHeight": 400, "maxRowHeight": false, "captions": true, "margins": 10, "waitThumbnailsLoad": true }'>
                    <!-- start gallery item -->
                    <div class=" wow animate__fadeInUp">
                        <a href="https://via.placeholder.com/487x650" class="gallery-link justify-gallery-content" title="IMAGE TITLE"><img src="https://via.placeholder.com/487x650" alt="">
                            <div class="justify-hover-icon text-center"><i class="ti-zoom-in text-white"></i></div>
                        </a>
                    </div> 
                    <!-- end gallery item -->
                    <!-- start gallery item -->
                    <div class=" wow animate__fadeInUp" data-wow-delay="0.2s">
                        <a href="https://via.placeholder.com/900x650" class="gallery-link justify-gallery-content" title="IMAGE TITLE"><img src="https://via.placeholder.com/900x650" alt="">
                            <div class="justify-hover-icon text-center"><i class="ti-zoom-in text-white"></i></div>
                        </a>
                    </div> 
                    <!-- end gallery item -->
                    <!-- start gallery item -->
                    <div class=" wow animate__fadeInUp" data-wow-delay="0.4s">
                        <a href="https://via.placeholder.com/800x1200" class="gallery-link justify-gallery-content" title="IMAGE TITLE"><img src="https://via.placeholder.com/800x1200" alt="">
                            <div class="justify-hover-icon text-center"><i class="ti-zoom-in text-white"></i></div>
                        </a>
                    </div> 
                    <!-- end gallery item -->
                    <!-- start gallery item -->
                    <div class=" wow animate__fadeInUp" data-wow-delay="0.4s">
                        <a href="https://via.placeholder.com/800x640" class="gallery-link justify-gallery-content" title="IMAGE TITLE"><img src="https://via.placeholder.com/800x640" alt="">
                            <div class="justify-hover-icon text-center"><i class="ti-zoom-in text-white"></i></div>
                        </a>
                    </div> 
                    <!-- end gallery item -->
                    <!-- start gallery item -->
                    <div class=" wow animate__fadeInUp" data-wow-delay="0.4s">
                        <a href="https://via.placeholder.com/800x593" class="gallery-link justify-gallery-content" title="IMAGE TITLE"><img src="https://via.placeholder.com/800x593" alt="">
                            <div class="justify-hover-icon text-center"><i class="ti-zoom-in text-white"></i></div>
                        </a>
                    </div> 
                    <!-- end gallery item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end photo gallery section -->

<!-- start blog section -->
<section class="wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Artikel</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Baca Berita Terbaru Tentang Desa Kami</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-3col lg-grid-3col lg-grid-2col md-grid-1col hover-option4 blog-post-style3 gutter-extra-large" style="position: relative; height: 1066.19px;">
                    <li class="grid-sizer"></li>
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog-details">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog-details" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I like the body. I like to design everything to do with the body.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">Oleh Jay Benjamin&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog-details">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog-details" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I like the body. I like to design everything to do with the body.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">Oleh Jay Benjamin&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog-details">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog-details" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I like the body. I like to design everything to do with the body.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">Oleh Jay Benjamin&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end blog section -->

@endsection