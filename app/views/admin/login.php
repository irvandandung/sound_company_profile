<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SOUND</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin_assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin_assets/images/adm.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5" style="background-size:100% 100%;vertical-align: middle;border-radius:20px;border:1px">
                <div class="brand-logo">
                <a href="admin"><h1 class="text-center text-bold" style="font-family: montserrat;">SOUND-COMPANY</h1></a>
                </div>
                <h4 class="text-dark">Hello Sahabat! let's get started</h4>
                <h6 class="font-weight-light text-dark">Sign in to continue.</h6>
                 <form method="post" action="admin/login" id="mydata" class="pt-3">
                <!-- <form class="pt-3"> -->
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="username" placeholder="Username" name="username">
                
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password">
                    
                  </div>

                  <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Sign In</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Create by Dmuktico </label>
                    </div>
                    <a href="#" class="auth-link text-dark">Forgot password?</a>
                  </div>
                 
                  <div class="text-center mt-4 font-weight-light text-dark"> PT.SOUND_ID
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin_assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin_assets/js/off-canvas.js"></script>
    <script src="admin_assets/js/hoverable-collapse.js"></script>
    <script src="admin_assets/js/misc.js"></script>
    <script type="text/javascript"> 
  $(window).load(function() { 
      $("#loading").fadeOut("slow");
      $("#username").focus();
    })
  </script>
  <script type="text/javascript"> 
    $('#mydata').submit(function(e){
        e.preventDefault();
         var fa = $(this);            
          $.ajax({
            url: fa.attr('action'),
            type: 'post' ,
            data: fa.serialize(),
            dataType: 'json',
            success: function(response) {
              if(response.success == true) {
                window.location.href ="<?=base_url('home_admin');?>"
              }else{
                $.each(response.messages,function(key, value){
                  var element = $('#' + key);
                  element.closest('div.form-group')
                  .removeClass('has-error')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success')
                  .find('.label.label-warning')
                  .remove();
                  element.after(value);
                });
                $("#username").focus();
              }
            }
         });

      });
</script>
    <!-- endinject -->
  </body>
</html>
