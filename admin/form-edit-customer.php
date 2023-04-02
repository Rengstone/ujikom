<?php
include '../functions/functions.php';

$id     = $_GET['id'];
$sql    = mysqli_query($conn, "select * from tb_customer where id = '$id'");
$data   = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDit Customer</title>
</head>
<body>
    <center>
        <h2>Edits Customer</h2>
        <form method="post" action="edit-customer.php">
            <label>ID : </label>
            <input type="text" name="id" value="<?php echo $id; ?>" readonly><br><br>
            <label>Nama : </label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br><br>
            <label>alamat : </label>
            <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br><br>
            <label>Telepon : </label>
            <input type="text" name="telepon" value="<?php echo $data['telp']; ?>"><br><br>
            <label>FAX : </label>
            <input type="text" name="fax" value="<?php echo $data['fax']; ?>"><br><br>
            <label>email : </label>
            <input type="text" name="email" value="<?php echo $data['email']; ?>"><br><br>
            <input type="submit" value="Edit">
        </form>
    </center>
</body>
</html>