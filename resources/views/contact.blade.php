@extends('layouts.main')

@section('page-content')
<!-- start page title section -->
<section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 text-md-start text-center">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Kontak</h1>
                <!-- end page title -->
            </div>
            <div class="col-lg-4 col-md-6 breadcrumb text-small alt-font justify-content-center justify-content-md-end sm-margin-15px-top">
                <!-- breadcrumb -->
                <ul>
                    <li><a href="/" class="text-dark-gray">Beranda</a></li>
                    <li class="text-dark-gray">Kontak Kami</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start help section -->
<section class="wow animate__fadeIn big-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h2 class="alt-font font-weight-700 letter-spacing-minus-1 text-extra-dark-gray">Hubungi Kami</h2>
                <p class="w-75 mx-auto sm-w-100">Jika anda punya pertanyaan, masalah, ataupun saran supaya kami lebih baik, jangan ragu untuk menghubungi kami.</p>
            </div>
        </div>
    </div>
</section>
<!-- end help section -->
<!-- start contact section -->
<section class="no-padding bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col p-0 cover-background md-h-450px sm-h-350px wow animate__fadeInLeft" style="background: url(https://via.placeholder.com/1000x700)"></div>
            <div class="col p-0 wow animate__fadeInRight">
                <div class="row row-cols-1 row-cols-sm-2 m-0">
                    <!-- start contact item -->
                    <div class="col bg-black d-flex flex-column justify-content-center align-items-center text-center h-350px lg-h-300px sm-h-250px last-paragraph-no-margin">
                        <i class="icon-envelope text-deep-pink icon-medium margin-25px-bottom"></i>
                        <div class="text-white-2 text-uppercase alt-font font-weight-600 margin-5px-bottom">Email</div>
                        <p class="mx-auto text-medium mb-0"><a href="mailto:info@domain.com">info@domain.com</a></p>
                    </div>
                    <!-- end contact item -->
                    <!-- start contact item -->
                    <div class="col bg-extra-dark-gray d-flex flex-column justify-content-center align-items-center text-center h-350px lg-h-300px sm-h-250px last-paragraph-no-margin">
                        <i class="icon-chat text-deep-pink icon-medium margin-25px-bottom"></i>
                        <div class="text-white-2 text-uppercase alt-font font-weight-600 margin-5px-bottom">Telepon</div>
                        <p class="mx-auto text-medium mb-0">+62 812 2018 0900</p>
                    </div>
                    <!-- end contact item -->
                </div>
                <div class="row m-0">
                    <!-- start contact item -->
                    <div class="col bg-dark d-flex flex-column justify-content-center align-items-center text-center h-350px lg-h-300px sm-h-250px last-paragraph-no-margin">
                        <i class="icon-map text-deep-pink icon-medium margin-25px-bottom"></i>
                        <div class="text-white-2 text-uppercase alt-font font-weight-600 margin-5px-bottom">Alamat</div>
                        <p class="w-60 lg-w-80 mx-auto text-medium">Desa Manubhara, Kecamatan Inerie, Kabupaten Ngada - NTT</p>
                    </div>
                    <!-- end contact item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->        
<!-- start form section -->
<section class="wow animate__fadeIn" id="start-your-project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-9 col-sm-10 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                <p>Isi formulir berikut untuk menghubungi kami melalui whatsapp.</p>
            </div>  
        </div>
        <form id="project-contact-form" action="email-templates/contact-form.php" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="form-results d-none"></div>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" name="nama" id="nama" placeholder="Nama lengkap *" class="big-input required">
                </div>
                <div class="col-12 col-md-6">
                    <input type="email" name="email" id="email" placeholder="Alamat e-mail *" class="big-input required">
                </div>
                <div class="col-12">
                    <textarea name="pesan" id="pesan" placeholder="Isi pesan anda" rows="6" class="big-textarea"></textarea>
                </div>
                <div class="col-12 text-center">
                    <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top submit">Kirim Pesan</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- end form section -->
<section class="wow animate__fadeIn bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center social-style-4">
                <span class="text-medium font-weight-600 text-uppercase d-block alt-font text-extra-dark-gray margin-30px-bottom">Jejaring Sosial</span>
                <div class="social-icon-style-4">
                    <ul class="margin-30px-top large-icon">
                        <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                        <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                        <li><a class="instagram" href="http://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                        {{-- <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                        <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li> --}}
                    </ul>
                </div>
            </div> 
        </div>
    </div>
</section>

@endsection