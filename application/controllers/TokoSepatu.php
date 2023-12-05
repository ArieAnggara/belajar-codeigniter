<?php

class TokoSepatu extends CI_Controller {
    public function index() {
        // Menampilkan form input transaksi
        $this->load->view('form_transaksi');
    }

    public function hasil() {
        // Memproses inputan form
        $data['nama'] = $this->input->post('nama');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['merk_sepatu'] = $this->input->post('merk_sepatu');
        $data['ukuran'] = $this->input->post('ukuran');
        $data['jumlah_beli'] = $this->input->post('jumlah_beli');

        // Harga sepatu berdasarkan merk
        $harga = [
            'Nike' => 375000,
            'Adidas' => 300000,
            'Kickers' => 250000,
            'Eiger' => 275000,
            'Bucherri' => 400000
        ];

        // Hitung total harga
        $data['total_harga'] = $harga[$data['merk_sepatu']] * $data['jumlah_beli'];

        // Tampilkan hasil proses transaksi
        $this->load->view('hasil_transaksi', $data);
    }
}
