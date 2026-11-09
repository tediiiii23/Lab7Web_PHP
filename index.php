<?php
require __DIR__ . '/includes/layout.php';
date_default_timezone_set('Asia/Jakarta');
tampilAwal('Belajar PHP', 'E · Latihan 1 — Menjalankan PHP');
?>
<?php
// Materi Latihan 1: PHP harus dieksekusi oleh web server.
echo '<div class="result"><p>PHP berhasil dijalankan.</p>';
echo '<p>Waktu server: ' . date('d-m-Y H:i:s') . '</p></div>';
?>
<p class="note">Jika muncul pesan di atas dan waktu server, PHP berhasil diproses oleh Apache. Kode PHP mentah tidak ditampilkan di browser.</p>
<h2>Daftar latihan dan tugas</h2>
<nav class="menu" aria-label="Navigasi praktikum">
    <a href="index.php">E1 — Menjalankan PHP</a>
    <a href="latihan2_nilai.php">E2 — Variabel, operator, percabangan</a>
    <a href="latihan3_array.php">E3 — Perulangan dan array</a>
    <a href="latihan4_function.php">E4 — Function</a>
    <a href="cari.php">E5 — Form GET</a>
    <a href="latihan6_post.php">E6 — Form POST</a>
    <a href="latihan7_transaksi.php">E7 — Pengolahan transaksi</a>
    <a href="mini_project/index.php">F — Formulir Data Mahasiswa</a>
    <a href="eksperimen/rata_rata.php">G1 — Nilai rata-rata</a>
    <a href="eksperimen/get_cari_nama.php">G2 — Cari nama dari array</a>
    <a href="eksperimen/format_rupiah.php">G3 — Format harga Rupiah</a>
    <a href="mini_project/index.php">G4/G5 — Validasi NIM &amp; reset</a>
</nav>
<?php tampilAkhir(); ?>
