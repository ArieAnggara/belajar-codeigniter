<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Sepatu</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/tokosepatu.css">
</head>
<body>
    <div class="container">
        <h2>Form Pembelian Sepatu</h2>
        <form action="<?= base_url('tokosepatu/hasil'); ?>" method="post">
            <label for="nama">Nama Pembeli:</label><br>
            <input type="text" id="nama" name="nama"><br><br>

            <label for="no_hp">No. HP:</label><br>
            <input type="text" id="no_hp" name="no_hp"><br><br>

            <label for="merk_sepatu">Merk Sepatu:</label><br>
            <select id="merk_sepatu" name="merk_sepatu">
                <option value="Nike">Nike - Rp. 375,000</option>
                <option value="Adidas">Adidas - Rp. 300,000</option>
                <option value="Kickers">Kickers - Rp. 250,000</option>
                <option value="Eiger">Eiger - Rp. 275,000</option>
                <option value="Bucherri">Bucherri - Rp. 400,000</option>
            </select><br><br>

            <label for="ukuran">Ukuran Sepatu:</label><br>
            <select id="ukuran" name="ukuran">
                <?php for ($i = 32; $i <= 44; $i++) : ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                <?php endfor; ?>
            </select><br><br>

            <label for="jumlah_beli">Jumlah Beli:</label><br>
            <input type="text" id="jumlah_beli" name="jumlah_beli"><br><br>

            <input type="submit" value="Proses">
        </form>
    </div>
</body>
</html>
