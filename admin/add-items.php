<?php
    include '../functions/functions.php';

    $nama_item = $_POST["nama_item"];
	$harga_beli = $_POST["harga_beli"];
	$harga_jual = $_POST["harga_jual"];

    $sql = mysqli_query($conn, "insert into tb_item values(null, '$nama_item','$harga_beli','$harga_jual')");
    echo 'Data Berhasil Dimasukkan';
    header("refresh:2;url=item.php");
?>