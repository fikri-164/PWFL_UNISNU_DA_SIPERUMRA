<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">DAFTAR UMKM Kerajinan</h1>
<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Produk</th>
                      <th>Deskripsi Produk</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <?php  $no = 1; foreach ($f as $itemf ) {?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $itemf['nama_produk']; ?></td>
                      <td><?php echo $itemf['deskripsi_produk']; ?></td>
                      <td><?php echo $itemf['harga_produk']; ?></td>

                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        </div>