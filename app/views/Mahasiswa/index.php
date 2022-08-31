<div class="container mt-3">

	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="formModal">
			Tambah Data Mahasiswa
			</button>
			<br></br>
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
			<?php foreach( $data['mhs'] as $mhs ) : ?>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			  	<?= $mhs['nama']; ?>
			  	<a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bandge-primary">detail</a>	
			  </li>
			<?php endforeach; ?>
				 </ul>
			
		</div>
	</div>



</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
				<form action="<?= BASEURL; ?>/mahasiswa/tambah"method="post">
				<div class="mb-3">
				<div class="mb-3">
		<label for="nama" class="form-label">nama</label>
		<input type="text" class="form-control" id="nama" name="nama">

		<label for="npm" class="form-label">npm</label>
		<input type="number" class="form-control" id="npm" name="npm">

		<label for="email" class="form-label">Email</label>
		<input type="email" class="form-control" id="email" name="email">

		<select class="form-select" aria-label="Default select example">
			<option selected>jurusan</option>
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Ilmu Hukum">Ilmu Hukum</option>
			<option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
			<option value="Ilmu Komputer">Ilmu Komputer</option>
			</select>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Tambah Data</button>
		</form>
      </div>
    </div>
  </div>
</div>