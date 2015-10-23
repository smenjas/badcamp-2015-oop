<?php

abstract class APerson {
  abstract public function getName();
  abstract public function setName($name);

  public function sayHi() {
    return "Hi.\n";
  }
}

class CPerson extends APerson {
  public $name;
  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    $this->name = $name;
  }

  public function otherFunc() {
  }
}

class DPerson extends CPerson {
  public function sayHi() {
    $name = $this->getName();
    return parent::sayHi() . "My name is {$name}.\n";
  }
}

$dperson = new DPerson;
$dperson->setName("Ben");
echo $dperson->sayHi();
var_export($dperson);
