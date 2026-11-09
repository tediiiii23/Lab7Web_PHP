<?php
require __DIR__ . '/../includes/layout.php';
// G3 · Function untuk format Rupiah.
function formatRupiah(float $harga): string
{
    return 'Rp' . number_format($harga, 2, ',', '.');
}
$tampilan = [150000, 135000, 12750.50];
tampilAwal('Function Format Harga Menjadi Rupiah', 'G · Eksperimen Mandiri 3', '../');
?>
<table class="table">
    <thead><tr><th>Harga Asli</th><th>Setelah Function formatRupiah()</th></tr></thead>
    <tbody>
    <?php foreach ($tampilan as $harga): ?>
        <tr><td><?= h($harga) ?></td><td><?= h(formatRupiah((float)$harga)) ?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php tampilAkhir('../'); ?>
