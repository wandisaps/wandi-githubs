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
<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM `31_1tid_covid` WHERE id_2055301144 = '$id' ");
$m = mysqli_fetch_object($query);
?>
    <div class ="container">
    <h1 class ="text-center">Update Data Pasien</h1>
    <hr>
    <form action ="updatedb.php"method ="POST">
    <input type="hidden" value="<?= $m->id_2055301144 ?>" name="id">

    <input type="text"name="nama"class="form-control" value="<?= $m->nama_pasien_2055301144?>" placeholder="Nama Pasien">
    <br>
    <input type="text"name="alamat"class="form-control" value="<?= $m->alamat_2055301144?>" placeholder="Alamat Pasien">
    <br>
    <input type="text"name="riwayat"class="form-control" value="<?= $m->riwayat_perjalanan_2055301144?>" placeholder="Riwayat Perjalanan Pasien">
    <br>
    <input type="text"name="hasil"class="form-control" value="<?= $m->hasil_swab_2055301144?>" placeholder="Hasil Swab">
    <br>
    <input type="date"name="tanggal"class="form-control" value="<?= $m->tanggal_swab?>" placeholder="Tanggal Swab">
    <br>
    <input type="text"name="suhu"class="form-control" value="<?= $m->suhu_2055301144?>" placeholder="Suhu">
    <br>
    <input type="submit"name="submit" value="Update" class= "btn btn-success">
    </hr>
    </form>
    
    </div>
    
</body>
</html>