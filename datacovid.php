<?php include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class ="text-center">Tabel Covid</h1>

<div class ="row text-center">
<a href ="insertform.php">Tambah Pasien</a>
</div>
<div class = "row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Pasien</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Alamat Pasien</th>
      <th scope="col">Riwayat Perjalanan Pasien</th>
      <th scope="col">Hasil Swab</th>
      <th scope="col">Tanggal Swab</th>
      <th scope="col">Suhu</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=0;
  $query = mysqli_query($con,"SELECT * FROM 31_1tid_covid");
  while($m = mysqli_fetch_array($query)){
    $i++;
    ?>

    <tr>
    <td><?= $i ?></td>
    <td><?= $m['id_2055301144'] ?></td>
    <td><?= $m['nama_pasien_2055301144'] ?></td>
    <td><?= $m['alamat_2055301144'] ?></td>
    <td><?= $m['riwayat_perjalanan_2055301144'] ?></td>
    <td><?= $m['hasil_swab_2055301144'] ?></td>
    <td><?= $m['tanggal_swab'] ?></td>
    <td><?= $m['suhu_2055301144'] ?></td>
    <td>
    <a href="updatepasien.php?id=<?=$m['id_2055301144']?>">Edit</a>
    <a href="deletedb.php?id=<?=$m['id_2055301144']?>">Hapus</a>
    </td>
    </tr>
    <?php
  }

  ?>
   
  </tbody>
</table>
</div>
</body>
</html>