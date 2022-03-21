<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204</title>
</head>
<body>
    <form action="" method="POST">
    <Label for="nilai">Nilai : </Label><input type="text" name="nilai"><br>
    <button type="submit">Konversi</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST["nilai"])){

    $nilai = $_POST["nilai"];
    
    if($nilai<10){
        echo"Satuan";
    }elseif($nilai>10 && $nilai<20){
        echo"Belasan";
    }elseif($nilai>99&&$nilai<1000){
        echo"Ratusan";
    }elseif($nilai == 0){
        echo"Nol";
    }elseif($nilai >999){
        echo"Anda Menginput Melebihi Limit Bilangan";
    }elseif($nilai == 10  || $nilai>19 && $nilai<100){
        echo"Puluhan";
    }
}
?>