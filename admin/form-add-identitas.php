<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Identitas</title>
</head>
<body>
    <center>
        <h2>Tambah Identitas</h2>
        <form method="post" action="add-identitas.php">
            <label>Nama : </label>
            <input type="text" name="nama" required><br><br>
            <label>Badan Hukum : </label>
            <input type="text" name="badan_hukum" required><br><br>
            <label>NPWP : </label>
            <input type="text" name="npwp" required><br><br>
            <label>email : </label>
            <input type="text" name="email" required><br><br>
            <label>Telepon : </label>
            <input type="text" name="telp" required><br><br>
            <label>Alamat : </label>
            <input type="text" name="alamat" required><br><br>
            <input type="submit" value="Tambah">
        </form>
    </center>
</body>
</html>