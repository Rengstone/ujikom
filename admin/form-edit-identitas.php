<?php
include '../functions/functions.php';

$id     = $_GET['id'];
$sql    = mysqli_query($conn, "select * from tb_identitas where id_identitas = '$id'");
$data   = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Identitas</title>
</head>
<body>
    <center>
        <h2>Edit Identitas</h2>
        <form method="post" action="edit-identitas.php">
            <label>ID Identitas : </label>
            <input type="text" name="id" value="<?php echo $id ?>" readonly><br><br>
            <label>Nama : </label>
            <input type="text" name="nama" value="<?php echo $data['nama_identitas']; ?>"><br><br>
            <label>Badan Hukum : </label>
            <input type="text" name="badan_hukum" value="<?php echo $data['badan_hukum']; ?>"><br><br>
            <label>NPWP : </label>
            <input type="text" name="npwp" value="<?php echo $data['npwp']; ?>"><br><br>
            <label>email : </label>
            <input type="text" name="email" value="<?php echo $data['email']; ?>"><br><br>
            <label>Telepon : </label>
            <input type="text" name="telp" value="<?php echo $data['telp']; ?>"><br><br>
            <label>Alamat : </label>
            <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br><br>
            <input type="submit" value="Edit">
        </form>
    </center>
</body>
</html>