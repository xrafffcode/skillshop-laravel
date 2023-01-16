<x-user-layout title="Checkout {{ $training->title }}" active="checkout">
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

            .header-primary {
                color: #34364a;
                font-size: 38px;
                font-weight: 700;
                line-height: 48px;
            }

            .card-container,
            .course-card,
            .course-card-responsive {
                background: #fff;
                border: none;
                border-radius: 14px;
                box-sizing: border-box;
                color: #34364a;
                display: flex;
                flex-direction: column;
                height: 100%;
                padding: 30px;
                position: relative;
                row-gap: 24px;
            }

            .pricing .item-pricing {
                background: #fff;
                border-radius: 16px;
                padding: 30px;
            }

            .course-card .course-detail .course-name,
            .course-card-responsive .course-detail .course-name,
            .line-clamp,
            .line-clamp-1 {
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
            }

            .course-card .course-detail .course-name {
                color: #34364a;
                font-size: 20px !important;
                font-weight: 700 !important;
                line-height: 30px;
                min-height: 60px;
                position: relative;
                z-index: 80 !important;
            }

            .course-card .course-footer {
                align-items: baseline;
                display: flex;
                gap: 4px;
                justify-content: space-between;
            }

            .course-card .course-footer .star-rating {
                align-items: flex-start;
                display: flex;
                flex-wrap: wrap;
                gap: 2px;
            }

            @media only screen and (min-width: 768px) and (max-width: 1250px) {
                .course-card .course-footer .star-rating img {
                    width: 20px !important;
                }
            }

            .course-card .course-footer .star-rating img {
                width: 24px;
            }

            .checkout .payment-details .header-title {
                color: #34364a;
                font-size: 16px;
                font-weight: 700;
                margin: 0 0 16px;
            }

            .checkout .payment-details .item {
                margin-bottom: 16px;
            }

            .checkout .payment-details .title {
                color: #34364a;
                float: left;
                font-size: 16px !important;
                font-weight: 400;
                margin: 0;
            }

            .checkout .payment-details .value {
                color: #34364a;
                float: right;
                font-size: 16px;
                font-weight: 400;
                margin: 0;
            }

            .clear {
                clear: both;
            }

            .embed-responsive {
                display: block;
                height: 25vh;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
            }

            .video-iframe {
                border-radius: 16px;
                transition: all .3s;
            }



            .embed-responsive:before {
                content: "";
                display: block;
            }

            .embed-responsive iframe {
                border-radius: 16px;
                width: 100%;
                height: 25vh;
            }


            .plyr__video-embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;

            }

            .text-green {
                color: #22c58b !important;
            }

            .border-theme {
                border: 2px solid var(--limeColor);
            }

            .bg-theme-light {
                background-color: #e9fff0d2;
            }

            .form-select {

                border: 1px solid #ced4da !important;
                padding: 0.375rem 2.25rem 0.375rem 0.75rem !important;

            }
        </style>
    @endpush
    <section class="py-5" style="margin-top: 90px">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12">
                    <h1 class="mb-3 header-primary">
                        Checkout Pelatihan
                    </h1>

                </div>
            </div>
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="col-lg-4 col-md-5 col-12 p-md-0 offset-lg-1">
                    <div class="d-block" id="courseCardCheckout"
                        style="position: relative; transition: all 600ms ease-in-out 0s; top: 0px;">
                        <div class="course-card">
                            <div class="embed-responsive embed-responsive-16by9 video-iframe ">
                                <div class="plyr__video-embed" id="player">
                                    <iframe
                                        src="{{ $training->trailer_url }}?autoplay=1&amp;?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                        allowfullscreen="" allowtransparency="" allow="autoplay" frameborder="0"
                                        id="__existing-iframe-id" data-gtm-yt-inspected-5="true"></iframe>
                                </div>
                            </div>
                            <div class="course-detail">
                                <a>
                                    <h2 class="course-name line-clamp-2">
                                        {{ $training->title }}
                                    </h2>
                                </a>
                                <div class="d-flex mt-2 align-items-center gap-1">
                                    @idr($training->price)
                                </div>
                            </div>
                            <div class="course-footer mt-auto">
                                <div class="star-rating">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                        alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                        alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                        alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                        alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                        alt="ic_star">
                                    <span>
                                        (875)
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-12 ">
                    <div class="payment-details">
                        <div class="item-pricing item-mentor d-flex flex-column gap-3">
                            <h5 class="header-title mb-0">
                                Benefits for you
                            </h5>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_konsultasi.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Grup Diskusi Belajar
                                        </h5>
                                        <p>Bonus dari kami</p>
                                    </div>
                                </div>
                                <img src="https://buildwithangga.com/themes/front/images/ic_check.svg"
                                    alt="BuildWith Angga">
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Sertifikat Kelulusan
                                        </h5>
                                        <p>Bonus dari kami</p>
                                    </div>
                                </div>
                                <img src="https://buildwithangga.com/themes/front/images/ic_check.svg"
                                    alt="BuildWith Angga">
                            </div>

                        </div>
                    </div>
                    <form id="form-manual" method="post" action="{{ route('checkout.checkout') }}">
                        @csrf
                        <div class="payment-details  mt-4">
                            <div class="item-pricing item-mentor">

                                <input id="training_id" type="hidden" name="training_id" value="{{ $training->id }}">

                                <h5 class="header-title">
                                    Detail Pembelian
                                </h5>

                                <div class="tab-content" id="pills-tabContent">


                                    <div class="item">
                                        <p class="title">
                                            Harga kelas
                                        </p>
                                        <p class="value">
                                            @idr($training->price)
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="item">
                                        <p class="title">
                                            Kode unik
                                        </p>
                                        <p class="value text-green">
                                            @php
                                                $unique_code = rand(100, 1000);
                                            @endphp
                                            - @idr($unique_code)
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="item">
                                        <p class="title">
                                            Service fee per student
                                        </p>
                                        <p class="value text-green feeMidtransItem0">
                                            +
                                            Rp 5.000
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="item">
                                        <p class="title">
                                            Total transfer
                                        </p>
                                        <input id="transaction_total" hidden="" name="transaction_total"
                                            value="{{ $training->price + $unique_code + 5000 }}">
                                        <p class="value">
                                            <strong id="midtransPrice">
                                                @idr($training->price - $unique_code + 5000)
                                            </strong>
                                        </p>
                                        <div class="clear"></div>
                                    </div>

                                    <h5 class="header-title mt-5">
                                        Metode Pembayaran
                                    </h5>

                                    <select class="form-select" name="type">
                                        <option selected value="pay_now">Bayar Sekarang</option>
                                        <option value="pay_later">Bayar Setelah Selesai Pelatihan</option>

                                    </select>
                                    <button class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3"
                                        type="submit">
                                        Bayar
                                    </button>


                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

</x-user-layout>
