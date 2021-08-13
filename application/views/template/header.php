<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <div class="container" class="center">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" disabled>MENU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/pegawai">Data Pegawai</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/gaji/load_gaji">Data Gaji</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/logout">Keluar</a>
      </li>
    </ul>
  </div>
</nav>
            <style>
              body {
                      background-image: url("https://www.kantorkita.co.id/blog/wp-content/uploads/2019/05/seminar-kompijuter-kancelarija-ofis-posao-0fde8585f16913c2711093751fcab719_600x400.jpg"); background-size:cover 
                    }
              </style>