<?php


class Bucheron extends Personnage {
  private $role;
  private $pv;
  private $arme;



public function getrole() {
  return $this->role;
}
public function setrole() {
  $this->role = $role;
}

public function getpv() {
  return $this->pv;
}
public function setpv() {
  $this->pv = $pv;
}

public function getarme() {
  return $this->arme;
}
public function setarme() {
  $this->arme = $arme;
}

public function display():string {
      return "le" . $this->role . "possède une " . $this->arme .".";
}
}


 ?>
