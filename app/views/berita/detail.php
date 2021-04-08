<div class="container px-0" style="padding: 50px;">
            <div class="row mx-0">
                <div class="row w-100 mx-0 padding-container">
                    <p class="font-title font-weight-bold"></p>
                </div>
             <div class="row w-100 mx-0 ">
             <div class="col-md-12 padding-container py-3">
                        <div style="cursor: default;">
                            <div style="text-align: center;" class="card-body">
                                <h5 class="card-title"><?= $data['berita']['title'] ?></h5>
                                <p style="font-size: small; color: red;"><?= $data['berita']['tanggal'] ?></p>
                                <img class="img-fluid" src="<?= $data['berita']['path_image'] ?>" alt="detai image">
                                <p style="text-align: left;" class="card-text"><?= $data['berita']['isi'] ?>...</p>
                            </div>
                        </div>
            </div>
            </div>
        </div>
    </div>
</div>