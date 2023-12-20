<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "SELECT * FROM kelas WHERE id_kelas='$_GET[id]' ");
$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Kelas</h2>
<form action="?hal=kelas_update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id_kelas']; ?>">
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?php echo $data['nama_kelas']; ?>">
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol_simpan">
        <input type="reset" value="Batal" class="tombol_reset">
    </div>
</form>