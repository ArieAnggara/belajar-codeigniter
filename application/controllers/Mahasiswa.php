<?php
class Mahasiswa extends CI_Controller
{
	public function index()
	{
		$data['mahasiswa'] = $this->ModelMahasiswa->tampilData()->result();
		$this->load->view('data-mahasiswa', $data);
	}
	
	function tambah()
	{
		$this->load->view('input-mahasiswa');
	}
	
	function tambah_aksi()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'alamat' => $alamat,
			'telepon' => $telepon,
		);
		$this->ModelMahasiswa->simpanMahasiswa($data);
		redirect('mahasiswa/index');
	}
	
	function edit($id)
	{
		$where = array('nim' => $id);
		$data['mahasiswa'] = $this->ModelMahasiswa->editData($where, 'mahasiswa')->result();
		$this->load->view('edit-mahasiswa', $data);
	}
	
	function update()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'alamat' => $alamat,
			'telepon' => $telepon,
		);
		
		$where = array(
			'nim' => $nim
			);
			
		$this->ModelMahasiswa->updateMahasiswa($where, $data, 'mahasiswa');
		redirect('mahasiswa/index');
	}
	
	function hapus($id)
	{
		$where = array('nim'=> $id);
		$this->ModelMahasiswa->hapusMahasiswa($where, 'Mahasiswa');
		redirect('mahasiswa/index');
	}
}