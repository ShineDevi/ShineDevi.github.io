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
        //mysqli_connect("localhost", "root","");
        $hostname="localhost";
        $username="root";
        $password="";
        $connect=mysqli_connect($hostname, $username, $password);
        if($connect){
            echo "Koneksi ke MySQL berhasil";
        } else{
            echo "Koneksi ke MySQL gagal".mysqli_connect_error();
        }
    ?>
</body>
</html>