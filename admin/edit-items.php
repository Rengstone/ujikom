<?php
    include '../functions/functions.php';

    $id = $_POST['id'];
    $nama = $_POST["nama_item"];
	$harga_beli = $_POST["harga_beli"];
	$harga_jual = $_POST["harga_jual"];

    $sql = mysqli_query($conn, "update tb_item set nama_item = '$nama', harga_beli = '$harga_beli', harga_jual = '$harga_jual' where id_item = '$id'");
    echo 'Data Berhasil Diubah';
    header("refresh:2;url=item.php");
?>