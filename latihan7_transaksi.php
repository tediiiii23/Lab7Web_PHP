<?php
require __DIR__ . '/includes/layout.php';
$barang = '';
$hargaInput = '';
$jumlahInput = '';
$error = '';
$subtotal = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $barang = is_string($_POST['barang'] ?? null) ? trim($_POST['barang']) : '';
    $hargaInput = is_string($_POST['harga'] ?? null) ? trim($_POST['harga']) : '';
    $jumlahInput = is_string($_POST['jumlah'] ?? null) ? trim($_POST['jumlah']) : '';
    if ($barang === '' || !is_numeric($hargaInput) || !ctype_digit($jumlahInput)
        || (float)$hargaInput < 0 || (int)$jumlahInput < 1 || !is_finite((float)$hargaInput)) {
        $error = 'Periksa kembali nama barang, harga, dan jumlah.';
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
        if (!is_finite($subtotal)) {
            $error = 'Jumlah transaksi melebihi batas perhitungan.';
            $subtotal = null;
        }
    }
}
tampilAwal('Pengolahan Data Sederhana', 'E · Latihan 7');
?>
<form method="POST">
    <label for="barang">Nama barang</label>
    <input id="barang" name="barang" value="<?= h($barang) ?>" required>
    <div class="form-grid">
        <div><label for="harga">Harga (Rp)</label><input id="harga" name="harga" type="number" min="0" step="0.01" value="<?= h($hargaInput) ?>" required></div>
        <div><label for="jumlah">Jumlah</label><input id="jumlah" name="jumlah" type="number" min="1" step="1" value="<?= h($jumlahInput) ?>" required></div>
    </div>
    <div class="actions"><button type="submit">Hitung</button></div>
</form>
<?php if ($error !== ''): ?>
    <div class="error"><?= h($error) ?></div>
<?php elseif ($subtotal !== null): ?>
    <div class="result">
        <h2>Ringkasan transaksi</h2>
        <p>Barang: <?= h($barang) ?></p>
        <p>Harga satuan: Rp<?= number_format($harga, 2, ',', '.') ?></p>
        <p>Jumlah: <?= $jumlah ?></p>
        <p>Subtotal: <strong>Rp<?= number_format($subtotal, 2, ',', '.') ?></strong></p>
    </div>
<?php endif; ?>
<p class="note">Coba harga desimal, jumlah nol/negatif, dan input yang tidak sesuai. Validasi PHP tetap berjalan meskipun validasi HTML dilewati.</p>
<?php tampilAkhir(); ?>
