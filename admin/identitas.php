<?php
include '../functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Identitas</title>

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
    
    <h2>Data Identitas</h3>

    <a href="form-add-identitas.php"> TAMBAH DATA</a>

    <div class="box">
        <table border="1px">
            <thead>
                <th>NO</th>
                <th>Nama</th>
                <th>Badan Hukum</th>
                <th>Npwp</th>
                <th>email</th>
                <th>telp</th>
                <th>alamat</th>
                <th>aksi</th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($conn, "select * from tb_identitas");
                    while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $data['id_identitas']; ?></th>
                            <td><?php echo $data['nama_identitas']; ?></td>
                            <td><?php echo $data['badan_hukum']; ?></td>
                            <td><?php echo $data['npwp']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td>
                                <a onClick="return confirm('Yakin ingin dihapus ?')" href="delete-identitas.php?id=<?php echo $data['id_identitas']; ?>" class="btn btn-outline-danger" role="button">
                                    Hapus
                                </a>
                                <a href="form-edit-identitas.php?id=<?php echo $data['id_identitas']; ?>" class="btn btn-outline-warning" role="button">
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