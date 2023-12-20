<h2 class="judul">Data Siswa</h2>

<a href="?hal=siswa_tambah" class="tombol">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($con, "SELECT * FROM siswa LEFT JOIN kelas ON siswa.id_kelas=kelas.id_kelas ORDER BY siswa.id_siswa DESC");
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><img src="images/<?php echo $data['foto']; ?>" width="100"></td>
            <td><?php echo $data['nama_siswa']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['nama_kelas']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td>
                <a class="tombol_edit" href="?hal=siswa_edit&id=<?php echo $data['id_siswa']; ?>">Edit</a>
                <a class="tombol_hapus"
                    href="?hal=siswa_hapus&id=<?php echo $data['id_siswa']; ?>&foto=<?php echo $data['foto']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>