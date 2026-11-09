<?php
require __DIR__ . '/includes/layout.php';
$nama = '';
$prodi = '';
$error = '';
$berhasil = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = is_string($_POST['nama'] ?? null) ? trim($_POST['nama']) : '';
    $prodi = is_string($_POST['prodi'] ?? null) ? trim($_POST['prodi']) : '';
    if ($nama === '' || $prodi === '') {
        $error = 'Semua kolom wajib diisi.';
    } else {
        $berhasil = true;
    }
}
tampilAwal('Memproses Form dengan POST', 'E · Latihan 6');
?>
<form method="POST" action="">
    <label for="nama">Nama</label>
    <input id="nama" name="nama" type="text" value="<?= h($nama) ?>" required>
    <label for="prodi">Program Studi</label>
    <input id="prodi" name="prodi" type="text" value="<?= h($prodi) ?>" required>
    <div class="actions"><button type="submit" name="kirim" value="1">Kirim Data</button></div>
</form>
<?php if ($error !== ''): ?>
    <div class="error"><?= h($error) ?></div>
<?php elseif ($berhasil): ?>
    <div class="result">
        <h2>Data diterima</h2>
        <p>Nama: <?= h($nama) ?></p>
        <p>Program Studi: <?= h($prodi) ?></p>
    </div>
<?php endif; ?>
<p class="note">Uji pengiriman data biasa dan data berisi karakter <code>&lt;b&gt;</code>. Data ditampilkan aman sebagai teks menggunakan <code>htmlspecialchars()</code>.</p>
<?php tampilAkhir(); ?>
