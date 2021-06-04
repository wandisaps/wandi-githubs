<?php
include "koneksi.php";


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$riwayat = $_POST['riwayat'];
$hasil = $_POST['hasil'];
$tanggal = $_POST['tanggal'];
$suhu = $_POST['suhu'];

if(!empty($nama) && !empty($alamat) &&!empty($riwayat) && !empty($hasil)&& !empty($tanggal)&& !empty($suhu)){
    mysqli_query($con,"INSERT INTO `31_1tid_covid`(`nama_pasien_2055301144`, `alamat_2055301144`, `riwayat_perjalanan_2055301144`, `hasil_swab_2055301144`, `tanggal_swab`, `suhu_2055301144`) 
    VALUES ('$nama','$alamat','$riwayat','$hasil','$tanggal','$suhu')");
    header('location:datacovid.php');
}else{
    echo "Input Gagal";
}

?>