
    <!-- Section Berita Terpopuler -->
   
    <?php 
                        // foreach ($data['allberita'] as $key) {
                        //     print_r($key['title']);
                        // }
                        // exit;
                    ?>
    <div class="container px-0" style="padding: 50px;">
            <div class="row mx-0">
                <div class="row w-100 mx-0 padding-container">
                    <p class="font-title font-weight-bold"></p>
                </div>
                <div class="row w-100 mx-0 ">
                    <?php 
                        foreach ($data['allberita'] as $key) {
                    ?>
                    <div class="col-md-6 padding-container py-3">
                        <div style="cursor: default;">
                            <img class="card-img-top" src="<?= $key['path_image'] ?>" alt="Card image cap">
                           
                        </div>
                    </div>
                    <div class="col-md-6 padding-container py-3">
                        <div style="cursor: default;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $key['title'] ?></h5>
                                <p style="font-size: small; color: red;"><?= $key['tanggal'] ?></p>
                                <p class="card-text"><?= substr($key['isi'], 0, 600) ?>...</p>

                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
            </div>
        </div>
    </div>
</div>

    <!-- Close Tag Section Promo -->

   
