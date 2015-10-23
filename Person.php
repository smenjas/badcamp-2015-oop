<?php

require_once('AbstractPerson.php');

class Person extends AbstractPerson {
  public $name, $age, $height;

  public function __construct($name = NULL) {
    $this->setName($name);
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
echo PHP_EOL;

$classes = array(
  'Person',
  'AbstractPerson',
);
foreach ($classes as $class) {
  echo "\$person is ";
  echo is_a($person, $class) ? "" : "not ";
  echo "a $class.", PHP_EOL;
}
