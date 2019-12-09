<!DOCTYPE html>
<html>
<head>
  <title>SI PERUMRA | Dashboard</title>
</head>
<body>
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">UMKM KULINER</h1>
            
          </div>
          <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Profil UMKM</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="col-md-12">
                <label>Nama UMKM</label>
                  <div class="card mb-4">
                  <form action="<?php echo base_url('#'); ?>" method="post">
                    <div class="form-group">
                    <?php foreach ($profil as $value) {?>
                      <textarea name="isi" class="form-control ckeditor" rows="5" ><?= $value['profil'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <input name="cp" type="text" class="form-control" placeholder="Contact Person" value="<?= $value['cp'] ?>" required="">
                    </div>
                    </form>
                    <?php } ?>
                  </div>
                </div>
              <div class="col-md-12">
              <div class="card mb-4">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Deskripsi Produk</th>
                      <th>Harga Produk</th>
                    </tr>
                    <?php  $no = 1; foreach ($produk as $itemproduk ) {?>
                  
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $itemproduk['nama_produk']; ?></td>
                      <td><?php echo $itemproduk['deskripsi_produk']; ?></td>
                      <td><?php echo $itemproduk['harga_produk']; ?></td>
                    </tr>
                  </tbody>
                  </thead>
                </table>
              </div>
            </div>
            </div>
            <?php  } ?>

              </div>
        </div>

</body>
</html>