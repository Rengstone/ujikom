<?php
include '../functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Item</title>

    <style>
         a{
            display: flex;
            justify-content: center;
        }
        
        h2 {
            display: flex;
            justify-content: center;
        }
        .box {
            display: flex;
            justify-content: center;
            box-shadow: 0 1px 2px 0px;
        }
        thead th, 
        tbody td{
            padding: 10px;
        }
    </style>
</head>
<body>
    
    <h2>Data Item</h3>

    <a href="form-add-items.php">TAMBAH DATA</a>

    <div class="box">
        <table border="1px">
            <thead>
                <th>NO</th>
                <th>Nama Item</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($conn, "select * from tb_item");
                    while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $data['id_item']; ?></th>
                            <td><?php echo $data['nama_item']; ?></td>
                            <td><?php echo $data['harga_beli']; ?></td>
                            <td><?php echo $data['harga_jual']; ?></td>
                            <td>
                                <a onClick="return confirm('Yakin ingin dihapus ?')" href="delete-items.php?id=<?php echo $data['id_item']; ?>" class="btn btn-outline-danger" role="button">
                                    Hapus
                                </a>
                                <a href="form-edit-items.php?id=<?php echo $data['id_item']; ?>" class="btn btn-outline-warning" role="button">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>