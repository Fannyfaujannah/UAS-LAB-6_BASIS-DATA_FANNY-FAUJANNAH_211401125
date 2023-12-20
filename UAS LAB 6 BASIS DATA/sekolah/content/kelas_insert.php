<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "INSERT INTO kelas SET id_kelas='$_POST[id_kelas]', nama_kelas = '$_POST[nama]' ");

if ($query) {
    echo 'Data berhasil di simpan';
    echo "<meta http-equiv='refresh' content='1;url=?hal=kelas'>";
} else {
    echo 'Tidak dapat menyimpan data';
    echo mysqli_error($con);
}
?>