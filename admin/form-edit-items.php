<?php
include '../functions/functions.php';

$id     = $_GET['id'];
$sql    = mysqli_query($conn, "select * from tb_item where id_item = '$id'");
$data   = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Items</title>
</head>
<body>
    <center>
        <h2>Edit Items</h2>
        <form method="post" action="edit-items.php">
            <label>ID Item : </label>
            <input type="text" name="id" value="<?php echo $data['id_item']; ?>" readonly><br><br>
            <label>Nama Item : </label>
            <input type="text" name="nama_item" value="<?php echo $data['nama_item']; ?>"><br><br>
            <label>Harga Beli : </label>
            <input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>"><br><br>
            <label>Harga Jual : : </label>
            <input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"><br><br>
            <input type="submit" value="Edit">
        </form>
    </center>
</body>
</html>