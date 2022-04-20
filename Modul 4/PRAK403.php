<?php
    $data = [
                [
                    "nama"=> "Ridho", "mapel"=>["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"],"sks"=>[2, 1, 2, 3]
                ],
                [
                    "nama"=> "Ratna", "mapel"=>["Basis Data I", "Praktikum Basis Data I", "Kalkulus"],"sks"=>[2, 1, 3]
                ],
                [
                    "nama"=> "Tono", "mapel"=>["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],"sks"=>[3, 3, 3, 3]
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
            padding-right: 10px;
        }

        table {
            border-collapse: collapse;
        }

        th,td{
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
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah Diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php

            for($x=0; $x<count($data);$x++){
                $data[$x]["Total SKS"] = array_sum($data[$x]["sks"]);
            }


           for($i=0; $i <count($data); $i++){
               for($j=0; $j<count($data[$i]["mapel"]); $j++){
                    echo "<tr>";
                    if($j==0){
                        echo"<td>".$i+1 ."</td>";
                        echo "<td>".$data[$i]["nama"]."</td>";
                        echo "<td>".$data[$i]["mapel"][$j]."</td>";
                        echo "<td>".$data[$i]["sks"][$j]."</td>";
                        echo "<td>".$data[$i]["Total SKS"]."</td>";
                            if($data[$i]["Total SKS"]>=7){
                                $data[$i]["Keterangan"] = "Tidak Revisi";
                                echo "<td style='background-color:green;'>".$data[$i]["Keterangan"]."</td>";
                            }else{
                                $data[$i]["Keterangan"] = "Revisi KRS";
                                echo "<td style='background-color:red;'>".$data[$i]["Keterangan"]."</td>";
                            }
                    }else{
                        echo"<td></td>";
                        echo"<td></td>";
                        echo"<td>".$data[$i]["mapel"][$j]."</td>";
                        echo "<td>".$data[$i]["sks"][$j]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                }
           }
        ?>
    </table>
</body>
</html>