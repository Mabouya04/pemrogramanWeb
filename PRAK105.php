<html>
    <?php
    $daftar = array("hpA"=>"Samsung Galaxy S22","hpB"=>"Samsung Galaxy S22 +", "hpC"=>"Samsung Galaxy A03", "hpD"=>"Samsung Galaxy Xcover 5");
    ?>   
<body>
    <table border="2">
   <tr>
    <th>Daftar Smartphone Samsung</th>
   </tr>
   <tr>
    <td><?php echo $daftar["hpA"]?></td>
   </tr>
   <tr>
    <td><?php echo $daftar["hpB"]?></td>
   </tr>
   <tr>
    <td><?php echo $daftar["hpC"]?></td>
   </tr>
   <tr>
    <td><?php echo $daftar["hpD"]?></td>
   </tr>
    </table>
</body>
</html>

<style>
    th{
        background-color: red;
        padding-top: 15;
        padding-bottom: 15;
        font-size: x-large;
    }
</style>