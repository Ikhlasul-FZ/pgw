<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Gaji</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA GAJI
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/gaji/doo_insert" method="POST">
                
                <div class="form-group">
                  <label>Kode Gaji</label>
                  <input type="text" name="kd_gaji" placeholder="Masukkan Kode" class="form-control">
                </div>
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" placeholder="Masukkan NIP" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" name="tglMasuk" placeholder="Masukkan Tanggal" class="form-control">
                </div>
                <div class="form-group">
                  <label>Golongan</label>
                  <select id="golongan" class="form-control" name="golongan">
                    <option>--Pilih Golongan--</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                    <option>IV</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tunjangan</label>
                  <input type="text" name="tunjangan" placeholder="Masukkan Tunjangan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Gaji Pokok</label>
                  <input type="text" name="gajiPokok" placeholder="Masukkan Gaji Pokok" class="form-control">
                </div>
 
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="<?php echo base_url() ?>index.php/gaji/load_gaji" class="btn btn-md btn-info">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>