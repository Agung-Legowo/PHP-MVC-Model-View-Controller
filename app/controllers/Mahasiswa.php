<?php 

class Mahasiswa  extends Controller {
	public function index()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getALLMahasiswa();
		$this->view('templates/header', $data);
		$this->view('Mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header', $data);
		$this->view('Mahasiswa/detail', $data);
		$this->view('templates/footer');
	}
}
