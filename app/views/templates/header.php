<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman <?php echo $data['judul']; ?></title>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href=<?php echo BASEURL; ?>/DPWlanjutan>DPW Lanjutan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href=<?php echo BASEURL; ?>/home>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?php echo BASEURL; ?>/mahasiswa>Mahasiswa</a>
      <li class="nav-item">
        <a class="nav-link" href=<?php echo BASEURL; ?>/about>About</a>
</div>
  </div>
</nav>