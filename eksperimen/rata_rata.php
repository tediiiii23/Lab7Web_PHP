<?php
require __DIR__ . '/../includes/layout.php';
// G1 · Rata-rata aritmetika tiga komponen nilai dari Latihan 2.
$tugas = 85;
$uts = 78;
$uas = 90;
$rataRata = ($tugas + $uts + $uas) / 3;
$nilaiBerbobot = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
tampilAwal('Menghitung Rata-rata Tiga Nilai', 'G · Eksperimen Mandiri 1', '../');
?>
<div class="result">
    <p>Nilai Tugas: <?= $tugas ?></p>
    <p>Nilai UTS: <?= $uts ?></p>
    <p>Nilai UAS: <?= $uas ?></p>
    <p>Rata-rata: <strong><?= number_format($rataRata, 2, ',', '.') ?></strong></p>
    <p>Nilai akhir berbobot (Latihan 2): <strong><?= number_format($nilaiBerbobot, 2, ',', '.') ?></strong></p>
</div>
<p class="note">Rata-rata biasa membagi jumlah tiga nilai dengan 3. Nilai akhir berbobot mengikuti ketentuan Tugas 30%, UTS 30%, dan UAS 40%, sehingga hasilnya bisa berbeda.</p>
<?php tampilAkhir('../'); ?>
