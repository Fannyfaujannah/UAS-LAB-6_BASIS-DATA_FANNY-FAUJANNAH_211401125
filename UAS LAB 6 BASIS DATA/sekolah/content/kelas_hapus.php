<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "DELETE FROM kelas WHERE id_kelas='$_GET[id]' ");
if ($query) {
    echo 'Data berhasil dihapus!';
    echo "<meta http-equiv='refresh' content='1;url=?hal=kelas'>";
} else {
    echo 'Tidak dapat menyimpan data!<br/>';
    echo mysqli_error($con);
}
?>