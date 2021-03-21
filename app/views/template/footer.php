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
        $('#notelp').keyup(function() {
            var input = $(this).val();
            // console.log(input.substr(0, 2));
            if (validation(input, 'numberphone') == true) {
                $('.font-error').remove();
                $('#grupinput').after(
                    '<p style="position: absolute;" class="font-error">Nomor Handphone yang anda masukkan salah</p>'
                );
            } else {
                $('.font-error').remove();
            }
        });
    </script>
</body>

</html>