<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Edit Data Pegawai
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/pegawai/do_update" method="POST">
                
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="nip" value="<?php echo $nip ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                  <label><input type="radio" name="jenisKelamin" value="Pria" <?php echo ($jenisKelamin == 'Pria' ? ' checked' : ''); ?>>Pria</label><br>
                  <label><input type="radio" name="jenisKelamin" value="Wanita" <?php echo ($jenisKelamin == 'Wanita' ? ' checked' : ''); ?>>Wanita</label>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tglLahir" value="<?php echo $tglLahir ?>" class="form-control">
                </div>
                 <div class="form-group">
                  <label>Alamat Kota</label>
                  <input type="text" name="alamat" value="<?php echo $alamat ?>" class="form-control">
                <div class="form-group">
                  <label>Status</label><br>
                  <label><input type="radio" name="status" value="Lajang" <?php echo ($status == 'Lajang' ? ' checked' : ''); ?>>Lajang</label><br>
                  <label><input type="radio" name="status" value="Menikah" <?php echo ($status == 'Menikah' ? ' checked' : ''); ?>>Menikah</label>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $email ?>" class="form-control">
                </div>

                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="<?php echo base_url() ?>index.php/pegawai" class="btn btn-md btn-info">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>