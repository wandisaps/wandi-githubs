<?php
include "koneksi.php";

$id = $_GET['id'];

if (!empty($id)) {
    mysqli_query($con,"DELETE FROM `31_1tid_covid` WHERE id_2055301144 = '$id' ");
    header('location:datacovid.php');
}
?>