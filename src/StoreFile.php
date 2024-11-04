<?php
 namespace Daw2\Dsw2024TiendaForm;

use DateTime;

 class StoreFile implements StoreInterface{
  
  public function addRate(int $rate)
  {
    $rate =$_POST['rate'];
    $date = new DateTime();
    $fileName='../public/rates/'.$date->format('Y-m-d-H-i').'.csv';
    file_put_contents($fileName,$rate.', ', FILE_APPEND );
  }

  public function getStadistics(): array
  {
    return [];
  }
 }