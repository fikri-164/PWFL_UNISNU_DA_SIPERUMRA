<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>

        <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Umkm List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<!-- <th>Id</th> -->
		<th>Nama Umkm</th>
		<th>Jenis Umkm</th>
		<!-- <th>Profil</th>
		<th>Cp</th> -->
		
            </tr><?php
            foreach ($umkm_data as $umkm)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $umkm->nama_umkm ?></td>
		      <td><?php echo $umkm->jenis_umkm ?></td>

                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>