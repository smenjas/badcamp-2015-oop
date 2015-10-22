<?php

class Person {
  public $name, $age, $height;

  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }

  public function setAge($age) {
    $this->age = $age;
  }
  public function getAge() {
    return $this->age;
  }

  public function setHeight($height) {
    $this->height = $height;
  }
  public function getHeight() {
    return $this->height;
  }
}

$person = new Person();
$person->setName("Ben");
$person->setAge(36);
$person->setHeight(73);
echo "Name: ", $person->getName(), PHP_EOL;
echo "Age: ", $person->getAge(), PHP_EOL;
echo "Height: ", $person->getHeight(), PHP_EOL;
var_export($person);
