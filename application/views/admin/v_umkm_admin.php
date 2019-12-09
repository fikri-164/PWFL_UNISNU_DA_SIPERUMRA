<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Produk UMKM <?php echo $this->session->userdata('ket'); ?></h1>
  <h8 class="mb-2 text-gray-800">Client Server DataTables</h8>
  
  <div id='notifications' ><center><h1><?php echo $this->session->flashdata('berhasil');?></h1></center></div>
    <div id='notifications' ><center><h1><?php echo $this->session->flashdata('gagal');?></h1></center></div>
<!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
      <h6 class="m-0 font-weight-bold text-primary">Produk Usaha <?php echo $this->session->userdata('nama_umkm'); ?> Jenis UMKM <?php echo $this->session->userdata('ket'); ?></h6>
      <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</button>

      <?php echo anchor(site_url('c_cetak/word/').$p, '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?>

      <?php echo anchor(site_url('c_cetak/excel/').$p, '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Produk</th>
              <th>Deskripsi Produk</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php  $no = 1; foreach ($pa as $itemf ) {?>
          <!-- <tbody> -->
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $itemf['nama_produk']; ?></td>
              <td><?php echo $itemf['deskripsi_produk']; ?></td>
              <td><?php echo $itemf['harga_produk']; ?></td>
              <td align="center">
                <div class="btn-group" role="group">
                  <div class="btn btn-flat btn-primary btn-sm" data-toggle="modal" data-target="#edit<?php echo $itemf['id']; ?>"><i class="fa fa-edit"></i></div>

                  <a href="<?php echo base_url('C_umkm/hapusproduk/').$itemf['id']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?')" class="btn btn-flat btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                </div>
              </td>

            </tr>
          <!-- </tbody> -->
          <?php } ?>
        </table>
      </div>
      </div>
      </div>
      </div>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">PRODUK UMKM FASHION</h1>
  <h8 class="mb-2 text-gray-800">Serverside DataTables</h8>
<!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
      <h6 class="m-0 font-weight-bold text-primary">Produk Usaha <?php echo $this->session->userdata('nama_umkm'); ?> Jenis UMKM <?php echo $this->session->userdata('ket'); ?></h6>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</a>
    </div>
  
    <div class="card-body">
      <div class="table-responsive">
        <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
        <table id="table" class="table table-bordered display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Produk</th>
              <th>Deskripsi Produk</th>
              <th>Harga</th>
              <!-- <th>Action</th> -->
            </tr>
          </thead>
          <tbody>
          </tbody>

          <tfoot>
            <tr>
              <th>No.</th>
              <th>Nama Produk</th>
              <th>Deskripsi Produk</th>
              <th>Harga</th>
              <!-- <th>Action</th> -->
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
                


<!-- tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Produk
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </h4>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url('c_umkm/tambahproduk') ?>" method="POST">
        <!-- ============== -->
        <input type="hidden" class="form-control" name="nama_umkm" value="<?php echo $this->session->userdata('nama_umkm'); ?>">
        <input type="hidden" class="form-control" name="jenis_umkm" value="<?php echo $this->session->userdata('ket'); ?>">
        <!-- ============== -->
          <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" required="">
          </div>
          <div class="form-group">
            <label>Deskripsi Produk</label>
            <textarea type="text" class="form-control" name="deskripsi_produk" required=""></textarea>
          </div>
          <div class="form-group">
            <label>Harga Produk</label>
            <input type="number" class="form-control" name="harga_produk" required="">
          </div>
          <div class="form-group">
            <label>Foto Produk</label>
            <input type="number" class="form-control" name="stock">
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
       </form>
    </div>
  </div>
</div>
</div>


<!-- edit -->
<?php  $no = 1; foreach ($pa as $itemf ) {?>
<div class="modal fade" id="edit<?php echo $itemf['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Produk
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </h4>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url('c_umkm/editproduk') ?>" method="POST">
        <!-- ============== -->
        <input type="hidden" class="form-control" name="nama_umkm" value="<?php echo $this->session->userdata('nama_umkm'); ?>">
        <input type="hidden" class="form-control" name="jenis_umkm" value="<?php echo $this->session->userdata('ket'); ?>">
        <input type="hidden" class="form-control" name="id" value="<?php echo $itemf['id']; ?>">
        <!-- ============== -->
          <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" value="<?php echo $itemf['nama_produk']; ?>" required="">
          </div>
          <div class="form-group">
            <label>Deskripsi Produk</label>
            <textarea type="text" class="form-control" name="deskripsi_produk" required=""><?php echo $itemf['deskripsi_produk']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Harga Produk</label>
            <input type="number" class="form-control" name="harga_produk" value="<?php echo $itemf['harga_produk']; ?>" required="">
          </div>
          <div class="form-group">
            <label>Foto Produk</label>
            <input type="number" class="form-control" name="stock">
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
       </form>   
    </div>
  </div>
</div>
</div>
<?php } ?>



