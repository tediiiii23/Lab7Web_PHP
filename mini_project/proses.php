<?php
// F · Pemrosesan data ditempatkan di file terpisah dari tampilan HTML.
// Juga memenuhi eksperimen G4: NIM hanya angka dan panjang tepat 9 digit.
$data = null;
$error = [];
$form = ['nama' => '', 'nim' => '', 'prodi' => '', 'semester' => '', 'email' => ''];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach (array_keys($form) as $field) {
        $form[$field] = is_string($_POST[$field] ?? null) ? trim($_POST[$field]) : '';
    }
    $nama = $form['nama'];
    $nim = $form['nim'];
    $prodi = $form['prodi'];
    $semesterInput = $form['semester'];
    $email = $form['email'];

    if ($nama === '') $error[] = 'Nama wajib diisi.';
    if ($nim === '') {
        $error[] = 'NIM wajib diisi.';
    } elseif (!preg_match('/^[0-9]{9}$/D', $nim)) {
        $error[] = 'NIM harus terdiri dari tepat 9 angka.';
    }
    if ($prodi === '') $error[] = 'Program studi wajib diisi.';
    if ($email === '') {
        $error[] = 'Email wajib diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Format email tidak valid.';
    }
    if (!ctype_digit($semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = 'Semester harus berupa angka 1–14.';
    }

    if (!$error) {
        $data = compact('nama', 'nim', 'prodi', 'email');
        $data['semester'] = (int)$semesterInput;
    }
}
