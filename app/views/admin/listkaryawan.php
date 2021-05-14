<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">karyawan</a></li>
              <li class="breadcrumb-item active">List Karyawan</li>
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
                <h3 class="card-title">DataTable ini tampilkan semua list data karyawan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Path Image</th>
                    <th>Action</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($data['allkaryawan'] as $key => $x) {
                  ?>
                  <tr>
                    <td><?= $x['nama'] ?></td>
                    <td><?= $x['jabatan'] ?></td>
                    <td><img src="<?= $value['path_image'] ?>" width="100px;" /></td>
                    <td><a href="<?= BASEURL ?>admin/inputupdatekaryawan/<?= $x['id'] ?>">Edit</a> | <a href="<?= BASEURL ?>admin/deletekaryawan/<?= $x['id'] ?>">Hapus</a></td>
                  <?php
                    }
                  ?>
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
