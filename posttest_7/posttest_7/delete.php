<?php

    include 'config.php';
    echo $ID = $_GET['ID'];
    mysqli_query($koneksi, "DELETE FROM `toko_kue` WHERE id = $ID");

    header('location:read.php');
?>