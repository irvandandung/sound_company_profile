 <!-- Footer -->
 <div class="footer " style="background-color: #1B1B1B;">
        <div class="container">
            <div class="row px-0 pt-3">
                <div class="row w-100 px-5 py-3">
                    <p class="h5 font-weight-bold">SO
                        <o style='color: red;'>un</o>D
                    </p>
                </div>
                <div class="col-md-4 col-12">
                    <p class="font-sub-footer">
                        Produk teknologi untuk memahami arti kehidupan manusia sehingga teknologi tersebut dapat memahami apa yang dibutuhkan manusia. Kami sudah terbukti dengan beberapa mitra yang telah memakai teknologi kami.
                    </p>
                    <div class="row m-0">
                        <div class="col-2">
                            <img class="img-fluid" src="assets/image/instagram.png" />
                        </div>
                        <div class="col-8 py-1">
                            <p class="h5 font-sub-footer">SOunD_id</p>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-2">
                            <img class="img-fluid" src="assets/image/facebook.png" />
                        </div>
                        <div class="col-8 py-1">
                            <p class="h5 font-sub-footer">SOunD_id</p>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-2">
                            <img class="img-fluid" src="assets/image/phone.png" />
                        </div>
                        <div class="col-8 py-1">
                            <p class="h5 font-sub-footer">081-82737372</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-2 col-12 d-flex justify-content-start align-items-center py-3">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">
                                <p class="h5 font-sub-footer">Berita</p>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <p class="h5 font-sub-footer">Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <p class="h5 font-sub-footer">Contact</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <hr class="border-white m-0" />
                    <p class="font-footer py-3 m-0">
                        All technologys are secure and encrypted. Powered by
                        <o style="color: white;"><b>SUN</b></o>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Tag Footer -->

    <script>
        $(function() {
            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 10) {
                    $(".navbar").addClass("active");
                } else {
                    $(".navbar").removeClass("active");
                }
            });
        });
    
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.select2-selection__rendered').after(
            '<p style="margin-top:-24px; margin-left:86%;" class="selectfont">Ubah</p>');
        $('.select2-selection__arrow').remove();
    });

    function updatebutton() {
        if (validation($('#notelp').val(), 'numberphone') == false && $('#ket').val() != '') {
            $('#sendMessage').attr('onclick', 'swale(true)');
        }else{
            $('#sendMessage').attr('onClick', 'swale(false)');
        }
    }

    $('#erase').click(function() {
        $('#notelp').val('');
        $('.font-error').remove();
        $('#notelp').attr('style','border-color:#40AE47 !important');
        $('#erase').attr('style','border-color:#40AE47 !important');
        updatebutton();
    });

    function validation(input, type) {
        if (type == 'numberphone') {
            var wrong;
            if (input.length < 10) {
                wrong = true;
            }
            if (input.substr(0, 2) != 08) {
                wrong = true
            }
            if (wrong == true) {
                return true;
            } else {
                return false;
            }
        }
    }

    $('#notelp').keyup(function() {
        var input = $(this).val();
        // console.log(input.substr(0, 2));
        if (validation(input, 'numberphone') == true) {
            $('.font-error').remove();
            $('#notelp').after(
                '<p style="position: absolute; margin-top:42px !important;" class="font-error">Nomor Handphone yang anda masukkan salah</p>'
            );
            $('#notelp').attr('style','border-color:#FF2800 !important');
            $('#erase').attr('style','border-color:#FF2800 !important');
        } else {
            $('.font-error').remove();
            $('#notelp').attr('style','border-color:#40AE47 !important');
        }
        updatebutton();
    });

    function swale(status){
        console.log(status)
        if (status == true) {
            var formData = {
                category : $('#cat').val(),
                phonenumber : $('#notelp').val(),
                pesan : $('#ket').val()
            }
            $.ajax({
                type : 'POST',
                url: '<?php echo BASEURL; ?>Contact/send_keluhan',
                dataType : 'text',
                data : formData,
                cache : false,
                beforeSend : function() {
                    let timerInterval
                    Swal.fire({
                      // timer: 5000,
                      // timerProgressBar: true,
                      onBeforeOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                          const content = Swal.getContent()
                          if (content) {
                            const b = content.querySelector('b')
                            if (b) {
                              b.textContent = Swal.getTimerLeft()
                            }
                          }
                        }, 100)
                      },
                      onClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                },
                success : function(response) {
                    if (response == '1') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Success send message',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops, complain tidak terkirim...',
                            text: 'Maaf, error akan segera kami perbaiki!'
                        });
                    }
                }
            });
       
        }else{
            if ($('#notelp').val() == '') {
                $('.notelp').remove();
                $('#notelp').after(
                '<p style="position: absolute; margin-top:42px !important;" class="font-error notelp">Nomor Handphone tidak boleh kosong</p>'
                );
                $('#notelp').attr('style','border-color:#FF2800 !important');
                $('#erase').attr('style','border-color:#FF2800 !important');
            }
            if ($('#ket').val() == '') {
                 $('.ket').remove();
                 $('#ket').after('<p class="font-error ket">Keterangan tidak boleh kososng</p>');
                  $('#ket').attr('style','border-color:#FF2800 !important');
            }
        }
        
    }

    $('#ket').keyup(function(){
        if ($('#ket').val() == '') {
            $('.ket').remove();
            $('#ket').after('<p class="font-error ket">Keterangan tidak boleh kososng</p>');
            $('#ket').attr('style','border-color:#FF2800 !important');

        }else {
            $('#ket').attr('style','border-color:#40AE47 !important');
            $('.ket').remove();
        }
        updatebutton();
    })



    </script>
</body>

</html>