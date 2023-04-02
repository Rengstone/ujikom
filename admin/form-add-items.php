<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Items</title>
</head>
<body>
    <center>
        <h2>Tambah Items</h2>
        <form method="post" action="add-items.php">
            <label>Nama Item : </label>
            <input type="text" name="nama_item" required><br><br>
            <label>Harga Beli : </label>
            <input type="text" name="harga_beli" required><br><br>
            <label>Harga Jual : : </label>
            <input type="text" name="harga_jual" required><br><br>
            <input type="submit" value="Tambah">
        </form>
    </center>
</body>
</html>