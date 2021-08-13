<title>Data Gaji</title>
  </head>
  <body>
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-warning">
              Tabel Buku
            </div>
            <div class="card-body">
              <a href="<?php echo base_url() ?>index.php/gaji/add_gaji" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <div class="table-responsive">
              <table class="table table-bordered table-striped" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Gaji</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Golongan</th>
                    <th scope="col">Tunjangan</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                  $no = 1;
                    foreach ($dat as $dt) {
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $dt ['kd_gaji'] ?></td>
                      <td><?php echo $dt ['nip'] ?></td>
                      <td><?php echo $dt ['tglMasuk'] ?></td>
                      <td><?php echo $dt ['golongan'] ?></td>
                      <td><?php echo $dt ['tunjangan'] ?></td>
                      <td><?php echo $dt ['gajiPokok'] ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url() ?>index.php/gaji/edit_dataa/<?php echo $dt['kd_gaji']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                        </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>