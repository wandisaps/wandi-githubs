<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$riwayat = $_POST['riwayat'];
$hasil = $_POST['hasil'];
$tanggal = $_POST['tanggal'];
$suhu = $_POST['suhu'];

if(!empty($nama) && !empty($alamat) &&!empty($riwayat) && !empty($hasil)&& !empty($tanggal)&& !empty($suhu)) {
    mysqli_query($con,"UPDATE `31_1tid_covid` SET `nama_pasien_2055301144`='$nama',`alamat_2055301144`='$alamat',
    `riwayat_perjalanan_2055301144`='$riwayat',`hasil_swab_2055301144`='$hasil',`tanggal_swab`='$tanggal',`suhu_2055301144`='$suhu' WHERE id_2055301144 = '$id'");

    header('location:datacovid.php');

}else{
    echo "update gagal";
}