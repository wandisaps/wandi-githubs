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
    <div class ="container">
    <h1 class ="text-center">Tambah Pasien</h1>
    <hr>
    <form action ="insertdb.php"method ="POST">

    <input type="text"name="nama"class="form-control" placeholder="Nama Pasien">
    <br>
    <input type="text"name="alamat"class="form-control" placeholder="Alamat Pasien">
    <br>
    <input type="text"name="riwayat"class="form-control" placeholder="Riwayat Perjalanan Pasien">
    <br>
    <input type="text"name="hasil"class="form-control" placeholder="Hasil Swab">
    <br>
    <input type="date"name="tanggal"class="form-control" placeholder="Tanggal Swab">
    <br>
    <input type="text"name="suhu"class="form-control" placeholder="Suhu">
    <br>
    <input type="submit"name="submit" value="Tambah" class= "btn btn-info">
    </hr>
    </form>
    
    </div>
    
</body>
</html>