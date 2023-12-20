<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "UPDATE kelas SET nama_kelas='$_POST[nama]' WHERE id_kelas='$_POST[id]' ");
if ($query) {
    echo "data berhasil disimpan";
    echo "<meta http-equiv='refresh' content='1;url=?hal=kelas'>";
} else {
    echo 'Tidak dapat menyimpan data <br/>';
    echo mysqli_error($con);
}
?>