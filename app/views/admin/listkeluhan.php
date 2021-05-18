<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List keluhan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">keluhan</a></li>
              <li class="breadcrumb-item active">List keluhan</li>
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
                <h3 class="card-title">DataTable untuk menampilkan semua data keluhan</h3>
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
                    <th>Kategori Produk</th>
                    <th>No Ponsel</th>
                    <th>Pesan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($data['allkeluhan'] as $key => $value) {
                  ?>
                  <tr>
                    <td><?= $value['kategori_produk'] ?></td>
                    <td><?= $value['nomor_ponsel'] ?></td>
                    <td><?= substr($value['pesan'], 10) ?>...</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $value['id'] ?>">
                          Lihat
                        </button> | <a type="button" class="btn btn-danger" href="<?= BASEURL ?>admin/deleteKeluhan/<?= $value['id'] ?>">Hapus</a></td>

                      <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">List Keluhan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <h3>Kategori Produk</h3>
                          <p><?= $value['kategori_produk'] ?></p>
                          <h3>Nomor Ponsel</h3>
                          <p><?= $value['nomor_ponsel'] ?></p>
                          <h3>Kategori Produk</h3>
                          <p><?= $value['pesan'] ?></p>
                          </div>
                          
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                          </div>
                        </div>
                      </div>
                    </div>

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


    <!-- Button trigger modal -->

