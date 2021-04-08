<!-- Background Image -->
<div class="bg-image">
        <div class="h-100 bg-overlay">
            <div class="h-100 w-100 container px-0">
                <div class="h-100 w-100 d-flex justify-content-center align-items-center text-white">
                    <header class="text-center">
                        <h1 class="font-banner">
                            Solusi untuk Hidup Mudah dan Terbantu, <br /> Integrasi Secepat Kilat !
                        </h1>
                    </header>
                </div>
                <!-- Mitra -->
                <div class="row item mx-0" style="margin-top: -125px;">
                    <div class="card-choose-item col-lg-6 col-12">
                        <div class="card-item card shadow border-0 py-md-4 py-3 px-md-4" style="cursor: default !important;">
                            <p class="font-title font-weight-bold px-md-2 px-4">Sponsored</p>
                            <div class="row" style="margin-top : 20px;">
                                <div class="col-4">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/Bca.png" /></center>
                                </div>
                                <div class="col-4">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/Mandiri.png" /></center>
                                </div>
                                <div class="col-4">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/Briva.png" /></center>
                                </div>

                            </div>
                            <div class="row" style="margin-top : 20px;">
                                <div class="col-6">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/Link Aja.png" /></center>
                                </div>
                                <div class="col-6">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/ovo.png" /></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-form-item col-lg-6 col-12">
                        <div class="card-item card shadow border-0 py-4 px-4" style="cursor: default !important;">
                            <p class="font-title font-weight-bold px-2">Mitra</p>
                            <div class="row" style="margin-top : 20px;">
                                <div class="col-6">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/PSN.png" /></center>
                                </div>
                                <div class="col-6">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/Kasku.png" /></center>
                                </div>
                            </div>
                            <div class="row" style="margin-top : 20px;">
                                <div class="col-6">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/indomaret.png" /></center>
                                </div>
                                <div class="col-6" style="margin-top: -26px;">
                                    <center><img class="img-fluid" src="<?= BASEURL ?>assets/image/MALE.png" /></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Close Tag Mitra -->

            </div>
        </div>
    </div>

    <!-- Section Berita Terpopuler -->
    <div class="section-promo">
        <div class="container px-0">
            <div class="row mx-0">
                <div class="row w-100 mx-0 padding-container">
                    <p class="font-title font-weight-bold">Berita Terpopuler</p>
                </div>
                <div class="row w-100 mx-0 ">
                    <?php foreach($data['upberita'] as $key){ ?>
                    <div class="col-md-4 padding-container py-3">
                    <a style="text-decoration: none; color :black;" href="<?= BASEURL ?>berita/detail/<?= $key['id'] ?>" >
                        <div class="card">
                            <img class="card-img-top" src="<?= $key['path_image'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $key['title'] ?></h5>
                                <p style="font-size: small; color: red;"><?= $key['tanggal'] ?></p>
                                <p class="card-text"><?= substr($key['isi'], 0, 200) ?>....</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Close Tag Section Promo -->

    <!-- Section About -->
    <!-- <div class="section-promo pt-5"> -->
    <div class="section-about" style=" background-color: rgba(0,118,131,0.04) ">
        <div class="container">
            <div class="row py-3 mx-0">
                <div class="row w-100 padding-container py-3">
                    <p class="font-title font-weight-bold">Mengapa harus Sound?</p>
                </div>
                <div class="row w-100 m-0">
                    <div class="col-sm-6 pt-3 pb-5">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center align-items-start">
                                <img src="<?= BASEURL ?>assets/image/scuritas.png" alt="triangle with all three sides equal" height="72" width="72" />
                            </div>
                            <div class="col">
                                <p class="font-sub-title font-weight-bold py-2 m-0">Security Tingkat Tinggi</p>
                                <p class="font-description">
                                    Teknologi yang kami terapkan terjamin aman dan mimiliki security tingkat tinggi. Don't Worry!!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3 pb-5">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center align-items-start">
                                <img src="<?= BASEURL ?>assets/image/openConn.png" alt="triangle with all three sides equal" height="72" width="72" />
                            </div>
                            <div class="col">
                                <p class="font-sub-title font-weight-bold py-2 m-0">Open Connection</p>
                                <p class="font-description">
                                    Kami menyediakan keterhubungan dengan beberapa teknologi lain. Dan pastinya pembayaran elektronik juga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3 pb-5">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center align-items-start">
                                <img src="<?= BASEURL ?>assets/image/easy.png" alt="triangle with all three sides equal" height="72" width="72" />
                            </div>
                            <div class="col">
                                <p class="font-sub-title font-weight-bold py-2 m-0">Gampang Cuy!</p>
                                <p class="font-description">
                                    Gak usah ragu, cepat pasang saja. Integrasi kami gak ribet- ribet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3 pb-5">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center align-items-start">
                                <img src="<?= BASEURL ?>assets/image/fast-packet.png" alt="triangle with all three sides equal" height="72" width="72" />
                            </div>
                            <div class="col">
                                <p class="font-sub-title font-weight-bold py-2 m-0">Cepat!</p>
                                <p class="font-description">
                                    Integrasi kami secepat kilat. Pasti paket layanan akan segera terpasang!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- </div> -->

    <!-- Close Section About -->