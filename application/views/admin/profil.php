
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profil</h1>
    <div id='notifications' >
    <center><h1>
    <?php echo $this->session->flashdata('berhasil');?>
    <?php echo $this->session->flashdata('gagal');?>
    </h1></center>
    </div>
  </div>
  <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Deskripsi Usaha <?php echo $this->session->userdata('nama_umkm'); ?> Jenis UMKM <?php echo $this->session->userdata('ket'); ?></h6>
        </a>
        <!-- Card Content - Collapse -->
        <?php foreach ($profil as $p ) {?>
        <div class="card mb-4">
          <div class="form-group">
          <form action="<?php echo base_url('C_umkm/editprofil'); ?>" method="POST" class="form-horizontal" role="form">
            <div class="col-sm-12">
              <label>Isi Profil</label>
              <textarea name="profil" class="form-control ckeditor" rows="5"><?php echo $p['profil']; ?></textarea>
            </div>
            <div class="col-sm-12">
              <label>No. Handphone</label>
              <input type="text" class="form-control" id="nama" name="cp" value="<?php echo $p['cp']; ?>" placeholder="Isikan Nama Mahasiswa" required="">
              <input type="hidden" class="form-control" id="nama" name="id" value="<?php echo $p['id']; ?>">
            </div>
            <div class="box-footer">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-8">
                <button type="submit" value="Simpan" class="btn btn-warning">Simpan</button>
              </div>
            </div>
          </form> 
          </div>
        </div>
        <?php  } ?>
      </div>
</div>
