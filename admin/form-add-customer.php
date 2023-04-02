<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
</head>
<body>
    <center>
        <h2>Tambah Customer</h2>
        <form method="post" action="add-customer.php">
            <label>Nama : </label>
            <input type="text" name="nama" required><br><br>
            <label>alamat : </label>
            <input type="text" name="alamat" required><br><br>
            <label>Telepon : </label>
            <input type="text" name="telepon" required><br><br>
            <label>FAX : </label>
            <input type="text" name="fax" required><br><br>
            <label>email : </label>
            <input type="text" name="email" required><br><br>
            <input type="submit" value="Tambah">
        </form>
    </center>
</body>
</html>