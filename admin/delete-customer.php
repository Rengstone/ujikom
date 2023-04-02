<?php
    include '../functions/functions.php';

    $id = $_GET['id'];

    $sql = mysqli_query($conn, "delete from tb_customer where id = '$id'");
    echo 'Data Berhasil Dihapus';
    header("refresh:2;url=customer.php");
?>