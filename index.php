<?php
// require 'functions/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        .mt {
            margin-top: 20px;
        }
        
        a {
            margin-top: 15px;
            background-color: #000;
            padding: 5px 5px;
            padding-left: 10px;
            padding-right: 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    
   <center>
        <h3>Koperasi Pegawai RSUD BINTARO</h3>
        <img src="oke.png"style="width:500px;height:400px;">
        <h2>Login</h2>

        <form action="admin/index.php" method="post">
            <input type="text" name="" placeholder="masukan username">
            
            <input type="text" name="" placeholder="masukan password">
        </form>

        <div class="mt">
            <a href="admin/index.php" name="submit" type=" button">Login</a>
        </div>
   </center>
</body>
</html>