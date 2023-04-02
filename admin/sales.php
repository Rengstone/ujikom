<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Sales</title>

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
    
    <h2>SALES</h3>
    
    <a href="">TAMBAH DATA</a>
    <div class="box">
        <table border="1px">
            <thead>
                <th>NO</th>
                <th>Tgl Sales</th>
                <th>Id Customer</th>
                <th>Number</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <td>1</td>
                <td>2022-09-06</td>
                <td>1</td>
                <td>88222</td>
                <td>Aktiv</td>
                <td>
                    <a href="">Edit</a>
                    <a href="" onclick="MyFunction('Yakin Anda Hapus?')">Hapus</a>
                </td>
            </tbody>
        </table>
    </div>
</body>
</html>