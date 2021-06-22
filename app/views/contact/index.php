    <!-- body -->
    <div class="contact pt-5 pb-3">
        <div class="container bodybottom pt-5">
            <div class="slogan-body">
                <p class="font-title-page">Hubungi Kami</p>
                <p class="font-sub-title-page font-os">Tak usah ragu untuk menghubungi kami. Customer service siap melayani 1x24jam.</p>
            </div>

            <div class="row">
                <div class="col-sm-7 mb-md-0 mb-3">
                    <div class="card-form">
                        <div class="row">
                            <div class="col-sm-6 mb-md-0 mb-3">
                                <label class="font-item-form" for="titleFormItem">Kategori Produk</label>
                                <select id="cat" class="js-example-basic-single customselect normalfont" name=" state">
                                    <option value="Machine Learning">Machine</option>

                                    <option value="AI">AI</option>
                                </select>
                                <!-- <div class="customselect ">
                                <p class="normalfont ">Pulsa Prabayar</p>
                                <p class="selectfont ">Ubah</p>
                             
                            </div> -->
                            </div>
                            <div class="col-sm-6 ">
                                <label class="font-item-form" for="titleFormItem">Nomor Ponsel</label>
                                <div id="grupinput" class="input-group w-100 ">
                                    <input id="notelp" maxlength="13" pattern="[0-9]*" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="true" type="text" class="customselect form-control rounded-right-0 border-right-0" placeholder="08xxxxxxxxxx "
                                    />
                                    <div id="erase" class="input-group-append pointer">
                                        <span class="bg-white border-left-0 rounded-left-0 customselect input-group-text ">
                                            <i class="far fa-times-circle fa-lg"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="toTextarea ">
                            <label class="font-item-form" for="titleFormItem">Pesan</label>
                            <textarea id='ket' class="p-3" placeholder="Tulis Di sini... "></textarea>
                        </div>
                        <div class="row px-3 pt-3 d-flex justify-content-end align-items-center ">
                            <button onclick="swale(false)" id="sendMessage" type="submit" class="btn btn-primary my-1 px-5 py-2 font-weight-bold h-btn-md h-btn" style="height: 54px " data-toggle="modal" data-target="#modalDetailOrder">
                                Kirim
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-sm-5 ">
                    <div class="card-contact px-3 py-3 ">
                        <div class="row ">
                            <div class="col-sm-12 ">
                                <div class="row px-3 ">
                                    <div class="d-flex justify-content-center align-items-start ">
                                        <img height="48px " width="48px " src="<?= BASEURL ?>assets/image/whatsapp.png" />
                                    </div>
                                    <div class="col ">
                                        <p class="font18bold ">Whatsapp</p>
                                        <div class="row ">
                                            <div class="col d-flex justify-content-start ">
                                                <p class="normalfont ">
                                                    082211682560
                                                </p>
                                            </div>
                                            <div class="col d-flex justify-content-end p-0 ">
                                            <p onclick="window.location.href = 'https://wa.me/6282211682560'" class="font-link m-0 font-weight-bold">
                                                    Kirim Pesan
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row pt-5 selectfont2 pr-3 d-flex justify-content-end ">
                                    Telepon
                                </div> -->
                                    <div class="linee ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4 ">
                            <div class="col-sm-12 ">
                                <div class="row px-3 ">
                                    <div class="d-flex justify-content-center align-items-start ">
                                        <img height="44px " width="44px " src="<?= BASEURL ?>assets/image/telephonecall.png" />
                                    </div>
                                    <div class="col ">
                                        <p class="font18bold ">Costumer Service</p>
                                        <div class="row ">
                                            <div class="col d-flex justify-content-start ">
                                                <p class="normalfont ">
                                                    021-9102949
                                                </p>
                                            </div>
                                            <div class="col d-flex justify-content-end p-0 ">
                                                <p onclick="window.location.href = 'tel:+62-21-910-2949'" class="font-link m-0 font-weight-bold">
                                                    Telepon
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p style="margin-top:40px" class="font-title-page">Temukan Kami di sini</p>
            <div class="embed-responsive embed-responsive-1by1">
                <iframe class="embed-responsive-item" id="gmap_canvas" src="https://maps.google.com/maps?q=bekasi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <!-- --- -->