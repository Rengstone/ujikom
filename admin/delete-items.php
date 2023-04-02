<?php
    include '../functions/functions.php';

    $id = $_GET['id'];

    $sql = mysqli_query($conn, "delete from tb_item where id_item = '$id'");
    echo 'Data Berhasil Dihapus';
    header("refresh:2;url=item.php");
?>