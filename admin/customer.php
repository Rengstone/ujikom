<?php
include '../functions/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Customer</title>

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
    
    <h2>Data Customer</h3>

    <a href="form-add-customer.php"> TAMBAH DATA</a>

    <div class="box">
        <table border="1px">
            <thead>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>fax</th>
                <th>email</th>
                <th>aksi</th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($conn, "select * from tb_customer");
                    while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $data['id']; ?></th>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['fax']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td>
                                <a onClick="return confirm('Yakin ingin dihapus ?')" href="delete-customer.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-danger" role="button">
                                    Hapus
                                </a>
                                <a href="form-edit-customer.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-warning" role="button">
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