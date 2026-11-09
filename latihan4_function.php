<?php
require __DIR__ . '/includes/layout.php';
function hitungDiskon(float $harga, float $persen): float
{
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}
// Function tambahan sesuai permintaan Latihan 4.
function hitungLuasPersegiPanjang(float $panjang, float $lebar): float
{
    return $panjang * $lebar;
}
$hargaAkhir = hitungDiskon(150000, 10);
$luas = hitungLuasPersegiPanjang(8, 4);
tampilAwal('Membuat Function', 'E · Latihan 4');
?>
<div class="result">
    <p>Harga awal: Rp<?= number_format(150000, 0, ',', '.') ?></p>
    <p>Diskon: 10%</p>
    <p>Harga setelah diskon: <strong>Rp<?= number_format($hargaAkhir, 0, ',', '.') ?></strong></p>
    <p>Luas persegi panjang (8 × 4): <strong><?= h($luas) ?></strong></p>
</div>
<p class="note">Function pertama menghitung harga setelah diskon. Function tambahan menghitung luas persegi panjang.</p>
<?php tampilAkhir(); ?>
