<?php
    include '../functions/functions.php';

    $id = $_POST['id'];
    $nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$telepon = $_POST["telepon"];
	$fax = $_POST["fax"];
	$email = $_POST["email"];

    $sql = mysqli_query($conn, "update tb_customer set nama = '$nama', alamat = '$alamat', telp = '$telepon', fax = '$fax', email = '$email' where id = '$id'");
    echo 'Data Berhasil Diubah';
    header("refresh:2;url=customer.php");
?>