<title>Data Pegawai</title>
  </head>
  <body>
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-info">
              Tabel Pegawai
            </div>
            <div class="card-body">
              <a href="<?php echo base_url() ?>index.php/pegawai/add_data" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <div class="table-responsive">
              <table class="table table-bordered table-striped" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat Kota</th>
                    <th scope="col">Status</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                  $no = 1;
                    foreach ($data as $dt) {
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $dt ['nip'] ?></td>
                      <td><?php echo $dt ['nama'] ?></td>
                      <td><?php echo $dt ['jenisKelamin'] ?></td>
                      <td><?php echo $dt ['tglLahir'] ?></td>
                      <td><?php echo $dt ['alamat'] ?></td>
                      <td><?php echo $dt ['status'] ?></td>
                      <td><?php echo $dt ['email'] ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url()."index.php/pegawai/edit_data/".$dt['nip']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="<?php echo base_url() ?>index.php/pegawai/do_delete/<?php echo $dt['nip']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>