<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  require_once "connection.php";

  if (empty($_POST['rate'])) {
    echo '<h1 class="error">No se encuentra valoracion</h1>';
  }
  else{
    $rate =$_POST['rate'];
    $store->addRate($rate);
  }
  ?>
  <h1>Muchas gracias por la valoracion</h1>

  <script>
    function changePage(){
      window.location.href ='index.php';
    }
    setTimeout(changePage, 2000)
  </script>
</body>
</html>