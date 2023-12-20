<?php
if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Siswa</h2>
<form action="?hal=siswa_insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" id="foto" name="foto">
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama">
        </div>
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <input type="radio" id="jk" name="jk" value="L">Laki-laki
        <input type="radio" id="jk" name="jk" value="P">Perempuan
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" id="tanggal" name="tanggal">
        </div>
    </div>

    <div class="form-group">
        <label for="kelas">Kelas</label>
        <div class="input">
            <select name="kelas" id="kelas">
                <option>-- Pilih kelas --</option>
                <?php
                $querykelas = mysqli_query($con, "SELECT * FROM kelas");
                while ($j = mysqli_fetch_array($querykelas)) {
                    echo "<option value='$j[id_kelas]'";
                    echo ">$j[nama_kelas]</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea style="width:100%;" name="keterangan" id="keterangan" rows="5"></textarea>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol_simpan">
        <input type="reset" value="Batal" class="tombol_reset">
    </div>
</form>