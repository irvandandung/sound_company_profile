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
              

            </div>
        </div>
    </div>

    <!-- Section Berita Terpopuler -->
 
        <div class="container px-0">
            <div class="row mx-0">
                <div class="row w-100 mx-0 padding-container">
                    <p class="font-title"><br>Sound adalah produk teknologi baik lot, machine learning atau ai dan masih banyak yang lainnya yang dinaungi oleh perusahaan atau PT Sandi Makmur Teknologi.
                    didirikan pada tahun 2021 dan memiliki bisnis B to B . sampai saat ini kami sedang explore dan terus mengembangkan teknologi kami dan pastinya kami open kepada perusahaan teknologi 
                    lain untuk melakukan kerjasama dengan kami.</p>
                    <p class="font-title font-weight-bold">Visi.</p>
                    <p class="font-title">Menjadi sebuah perusahaan yang memiliki banyak manfaat bagi seluruh alam semesta dan memberikan solusi yang terbaik bagi mitra yang melakukan kerjasama dengan kami.</p>
                    <p class="font-title font-weight-bold">Misi</p>
                    <p class="font-title">.<br>- membuat teknologi yang canggih dan effisien.<br>- selalu memberikan service yang terbaik.<br>- berusaha menjaga kualitas produk.<br>
                    - menyatukan beberapa perusahaan teknologi untuk saling kerjasama.<br>- membuat semuanya menjadi lebih baik.</p>
                
                </div>
                <div class="row w-100 mx-0 ">
                    <div class="col-md-12 padding-container py-3">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <?php foreach ($data['kategoriJabatan'] as $key => $value) {?>
                                    <a class="nav-item nav-link <?= ($value['id'] == '1') ? 'active' : '' ?>" id="nav-<?= $value['id'] ?>-tab" data-toggle="tab" href="#nav-<?= $value['id'] ?>" role="tab" aria-controls="nav-home" aria-selected="true"><?= $value['kategori_jabatan'] ?></a>
                                <?php } ?>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <?php foreach ($data['kategoriJabatan'] as $key => $value) {?>
                                <div class="tab-pane fade <?= ($value['id'] == '1') ? 'show active' : '' ?>" id="nav-<?= $value['id'] ?>" role="tabpanel" aria-labelledby="nav-<?= $value['id'] ?>-tab">
                                    <div class="row w-100 mx-0">
                                        <?php
                                        if(count($data['karyawan_'.$value['id']]) > 0){
                                        foreach($data['karyawan_'.$value['id']] as $keyKaryawan => $valueKaryawan) {?>
                                            <div class="col-md-3 padding-container py-3">
                                                <div style="cursor: default;">
                                                    <img class="card-img-top" src="<?= $valueKaryawan['path_image']; ?>" alt="Muhamad Irvan Dandung">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $valueKaryawan['jabatan']; ?></h5>
                                                        <p style="font-size: small; color: red;"><?= $valueKaryawan['nama']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }} ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Close Tag Section Promo -->

    
