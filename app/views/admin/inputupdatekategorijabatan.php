  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $data['page'] ?> kategori Jabatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">karyawan</a></li>
              <li class="breadcrumb-item active"><?= $data['page'] ?> kategori Jabatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form <?= $data['page'] ?> kategori jabatan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="<?= BASEURL ?>admin/hit_kategori_jabatan<?= isset($data['kategorijabatan'])? '/'.$data['kategorijabatan']['id'] : ''?>" method="post">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="title">Nama kategori jabatan</label>
                  <input type="text" value="<?= isset($data['kategorijabatan'])? $data['kategorijabatan']['kategori_jabatan'] : '' ?>" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Nama jabatan" required>
                </div>
              
                <div class="form-group">
                  <button type="submit" class="btn btn-info">Simpan</button>
                </div>
             
              </div>
             
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          </form>
          <!-- <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div> -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
