<?php 
  
  // Car
  abstract class GroundTransport 
  {
    public $numberOfWheels;

    abstract public function makeBeepSignal();
  }

  // TV
  abstract class HomeElectronics
  {
    public $voltage;

    abstract public function turnOn();
  }

  // Pen
  abstract class DrawingSubjects
  {
    public $brand;

    abstract public function draw();
  }

  // Duck
  abstract class Birds
  {
    public $wingspan;

    abstract public function fly();
  }

  // Product
  abstract class Goods
  {
    public $price;

    abstract public function getPrice();
  }        

 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Домашнее задание №9</title>
</head>
<body>
  <div class="wrapper">
    <div class="determination">
      <h2>Как я понимаю, что такое наследование и полиморфизм</h2>
      <p><strong>Наследование</strong>, по-моему - это способность классов расширяться. Преемник родительского класса перенимает все его свойста и методы.</p>
      <p>А <strong>полиморфизм</strong>, по-моему, как бы вытекает из наследования. То есть у унаследованных классов могут быть одни и те же методы от родителя, но при этом они могут работать очень по-разному, по другой схеме - изменяться, "морфиться".</p>
    </div>  
    <div class="interface-and-abstract">
      <h2>Отличие интерфейсов и абстрактных классов</h2> 
      <p>Абстрактный класс может иметь свойства и методы, а интерфейс только методы (без реализации). Интерфейс носит чисто описательный характер. Кроме этого, наследник интерфейса может реализовывать методы не только этого интерфейса, но и сколь угодно других, а у асбтрактного класса наследник имеет только одного родителя. Если нужно просто описать как будет работать наследник, то следует использовать интерфейс.</p>
    </div>    
  </div>
</body>
</html>