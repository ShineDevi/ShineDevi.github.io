<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname="localhost";
        $username="root";
        $password="";
        $connect=mysqli_connect($hostname, $username, $password);

        if($connect){
            echo "Koneksi ke MySQL berhasil <br>";
        } else{
            echo "Koneksi ke MySQL gagal <br>".mysqli_connect_error();
        }

        $sql="CREATE DATABASE prakwebdb";
        if(mysqli_query($connect, $sql)){
            echo "Database berhasil dibuat";
        } else{
            echo "Database gagal dibuat <br>".mysqli_connect_error();
        }

        mysqli_close($connect);
    ?>
</body>
</html>