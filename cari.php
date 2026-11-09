<?php
require __DIR__ . '/includes/layout.php';
$kata = '';
$dicari = isset($_GET['kata']);
if ($dicari) {
    $kata = is_string($_GET['kata']) ? trim($_GET['kata']) : '';
}
tampilAwal('Memproses Form dengan GET', 'E · Latihan 5');
?>
<form method="GET" action="">
    <label for="kata">Kata kunci</label>
    <input id="kata" name="kata" type="text" value="<?= h($kata) ?>" placeholder="Contoh: PHP">
    <div class="actions"><button type="submit">Cari</button></div>
</form>
<?php if ($dicari): ?>
    <div class="result">Kata kunci: <strong><?= h($kata) ?></strong></div>
<?php endif; ?>
<p class="note">Setelah dikirim, amati parameter <code>?kata=...</code> pada URL. GET tidak boleh digunakan untuk kata sandi atau informasi sensitif.</p>
<?php tampilAkhir(); ?>
