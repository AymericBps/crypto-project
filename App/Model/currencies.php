<?php

require 'config/Database.php';

class Curencies extends Database{
  protected $name;
  protected $valueEUR;
  protected $date;

  public function __construct(){

  }

  public function getName(){
    return $this->name;
  }
  public function getValueEUR(){
    return $this->valueEUR;
  }
  public function getDate(){
    return $this->date;
  }

  public function setName(string $n){
    $this->name = $n;
  }
  public function setValueEUR(float $v){
    $this->valueEUR = $v;
  }
  public function setDate(DateTime $d){
    $this->date = $d;
  }

  public function getAll()
  {
    try {
      $pdo = Database::Connect(); 
      $stmt = $pdo->query('SELECT name, valueEUR FROM currencies');
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
  }
  }
  public function getByCurrencyName($name)
  {
    try {
        $pdo = Database::Connect(); 
        $stmt = $pdo->prepare('SELECT name, valueEUR FROM currencies WHERE name = :name');
        $stmt->execute([':name' => $name]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      
    }
}
}




?>