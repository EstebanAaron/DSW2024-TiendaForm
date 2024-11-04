<?php
 namespace Daw2\Dsw2024TiendaForm;

 interface StoreInterface {

  public function addRate(int $rate);

  public function getStadistics():array;
 }