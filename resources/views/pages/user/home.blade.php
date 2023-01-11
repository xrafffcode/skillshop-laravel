<x-user-layout title="Skill Shop" active="home">
    @push('addonStyle')
        <style>
            body {
                background: #dae3ec !important;
            }

            .navbar .navbar-nav a:hover.btn-signup {
                color: white !important;
            }

            .navbar .navbar-nav a:hover {
                color: #131313 !important;
            }

            .navbar .navbar-nav .active {
                color: #131313 !important;
            }

            .profil-name {
                color: #131313
            }

            .hero {
                background: none !important;

                margin-bottom: -33px !important;
                height: 80vh !important;
            }

            .hero p {
                font-weight: 400;
                font-size: 16px;
                color: rgba(19, 19, 19, 0.8);
                margin: 0px !important
            }

            .hero .hero-text {
                color: #34364a;
                font-size: 68px;
                font-weight: 700;
                line-height: 78px;


            }

            .hero .btn-cta {
                background: #4F94D7;
                border-radius: 12px;
                color: white;
                font-weight: 500;
                font-size: 16px;
                line-height: 150%;
                padding: 12px 32px;
                /* identical to box height, or 24px */
            }

            .img-header {
                position: absolute;
                top: 1;
                right: 0px;
                z-index: -1;
            }

            .navbar-expand-lg {
                background-color: white !important;
                box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
                transition: background-color 200ms linear;
            }

            .benefit {
                background: #03173C;
                padding: 20px 0px;
            }



            @media (min-width: 767px) {

                .benefit {

                    padding: 60px 0px;
                }

                .hero {
                    background: none !important;
                    margin-top: 75px;
                    margin-bottom: -33px !important;
                    height: 80vh !important;
                }

            }

            .card-benefit .card-title {
                font-weight: 500;
                font-size: 24px;
                line-height: 150%;
                /* identical to box height, or 42px */

                text-align: center;

                color: #FFFFFF;
            }


            .card-benefit .card-text {
                font-weight: 500;
                font-size: 16px;
                line-height: 150%;
                /* or 30px */

                text-align: center;

                color: rgba(255, 255, 255, 0.6);
            }

            .card-benefit .card-more {
                font-weight: 500;
                color: #3ECAB0;
            }

            .card-benefit .card-more>span {
                margin-left: 5px
            }

            .benefit .row {
                margin-top: 90px
            }

            section {
                margin-bottom: 0px !important
            }

            .service {
                background: #FFFFFF
            }

            .service .statistic {
                top: 77%;
                width: 60%;
                border-top-right-radius: 16px;
                user-select: none;
                cursor: pointer;
                background: #03173C !important;
                color: #ffff !important;
            }

            @-webkit-keyframes move {
                0% {
                    top: 70px
                }

                50% {
                    top: -55px
                }

                to {
                    top: 70px
                }
            }

            @keyframes move {
                0% {
                    top: 70px
                }

                50% {
                    top: -55px
                }

                to {
                    top: 70px
                }
            }

            @-webkit-keyframes move-down {
                0% {
                    bottom: 70px
                }

                50% {
                    bottom: -55px
                }

                to {
                    bottom: 70px
                }
            }

            @keyframes move-down {
                0% {
                    bottom: 70px
                }

                50% {
                    bottom: -55px
                }

                to {
                    bottom: 70px
                }
            }

            #testimonial-section-v3 {
                background-color: #ffffff;
                height: auto;
                margin: 0px 0 100px;
                overflow: hidden;
            }

            @media(min-width:992px) {
                #testimonial-section-v3 {
                    height: 600px
                }
            }

            #testimonial-section-v3 .header-title {
                font-size: 32px;
                font-weight: 700;
                line-height: 48px !important;
                margin-top: 10px
            }

            #testimonial-section-v3 .subtitle {
                color: #a9a4bc;
                font-size: 16px;
                font-weight: 400;
                line-height: 32px;
                margin-top: 10px
            }

            #testimonial-section-v3 .btn-showcase {
                background-color: #fff;
                border-radius: 100px;
                color: #34364a
            }

            #testimonial-section-v3 .btn-testimonial {
                align-items: center;
                display: flex;
                height: 45px;
                justify-content: center;
                padding: 0;
                width: 170px !important
            }

            #testimonial-section-v3 .testimonial-column {
                -ms-overflow-style: none;
                overflow-y: scroll;
                position: relative;
                scrollbar-width: none
            }

            #testimonial-section-v3 .testimonial-column::-webkit-scrollbar {
                display: none
            }

            #testimonial-section-v3 .testimonial-column:first-child {
                -webkit-animation: move 15s ease-in infinite;
                animation: move 15s ease-in infinite;
                top: 50px
            }

            #testimonial-section-v3 .testimonial-column:last-child {
                -webkit-animation: move-down 15s ease-in infinite;
                animation: move-down 15s ease-in infinite;
                bottom: 50px;
                margin-left: 30px
            }

            #testimonial-section-v3 .testimonial-card {
                background: #dae3ec !important;
                border-radius: 16px;
                padding: 20px;
                width: 330px
            }

            #testimonial-section-v3 .testimonial-card>* {
                text-align: left !important
            }

            #testimonial-section-v3 .testimonial-card:not(:last-child) {
                margin-bottom: 30px
            }

            #testimonial-section-v3 .testimonial-title {
                color: #34364a;
                font-size: 18px;
                font-weight: 700;
                line-height: 27px
            }

            #testimonial-section-v3 .testimonial-description {
                color: #34364a;
                font-size: 16px;
                font-weight: 400;
                line-height: 24px;
                margin-bottom: 20px;
                margin-top: 10px;
                width: auto
            }

            #testimonial-section-v3 .testimonial-profile {
                height: 36px;
                margin-right: 10px;
                width: 36px;
                background-position: inherit;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 100%;
            }

            #testimonial-section-v3 .testimonial-author {
                color: #34364a;
                font-size: 12px;
                font-weight: 700;
                line-height: 18px
            }

            #testimonial-section-v3 .testimonial-role {
                color: #999aa4;
                font-size: 12px;
                font-weight: 300;
                line-height: 18px
            }

            #faq-section-v3 {
                background-color: #f6f8fd
            }

            .text-primary-green {
                color: #47bb8e !important;
            }

            .pb-50 {
                padding-bottom: 50px;
            }

            .pt-50 {
                padding-top: 50px;
            }
        </style>
    @endpush
    <div class="position-relative">
        <img src="{{ asset('assets/frontend/image/hero-image.png') }}" alt="bg-header"
            class="img-fluid img-header d-none d-md-block" width="800">
    </div>
    <section class="hero ">
        <div class="d-flex container h-100 w-100 min-vh-75 align-items-center ">
            <div class="row py-4 ">
                <div class="col-md-5 pb-5">
                    <h1 class="fw-bold hero-text mb-4">
                        Tingkatkan keterampilanmu menjadi lebih baik.
                    </h1>
                    <p>Berbagai kategori pelatihan dengan mentor yang berpengalaman siap membantu anda untuk berkembang
                        menjadi lebih baik.</p>
                    <a href="{{ route('register') }}" class="btn btn-cta btn-block mt-4">
                        Daftar
                    </a>
                </div>
                <div class="col-md-7 mt-3">

                </div>
            </div>
        </div>
    </section>


    <section class="benefit">
        <div class="container">
            <div class="text-center text-white">
                <h1>Keuntungan yang didapat ketika <br> bergabung bersama kami</h1>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <div class="card card-benefit border-0 bg-transparent">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/frontend/image/education.svg') }}" alt="icon"
                                class="img-fluid mb-3" width="100">
                            <h5 class="card-title
                            fw-bold">Edukasi</h5>
                            <p class="card-text">Dapat belajar untuk meningkatkan keterampilanmu disini.</p>
                            <a href="#" class="text-decoration-none">
                                <p class="card-more mt-4">Lebih lanjut <span><i class="fas fa-arrow-right"></i></span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-benefit border-0 bg-transparent">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/frontend/image/marketplace.svg') }}" alt="icon"
                                class="img-fluid mb-3" width="100">
                            <h5 class="card-title
                            fw-bold">Marketplace</h5>
                            <p class="card-text">Dapat menjual hasil produk disini secara online dengan mudah.</p>
                            <a href="#" class="text-decoration-none">
                                <p class="card-more mt-4">Lebih lanjut <span><i class="fas fa-arrow-right"></i></span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-benefit border-0 bg-transparent">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/frontend/image/easy-pay.svg') }}" alt="icon"
                                class="img-fluid mb-3" width="100">
                            <h5 class="card-title
                            fw-bold">Easy Payment</h5>
                            <p class="card-text">Sistem pembayaran yang sangat helpfull hanya untuk anda.</p>
                            <a href="#" class="text-decoration-none">
                                <p class="card-more mt-4">Lebih lanjut <span><i class="fas fa-arrow-right"></i></span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="service text-black position-relative">
        <div
            class="statistic d-flex position-absolute justify-content-evenly align-items-center bg-white py-5 text-center baseColor">
            <div class="mx-2 aos-init" data-aos="fade-up" data-aos-delay="200">
                <h1 class="fw-bolder">25k+</h1>
                <p class="fw-bold">Orang Senang</p>
            </div>
            <div class="mx-2 aos-init" data-aos="fade-up" data-aos-delay="300">
                <h1 class="fw-bolder">7k+</h1>
                <p class="fw-bold">Transaksi Berhasil</p>
            </div>
            <div class="mx-2 aos-init" data-aos="fade-up" data-aos-delay="400">
                <h1 class="fw-bolder">14+</h1>
                <p class="fw-bold">Year Experiences</p>
            </div>
        </div>
        <div class="container">
            <div class="row m-0 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 p-0 pb-5 order-lg-first order-last description">
                    <p class="themeColor aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">Pelayanan
                        Terbaik</p>
                    <h2 class="fw-bolder m-0 mt-2 mb-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                        Kami Memberikan Kamu
                        <br> Pelayanan Terbaik
                    </h2>
                    <p data-aos="fade-right" data-aos-delay="300" class="aos-init aos-animate">Lorem ipsum dolor sit
                        amet consectetur adipisicing
                        elit. Assumenda natus, saepe, dicta eaque nisi
                        laborum vel ex ipsam accusantium qui commodi, itaque dolores facere quidem magni asperiores rem
                        reiciendis quod quo! Autem ea quis suscipit recusandae est totam distinctio modi, beatae ad,
                        natus,
                        iure nobis. Rem recusandae maxime ipsum quisquam!</p>
                </div>
                <div class="col-lg-5 col-sm-8 col-10 p-0 py-2">
                    <img src="http://dolan.test/assets/frontend/images/servisgg.png"
                        class="img-fluid aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section> --}}

    <section class="pt-50 pb-50 d-flex justify-content-start align-items-center position-relative"
        id="testimonial-section-v3">
        <div class="container">
            <div class="row d-flex justify-content-start align-items-center gx-0">
                <div class="col-lg-5 col-12">
                    <h4 class="text-primary-green hero-label mb-0">Dipercaya Lebih Dari 900 User</h4>
                    <h1 class="header-title mb-0 text-black">
                        Gabung Bersama <br class="desktop">Kami 😊
                    </h1>
                    <p class="subtitle text-black">
                        Komunitas yang dibentuk untuk saling <br class="desktop">membantu dalam mencapai karir impian
                        kita.
                    </p>

                </div>
                <div
                    class="col-lg-7 text-end col-12 d-none d-sm-flex justify-content-end align-items-start mt-md-5 mt-lg-0">
                    <div class="testimonial-row d-flex justify-content-start align-items-start flex-nowrap">
                        <div class="testimonial-column d-flex justify-content-start align-items-end flex-column">
                            @foreach ($testimonials as $testimoni)
                                <div class="testimonial-card shadow-sm">
                                    <h2 class="testimonial-title mb-0">{{ $testimoni->training->title }}</h2>
                                    <p class="testimonial-description">{{ $testimoni->review }}</p>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <img class="testimonial-profile"
                                            src="{{ asset('storage/' . $testimoni->user->profile_picture) }}"
                                            alt="">
                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                            <h4 class="testimonial-author mb-0">{{ $testimoni->user->full_name }}</h4>
                                            <h5 class="testimonial-role mb-0">{{ $testimoni->user->job }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="testimonial-column d-flex justify-content-start align-items-end flex-column">
                            @foreach ($testimonials2 as $testimoni)
                                <div class="testimonial-card shadow-sm">
                                    <h2 class="testimonial-title mb-0">{{ $testimoni->training->title }}</h2>
                                    <p class="testimonial-description">{{ $testimoni->review }}</p>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <img class="testimonial-profile"
                                            src="{{ asset('storage/' . $testimoni->user->profile_picture) }}"
                                            alt="">
                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                            <h4 class="testimonial-author mb-0">{{ $testimoni->user->full_name }}</h4>
                                            <h5 class="testimonial-role mb-0">{{ $testimoni->user->job }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
