<?php
namespace Daw2\Dsw2024TiendaForm;

use PDO;

class StoreDB implements StoreInterface{
  private PDO $link;

  public function __construct($host,$user,$password,$db)
  {
    $dsn = "mysql:host=$host;dbname=$db";
    $this->link = new PDO($dsn,$user,$password);
  }

  function addRate(int $rate)
  {
    $this->link->exec("INSERT INTO rates (date , rate) VALUES (NOW(), $rate)");
  }

  public function getStadistics(): array
  {
    $result = $this->link->query("SELECT date_format(date, '%Y-%c-%d %H:%i') as dateformat , count(rate) as count , avg(rate) as avg from rates group by dateformat");
    return $result->fetchAll(PDO::FETCH_ASSOC); 
  }

  public function __destruct()
  {
    unset($this->link);
  }

}