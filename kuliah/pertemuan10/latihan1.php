<?php
// koneksi ke DB & polih Database
$conn = mysqli_connect('http://localhost:5121', 'root', '*#Syarif01', 'pw_2020');

// Query isi tabel mahasiswa
$resault = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data kedalam array
$rows =[];
while ($row = mysqli_fetch_assoc($resault)){
    $rows[] = $row;
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
</head>

<body>
<h3>Daftar Mahasiswa</h3>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>gambar</th>
        <th>nrp</th>
        <th>nama</th>
        <th>email</th>
        <th>jurusan</th>
        <th>Aksi</th>
    </tr>
    
    <?php foreach ($mahasiswa as $m) : ?>
    <tr>
        <td>1</td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
            <a href="">ubah</a> | <a href="">hapus</a>
            
        </td>
    </tr>
    <?php endforech; ?>
    
    
</table>
</body>

</html>