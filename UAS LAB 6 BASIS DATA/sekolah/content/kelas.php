<?php
if (!defined('INDEX')) die("");
?>
<h2 class="judul">Data Kelas</h2>
<a href="?hal=kelas_tambah" class="tombol">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>ID kelas</th>
            <th>Nama kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($con, "SELECT * FROM kelas ORDER BY id_kelas ASC");
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id_kelas']; ?></td>
            <td><?php echo $data['nama_kelas']; ?></td>
            <td>
                <a class="tombol_edit" href="?hal=kelas_edit&id=<?php echo $data['id_kelas']; ?>">Edit</a>
                <a class="tombol_hapus" href="?hal=kelas_hapus&id=<?php echo $data['id_kelas']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>