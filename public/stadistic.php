<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $fileName ='rates/2024-10-25-15-08.csv';
  $content = file_get_contents($fileName);
  $rate = explode(', ',$content);
  array_pop($rate);
  print_r($rate);
  ?>
</body>
</html>