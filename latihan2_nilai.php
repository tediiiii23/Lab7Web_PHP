<?php
require __DIR__ . '/includes/layout.php';
$nama = 'Siti';
$tugas = 85;
$uts = 78;
$uas = 90;
$error = '';

// Input GET opsional agar beberapa kombinasi nilai bisa diuji.
if (isset($_GET['hitung'])) {
    $calon = [];
    foreach (['tugas', 'uts', 'uas'] as $kunci) {
        $nilai = $_GET[$kunci] ?? '';
        if (!is_scalar($nilai) || filter_var($nilai, FILTER_VALIDATE_FLOAT) === false || (float)$nilai < 0 || (float)$nilai > 100) {
            $error = 'Nilai tugas, UTS, dan UAS harus berupa angka 0–100.';
            break;
        }
        $calon[$kunci] = (float)$nilai;
    }
    if ($error === '') {
        $tugas = $calon['tugas'];
        $uts = $calon['uts'];
        $uas = $calon['uas'];
    }
}
$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
if ($nilaiAkhir >= 85) {
    $predikat = 'A';
} elseif ($nilaiAkhir >= 75) {
    $predikat = 'B';
} elseif ($nilaiAkhir >= 60) {
    $predikat = 'C';
} else {
    $predikat = 'D';
}
tampilAwal('Variabel, Operator, dan Percabangan', 'E · Latihan 2');
?>
<p class="note">Bobot nilai: Tugas 30%, UTS 30%, UAS 40%. Nama contoh dari modul: Siti.</p>
<form method="GET">
    <div class="form-grid">
        <div><label for="tugas">Nilai Tugas</label><input type="number" id="tugas" name="tugas" min="0" max="100" step="0.01" value="<?= h($tugas) ?>" required></div>
        <div><label for="uts">Nilai UTS</label><input type="number" id="uts" name="uts" min="0" max="100" step="0.01" value="<?= h($uts) ?>" required></div>
        <div><label for="uas">Nilai UAS</label><input type="number" id="uas" name="uas" min="0" max="100" step="0.01" value="<?= h($uas) ?>" required></div>
    </div>
    <div class="actions"><button type="submit" name="hitung" value="1">Hitung Nilai</button></div>
</form>
<?php if ($error !== ''): ?>
    <div class="error"><?= h($error) ?></div>
<?php else: ?>
    <div class="result">
        <p>Nama: <?= h($nama) ?></p>
        <p>Nilai akhir: <?= number_format($nilaiAkhir, 2) ?></p>
        <p>Predikat: <strong><?= h($predikat) ?></strong></p>
    </div>
<?php endif; ?>
<?php tampilAkhir(); ?>
