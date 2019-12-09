<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">PRODUK UMKM FASHION</h1>
<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
              <h6 class="m-0 font-weight-bold text-primary">Produk Usaha <?php echo $this->session->userdata('nama_umkm'); ?> Jenis UMKM <?php echo $this->session->userdata('ket'); ?></h6>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</a>
            </div>
          
            <div class="card-body">
              <div class="table-responsive">
                <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
                <table id="table" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Produk</th>
                      <th>Deskripsi Produk</th>
                      <th>Harga</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php  $no = 1; foreach ($produk as $itemf ) {?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $itemf['nama_produk']; ?></td>
                      <td><?php echo $itemf['deskripsi_produk']; ?></td>
                      <td><?php echo $itemf['harga_produk']; ?></td>
                      <td>Kosong sek</td>

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