<?php
    include '../functions/functions.php';

    $id = $_POST['id'];
    $nama = $_POST["nama"];
	$badan_hukum = $_POST["badan_hukum"];
	$npwp = $_POST["npwp"];
	$email = $_POST["email"];
	$telp = $_POST["telp"];
	$alamat = $_POST["alamat"];

    $sql = mysqli_query($conn, "update tb_identitas set nama_identitas = '$nama', badan_hukum = '$badan_hukum', npwp = '$npwp', email = '$email', telp = '$telp', alamat = '$alamat' where id_identitas = '$id'");
    echo 'Data Berhasil Diubah';
    header("refresh:2;url=identitas.php");
?>