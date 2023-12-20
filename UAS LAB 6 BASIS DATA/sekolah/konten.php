<?php
if (!defined('INDEX')) die("");

$halaman = array(
    "dashboard", "siswa", "siswa_tambah", "siswa_insert", "siswa_edit", "siswa_update",
    "siswa_hapus", "kelas", "kelas_edit", "kelas_update", "kelas_hapus", "kelas_insert", "kelas_tambah"
);
if (isset($_GET['hal']))
    $hal = $_GET['hal'];
else
    $hal = "dashboard";

foreach ($halaman as $h) {
    if ($hal == $h) {
        include 'content/' . $h . '.php';
        break;
    }
}
?>