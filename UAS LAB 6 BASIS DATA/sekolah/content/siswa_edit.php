<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "SELECT * FROM siswa WHERE id_siswa = '$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Tambah Siswa</h2>
<form method="post" action="?hal=siswa_update" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id_siswa']; ?>">
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto">
        <img src="images/<?php echo $data['foto']; ?>" width="150">
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input"><input type="text" name="nama" id="nama" value="<?php echo $data['nama_siswa']; ?>"></div>
    </div>

    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <?php
        if ($data['jenis_kelamin'] == "L") {
            $l = " checked";
            $p = "";
        } else {
            $l = "";
            $p = " checked";
        }
        ?>
        <input type="radio" id="jk" name="jk" value="L" <?php echo $l; ?>> Laki-laki
        <input type="radio" id="jk" name="jk" value="P" <?php echo $p; ?>> Perempuan
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input"><input type="date" name="tanggal" id="tanggal" value="<?php echo $data['tgl_lahir']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="kelas">Kelas</label>
        <div class="input">
            <select id="kelas" name="kelas">
                <option>--Pilih kelas</option>
                <?php
                $querykelas = mysqli_query($con, "SELECT * FROM kelas");
                while ($j = mysqli_fetch_array($querykelas)) {
                    echo "<option value='$j[id_kelas]'";
                    if ($j['id_kelas'] == $data['id_kelas'])
                        echo " selected";
                    echo ">$j[nama_kelas]</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea style="width: 100%;" rows="5" id="keterangan"
                name="keterangan"><?php echo $data['keterangan']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol_simpan">
        <input type="reset" value="Batal" class="tombol_reset">
    </div>
</form>