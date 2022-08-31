<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<link href="<?= BASEURL; ?>/CSS/boostrap.CSS">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>">php mvc</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">mahasiswa</a>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
    
    </div>
  </div>
</div> 
</nav>