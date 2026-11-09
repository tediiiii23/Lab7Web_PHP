<?php
require __DIR__ . '/../includes/layout.php';
// G2 · Pengembangan dari Latihan 5: mencari nama mahasiswa dalam array.
$mahasiswa = ['Alya', 'Bima', 'Citra', 'Doni', 'Eka', 'Fajar', 'Gita'];
$kata = is_string($_GET['kata'] ?? null) ? trim($_GET['kata']) : '';
$dicari = isset($_GET['kata']);
$hasil = [];
if ($dicari && $kata !== '') {
    foreach ($mahasiswa as $nama) {
        if (stripos($nama, $kata) !== false) {
            $hasil[] = $nama;
        }
    }
}
tampilAwal('Pencarian Nama Mahasiswa (GET)', 'G · Eksperimen Mandiri 2', '../');
?>
<form method="GET">
    <label for="kata">Cari nama mahasiswa</label>
    <input id="kata" name="kata" type="text" value="<?= h($kata) ?>" placeholder="Contoh: Bima">
    <div class="actions"><button type="submit">Cari</button></div>
</form>
<?php if ($dicari): ?>
    <div class="result">
        <?php if ($kata === ''): ?>
            <p>Masukkan nama yang ingin dicari.</p>
        <?php elseif (!$hasil): ?>
            <p>Nama <strong><?= h($kata) ?></strong> tidak ditemukan.</p>
        <?php else: ?>
            <p>Ditemukan <?= count($hasil) ?> hasil untuk <strong><?= h($kata) ?></strong>:</p>
            <ul><?php foreach ($hasil as $nama): ?><li><?= h($nama) ?></li><?php endforeach; ?></ul>
        <?php endif; ?>
    </div>
<?php endif; ?>
<p class="note">Pencarian tanpa membedakan huruf besar dan kecil menggunakan <code>stripos()</code>, lalu menampilkan hasil secara aman.</p>
<?php tampilAkhir('../'); ?>
