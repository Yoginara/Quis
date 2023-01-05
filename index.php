<?php
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
</head>
<body>
      <div class="container-md">
            <div class="text-center my-5">
              <img src="logo.png" alt="logo" width="200" />
            </div>
            <h1 class="text-center mb-5">Daftar Pegawai </h1>
                <table class="table table-bordered">
                    <tr style="text-align: center;">
                        <th>No</th>
                        <th>Nomor Identitas</th>
                        <th>Nama Pegawai</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat dan Tanggal lahir</th>
                        <th>Jabatan</th>
                    </tr>
                    <?php $i = 1;?>
                <?php foreach($pegawai as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["Nomor_Identitas"]; ?></td>
                        <td><?= $row["Nama"]; ?></td>
                        <td><?= $row["Jenis_Kelamin"]; ?></td>
                        <td><?= $row["Tempat_dan_Tanggal_Lahir"]; ?></td>
                        <td><?= $row["Jabatan"]; ?></td>
                        
                        <td>
                            <a href="edit.php">Edit</a> | 
                            <a href="hapus.php?id=<?= $row["id"]; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
                <br>
                    <a href="tambah.php" class="btn btn-primary ms-auto"> Tambahkan Diri Anda</a>
    </div>
</body>
</html>