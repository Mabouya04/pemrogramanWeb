<?php
    $warn_nama ="";
    $warn_nim ="";
    $warn_kelamin ="";

    $nama    = $_POST["nama"];
    $nim     = $_POST["nim"];
    $kelamin = $_POST["kelamin"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nama"])){
            $warn_nama = "Nama tidak boleh kosong";
        }else{
            $nama = inputan($_POST["nama"]);
        }
        if(empty($_POST["nim"])){
            $warn_nim = "NIM tidak boleh kosong";
        }else{
            $nim = inputan($_POST["nim"]);
        }
        if(empty($_POST["kelamin"])){
            $warn_kelamin = "Jenis kelamin tidak boleh kosong";
        }
    }

    function inputan($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        font {color: red;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">Nama : </label><input type="text" name="nama" class="form-control" value="<?= inputan($nama)?>"><font>*<span class="warning"><?php echo $warn_nama;?></span></font><br>
        <label for="nim">NIM : </label><input type="text" name="nim" class="form-control" value="<?= inputan($nim)?>"><font>*<span class="warning"><?php echo $warn_nim;?></span></font><br>
        
        <label for="kelamin">Jenis Kelamin : <br></label><input type="radio" name="kelamin" value="Laki-laki" <?php if(isset($_POST["kelamin"]) && $_POST["kelamin"] == "Laki-laki")echo "checked";?>> Laki - Laki<br>
        <input type="radio" name="kelamin" value="Perempuan" <?php if(isset($_POST["kelamin"]) && $_POST["kelamin"] == "Perempuan")echo "checked";?>> Perempuan<br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    echo "$nama<br>$nim<br>$kelamin"
?>