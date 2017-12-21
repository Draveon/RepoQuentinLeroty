<?php

class Personnage {
  private $name;
  private $pv = 100;
  private $arme;


public function getname() {
  return $this->name;
}
public function setname() {
  $this->name = $name;
}

public function getpv() {
  return $this->pv;
}
public function setpv() {
  $this->pv = $pv;
}

public function display():string {
      return "ce héros est" . $this->name . "et possède " . $this->pv . "points de vie";
}


}

 ?>
