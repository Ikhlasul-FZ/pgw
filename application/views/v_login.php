<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-20">
          <div class="card">
            <div class="card-header bg-info">
            <h2 class="text-center">LOGIN</h2><br>
        <?php if (validation_errors())
        {?>
        <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
        </div>
        <?php
        } ?>
        <?php echo $this->session->flashdata('pemberitahuan'); ?>
        <form method="post" action="<?php echo base_url()?>login">
        <div class="card-body">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
        </div>
        <br>
        <div class="form-group">
            <input type="submit"  class="btn btn-primary"   name="tombol_login" value="Login">
        </div>
    </div>
        </form>
    </div>
</body>
</html>