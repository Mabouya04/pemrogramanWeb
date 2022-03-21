<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
</head>
<body>
    <form action="" method="POST">
        Nama 1 : <input type="text" name="name[]"><br>
        Nama 2 : <input type="text" name="name[]"><br>
        Nama 3 : <input type="text" name="name[]"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            
            $last=count($name);
            for($i = 0; $i<$last;$i++){
                for($j=0;$j<$last;$j++){
                    if($name[$i]<$name[$j]){
                        $name1   = $name[$i];
                        $name[$i]= $name[$j];
                        $name[$j]= $name1;
                    }
                }
            }
            foreach($name as $name => $value){
                echo "$value<br>";
            }
        }
?>