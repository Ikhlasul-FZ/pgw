<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<title>Tambah Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA PEGAWAI
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/pegawai/do_insert" method="POST">
                
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" placeholder="Masukkan NIP" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                  <label><input type="radio" name="jenisKelamin" value="Pria">Pria</label><br>
                  <label><input type="radio" name="jenisKelamin" value="Wanita">Wanita</label>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tglLahir" placeholder="Masukkan Tanggal" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat Kota</label>
                  <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
                </div>
                <div class="form-group">
                  <label>Status</label><br>
                  <label><input type="radio" name="status" value="Lajang">Lajang</label><br>
                  <label><input type="radio" name="status" value="Menikah">Menikah</label>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
                </div>

                
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>