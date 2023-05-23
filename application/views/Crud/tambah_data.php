<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container">
      <h1>Halaman Kelola Gambar</h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container">
      <h2>Tambah Data Gambar</h2>
      <div class="row">
        <form action="<?=base_url()?>index.php/crudAdmin/insertdata" method="post" enctype="multipart/form-data">
          <label>Juduk Gambar</label><br>
          <input type="text" name="judul_gambar" value=""><br><br>
          <label>Gambar</label><br>
          <input type="file" name="fotopost"><br><br>
          <label>Deskripsi</label><br>
          <textarea name="deskripsi" rows="8" cols="80"></textarea><br><br>

          <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>