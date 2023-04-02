<?php
    include '../functions/functions.php';

    $nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$telepon = $_POST["telepon"];
	$fax = $_POST["fax"];
	$email = $_POST["email"];

    $sql = mysqli_query($conn, "insert into tb_customer values(null, '$nama','$alamat','$telepon','$fax', '$email')");
    echo 'Data Berhasil Dimasukkan';
    header("refresh:2;url=customer.php");
?>