<?php
require __DIR__ . '/includes/layout.php';
// Empat nama dari modul ditambah tiga nama untuk memenuhi instruksi latihan.
$mahasiswa = ['Alya', 'Bima', 'Citra', 'Doni', 'Eka', 'Fajar', 'Gita'];
tampilAwal('Perulangan dan Array', 'E · Latihan 3');
?>
<h2>Daftar Mahasiswa</h2>
<ol>
<?php foreach ($mahasiswa as $nama): ?>
    <li><?= h($nama) ?></li>
<?php endforeach; ?>
</ol>
<p class="note">Total <?= count($mahasiswa) ?> mahasiswa, ditampilkan dengan <code>foreach</code>.</p>
<?php tampilAkhir(); ?>
