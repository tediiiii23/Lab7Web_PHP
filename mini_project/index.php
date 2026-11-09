<?php
require __DIR__ . '/../includes/layout.php';
require __DIR__ . '/proses.php';
tampilAwal('Formulir Data Mahasiswa', 'F · Mini Project & G4–G5', '../');
?>
<p class="note">Isi seluruh data mahasiswa. Validasi dilakukan di server menggunakan PHP. NIM ditetapkan tepat 9 digit untuk eksperimen G4; semester harus angka 1–14.</p>
<form method="POST" action="">
    <label for="nama">Nama lengkap</label>
    <input id="nama" name="nama" type="text" value="<?= h($form['nama']) ?>" required placeholder="Contoh: Tedi Mulyadi">
    <div class="form-grid">
        <div>
            <label for="nim">NIM (9 digit)</label>
            <input id="nim" name="nim" type="text" inputmode="numeric" pattern="[0-9]{9}" minlength="9" maxlength="9" value="<?= h($form['nim']) ?>" required placeholder="Contoh: 312510163">
        </div>
        <div>
            <label for="semester">Semester (1–14)</label>
            <input id="semester" name="semester" type="number" min="1" max="14" step="1" value="<?= h($form['semester']) ?>" required>
        </div>
    </div>
    <label for="prodi">Program studi</label>
    <input id="prodi" name="prodi" type="text" value="<?= h($form['prodi']) ?>" required placeholder="Contoh: Teknik Informatika">
    <label for="email">Email</label>
    <input id="email" name="email" type="email" value="<?= h($form['email']) ?>" required placeholder="nama@example.com">
    <div class="actions">
        <button type="submit">Kirim Data</button>
        <button type="reset">Reset Form (Browser)</button>
        <a class="button muted" href="index.php">Muat Ulang (Server)</a>
    </div>
</form>
<?php if ($error): ?>
    <div class="error" role="alert">
        <strong>Data belum valid:</strong>
        <ul><?php foreach ($error as $pesan): ?><li><?= h($pesan) ?></li><?php endforeach; ?></ul>
    </div>
<?php elseif ($data !== null): ?>
    <div class="result">
        <h2>Ringkasan Data Mahasiswa</h2>
        <table class="table">
            <tbody>
                <tr><th>Nama</th><td><?= h($data['nama']) ?></td></tr>
                <tr><th>NIM</th><td><?= h($data['nim']) ?></td></tr>
                <tr><th>Program Studi</th><td><?= h($data['prodi']) ?></td></tr>
                <tr><th>Semester</th><td><?= h($data['semester']) ?></td></tr>
                <tr><th>Email</th><td><?= h($data['email']) ?></td></tr>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<h2>Penjelasan reset (G5)</h2>
<p><strong>Reset Form (Browser)</strong> mengembalikan nilai kolom ke nilai awal saat halaman dimuat tanpa mengirim data ke server. <strong>Muat Ulang (Server)</strong> membuka kembali halaman dengan permintaan GET baru, sehingga hasil dan pesan validasi dari POST sebelumnya hilang.</p>
<?php tampilAkhir('../'); ?>
