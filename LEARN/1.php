<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Learn 1</title>
</head>
<body>
  
    <?php
    // array = variabel yang dapat memiliki banyak nilai
      $bulan = ["Januari","Februai","Maret"];
      $arr1 = [123,"tulisan",false];
      
      var_dump($bulan);
      echo "<br>";
      print_r($bulan); 

      echo $arr1[0];
      echo $arr1[1];
      echo "<br>";
      echo "<br>";
      var_dump($bulan);
      $bulan [] = "April";
      $bulan [] = "Mei";
      echo "<br>";
      var_dump($bulan);


    ?>
</body>
</html>