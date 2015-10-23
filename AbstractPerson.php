<?php

require_once('PersonInterface.php');

abstract class AbstractPerson implements PersonInterface {
  abstract public function __construct($name = NULL);

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
