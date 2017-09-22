<?php 
  
  // Car
  abstract class GroundTransport 
  {
    public $numberOfWheels;

    abstract public function makeBeepSignal();
  }

  class Car extends GroundTransport
  {

    public $numberOfWheels;

    public function makeBeepSignal()
    {
      // TODO: Implement makeBeepSignal() method.
      echo "Beep-beee! <br>" ;
    }

    public function makeWheels()
    {
        if ($numberOfWheels === 4) {
            echo "Я машина. У меня вот столько колёс: {$this->numberOfWheels}. ";
        } else {
            echo "Я странная машина. У меня вот столько колёс: {$this->numberOfWheels}. ";
        }
    }
  }

  $tesla = new Car();
  $tesla->numberOfWheels = rand(1,10);
  $tesla->makeWheels();
  $tesla->makeBeepSignal();

  // TV
  abstract class HomeElectronics
  {
    abstract public function turnOn($on);
  }

  class TV extends HomeElectronics
  {
      public function turnOn($on)
      {
        // TODO: Implement turnOn() method.
        if ($on === 1) {
            echo "Я телевизор. Я включен.";
        } else {
            echo "Я телевизор. Отстань, я отдыхаю.";
          }
      }
  }

  $samsung = new TV();
  $samsung->turnOn(rand(0,1));

  // Pen
  abstract class DrawingSubjects
  {
    public $brand;
    public $colorOfInk;

    abstract public function draw();
  }

  class Pen extends DrawingSubjects
  {
    public $brand;
    public $colorOfInk;

    public function __construct($brand, $colorOfInk)
    {
      $this->brand = $brand;
      $this->colorOfInk = $colorOfInk;
    }

    public function draw()
    {
      // TODO: Implement draw() method.
      echo "<br>Я ручка от {$this->brand}. Сегодня будем рисовать таким цветом: {$this->colorOfInk}";
    }
  }

  $firstPen = new Pen("BIC", "Зелёный");
  $secondPen = new Pen("SHMIK", "Красный");
  $firstPen->draw();
  $secondPen->draw();

  // Duck
  abstract class Birds
  {
    public $wingspan;

    abstract public function fly($wingspan);
  }

  class Duck extends Birds
  {
    public $wingspan;

    public function __construct($wingspan)
    {
      $this->wingspan = $wingspan;
    }

    public function fly($wingspan)
      {
        // TODO: Implement fly() method.
        if ($wingspan < 0.05) {
            echo "<br> Вы чё?! Я не умею летать! У меня размах крыльев всего {$this->wingspan} м";
        } else {
            echo "<br> Полетели!";
        }
      }
  }

  $yellowDuck = new Duck(rand(1,100)/100);
  $yellowDuck->fly(wingspan);

  // Product
  abstract class Goods
  {
    public $name;
    public $price;

    abstract public function getPrice($sale);
  }        

  class Product extends Goods
  {
    public $name;
    public $price;

    public function __construct($name, $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

    public function getPrice($sale)
    {
      // TODO: Implement getPrice() method.
      $this->price = $this->price - ($this->price * $sale);
      return $this->price;
    }
  }

  $toy = new Product("Медевжонок", 1200);
  echo "<hr>" . "Товар: " . $toy->name . "<br>" . "Цена: " . $toy->getPrice(0.17);

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
    <div>
      <a href="https://github.com/qzizp/lesson10/blob/master/index.php">Суперклассы здесь</a>
    </div>    
  </div>
</body>
</html>