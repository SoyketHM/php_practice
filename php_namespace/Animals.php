<?php
namespace Animals;
include_once "vendor/autoload.php";

$cat = new Cat();
$cat->greet();

$dog = new Dog();
$dog->greet();

$cow = new Test\Cow();
$cow->greet();