<?php
    include '../functions/functions.php';

    $id = $_GET['id'];

    $sql = mysqli_query($conn, "delete from tb_identitas where id_identitas = '$id'");
    echo 'Data Berhasil Dihapus';
    header("refresh:2;url=identitas.php");
?>