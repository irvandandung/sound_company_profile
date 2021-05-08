  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $data['page'] ?> Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Berita</a></li>
              <li class="breadcrumb-item active"><?= $data['page'] ?> Berita</li>
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
            <h3 class="card-title">Form <?= $data['page'] ?> Berita</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="<?= BASEURL ?>admin/hit_berita<?= isset($data['berita'])? '/'.$data['berita']['id'] : ''?>" method="post">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="title">Judul Berita</label>
                  <input type="text" value="<?= isset($data['berita'])? $data['berita']['title'] : '' ?>" class="form-control" id="title" name="title" placeholder="Masukan Judul Berita" required>
                </div>
                <div class="form-group">
                  <label for="path_image">Link Gambar Banner</label>
                  <input value="<?= isset($data['berita'])? $data['berita']['path_image'] : '' ?>" type="text" class="form-control" id="path_image" name="path_image" placeholder="Masukan Judul Berita" required>
                </div>
                <!-- <div class="form-group">
                  <label>Tanggal</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                  <label>Kategori</label>
                  <select name='id_kategori' class="form-control select2" style="width: 100%;">
                  <?php
                    foreach ($data['allKategori'] as $key => $value) {
                  ?>
                    <!-- <option value='1' selected="selected">Dompet Digital</option> -->
                    <option value='<?= $value['id'] ?>' <?php echo (isset($data['berita']) && $value['nama'] == $data['berita']['nama']) ? 'selected="selected"' : '' ?>><?= $value['nama'] ?></option>
                  <?php 
                    }
                  ?>
                    <!-- <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option> -->
                  </select>
                </div>
                <div class="form-group">
                  <label>Isi</label>
                  <textarea name='isi' id="summernote">
                    <?= isset($data['berita'])? $data['berita']['isi'] : 'Place <em>some</em> <u>text</u> <strong>here</strong>' ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-info">Simpan</button>
                </div>
                <!-- /.form-group -->
                <!-- <div class="form-group">
                  <label>Disabled</label>
                  <select class="form-control select2" disabled="disabled" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div> -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div> -->
                <!-- /.form-group -->
                <!-- <div class="form-group">
                  <label>Disabled Result</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div> -->
                <!-- /.form-group -->
              <!-- </div> -->
              <!-- /.col -->
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