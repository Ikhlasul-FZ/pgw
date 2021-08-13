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
              Edit Data Gaji
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/gaji/doo_update" method="POST">
                
                <div class="form-group">
                  <label>Kode Gaji</label>
                  <input type="text" name="kd_gaji" value="<?php echo $kd_gaji ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" value="<?php echo $nip ?>" class="form-control">
                </div>
                <div class="form-group">
                   <label>Tanggal Masuk</label>
                  <input type="date" name="tglMasuk" value="<?php echo $tglMasuk ?>" class="form-control">
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
                  <input type="text" name="tunjangan" value="<?php echo $tunjangan ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Gaji Pokok</label>
                  <input type="text" name="gajiPokok" value="<?php echo $gajiPokok ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="<?php echo base_url() ?>index.php/gaji/load_gaji" class="btn btn-md btn-info">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>