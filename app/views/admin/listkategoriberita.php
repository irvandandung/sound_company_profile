<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Kategori Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Berita</a></li>
              <li class="breadcrumb-item active">List Kategori Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable untuk menampilkan semua data kategori berita</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                if(isset($_SESSION['message'])){
                ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i>Succcess</h5>
                    <?= $_SESSION['message']; ?>
                  </div>
                <?php
                  }
                ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($data['allkategoriberita'] as $key => $value) {
                  ?>
                  <tr>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['keterangan'] ?></td>
                    <td><a href="<?= BASEURL ?>admin/inputupdatekategoriberita/<?= $value['id'] ?>">Edit</a> | <a href="<?= BASEURL ?>admin/deletekategoriberita/<?= $value['id'] ?>">Hapus</a></td>
                  <?php
                    }
                  ?>
                  </tr>
                  </tbody>
                  <tfoot>
                  <!-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> -->
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->