<?php
    $data = [
        [
            "nama"=>"Andi","nim"=>"2101001","nilaiUTS"=>87,"nilaiUAS"=>65
        ],
        [
            "nama"=>"Budi","nim"=>"2101002","nilaiUTS"=>76,"nilaiUAS"=>79
        ],
        [
            "nama"=>"Tono","nim"=>"2101003","nilaiUTS"=>50,"nilaiUAS"=>41
        ],
        [
            "nama"=>"Jessica","nim"=>"2101004","nilaiUTS"=>60,"nilaiUAS"=>75
        ]
            ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th {  
            border: 1px solid black;
            text-align: left;
        }

        table {
            border-collapse: collapse;
        }

        th,td{
            width: 100px;
            padding-bottom: 10px;
            padding-left: 5px;
        }

        th{
            background-color: whitesmoke;
            color: black;
        }
    </style>
</head>
<body>
    <table>
        <?php
            echo"<th>Nama</th><th>NIM</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Huruf</th>";
            foreach($data as $row){
                $nilaiAkhir = ($row["nilaiUTS"]+$row["nilaiUAS"])/2;
                $huruf = "";
                if($nilaiAkhir>=80){
                    $huruf = "A";
                }else if($nilaiAkhir>=70){
                    $huruf = "B";
                }else if($nilaiAkhir>=60){
                    $huruf = "C";
                }else if($nilaiAkhir>=50){
                    $huruf = "D";
                }else{
                    $huruf = "E";
                }
                echo"<tr>";
                echo"<td>".$row["nama"]."</td>";
                echo"<td>".$row["nim"]."</td>";
                echo"<td>".$row["nilaiUTS"]."</td>";
                echo"<td>".$row["nilaiUAS"]."</td>";
                echo"<td>".$nilaiAkhir."</td>";
                echo"<td>".$huruf."</td>";
                echo"</tr>";
            }
        ?>
    </table>
</body>
</html>