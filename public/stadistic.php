<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
   
  </style>
</head>
<body>
  <h1>Estadisticas</h1>
  <table>
    <thead>
      <tr>
        <th>
          Fecha 
        </th>
        <th>
          Hora
        </th>
        <th>
          Cantidad
        </th>
        <th>
          Media
        </th>
      </tr>
    </thead>
  
  <?php
  require_once 'connection.php';

  $result = $link->query("SELECT date_format(date, '%Y-%c-%d %H:%i') as dateformat , count(rate) as count , avg(rate) as avg from rates group by dateformat");
  while ($rate = $result->fetch(PDO::FETCH_OBJ)) {
    printf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%.2f</td></tr>",
    substr($rate->dateformat,0,10),substr($rate->dateformat,10),$rate->count ,$rate->avg);
      
  }

  // $path ='rates/';
  // $dir = opendir($path);
  // while ($fileName = readdir($dir)) {
  //   // echo $fileName. "<br>";
  //   // $fileName ='rates/2024-10-25-15-08.csv';
  //   if (is_file($path.$fileName)) {
  //     $content = file_get_contents($path . $fileName);
  //   $rates = explode(', ',$content);
  //   array_pop($rates);
  //   $count = count($rates);
  //   $total = 0;
    
  //   foreach ($rates as $rate) {
  //     $total += $rate;
  //   }
  //   $avg = $total /$count;
  //   printf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%.2f</td></tr>",
  //   substr($fileName,0,10),substr($fileName,11,-4),$count,$avg);
      
  //   }
    
  // }
  // closedir($dir);
  ?>
  </table>
</body>
</html>