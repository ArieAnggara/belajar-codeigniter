<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelian Sepatu</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/tokosepatu.css">
</head>
<body>
    <div class="container">
        <h2>Struk Pembelian Sepatu</h2>
		<a href="<?= base_url('tokosepatu'); ?>" class="back-button">Kembali</a>
        <table>
            <tr>
                <td>Nama Pembeli:</td>
                <td><?= isset($nama) ? $nama : ''; ?></td>
            </tr>
            <tr>
                <td>No. HP:</td>
                <td><?= isset($no_hp) ? $no_hp : ''; ?></td>
            </tr>
            <tr>
                <td>Merk Sepatu:</td>
                <td><?= isset($merk_sepatu) ? $merk_sepatu : ''; ?></td>
            </tr>
            <tr>
                <td>Ukuran:</td>
                <td><?= isset($ukuran) ? $ukuran : ''; ?></td>
            </tr>
            <tr>
                <td>Jumlah Beli:</td>
                <td><?= isset($jumlah_beli) ? $jumlah_beli : ''; ?></td>
            </tr>
            <tr>
                <td>Total Harga:</td>
                <td>Rp <?= isset($total_harga) ? number_format($total_harga, 0, ',', '.') : ''; ?></td>
            </tr>
        </table>

    </div>
</body>
</html>
