<?php
    include '../functions/functions.php';

    $nama = $_POST["nama"];
	$badan_hukum = $_POST["badan_hukum"];
	$npwp = $_POST["npwp"];
	$email = $_POST["email"];
	$telp = $_POST["telp"];
	$alamat = $_POST["alamat"];

    $sql = mysqli_query($conn, "insert into tb_identitas values(null, '$nama','$badan_hukum','$npwp','$email', '$telp','$alamat')");
    echo 'Data Berhasil Dimasukkan';
    header("refresh:2;url=identitas.php");
?>