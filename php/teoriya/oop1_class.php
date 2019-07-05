<?php

  class Car {

    const WHEELS = 4;

    public $color = 'white';
    public $speed;
    public $fuel;
    public $brand;
    public function test() {
      echo '<br> car function';
    }
    public function tripTime ($distance) {
      $time = $distance / $this->speed;
      return $time;
    }

    // функция конструктор создается при создании экземпляра класаа (объекта)
    public function __construct( $brand = 'неопределено', $speed = 'значение по умолчанию', $fuel, $color){
      $this->brand = $brand;
      $this->speed = $speed;
      $this->fuel =  $fuel;
      $this->color = $color;

    }

    // функция которая срабатывает после уничтожения объекта (так же и после отработки скрипта php)
    public function __destruct() {
      echo '<br> Method '.__METHOD__.' called';
      echo '<br> object deleted';
    }

  }


  // создание первого объекта
  $car1 = new Car;
  $car1->brand = 'Audi';
  $car1->speed = 110;
  $car1->fuel = 12;

  $car3 = new Car ('BMW', 130, 14, 'Black');



  // echo "<pre>";
  // print_r($car1);
  print_r($car3);
  echo '<br>';
  echo $car1::WHEELS;
  echo '<br>car time '.round($car1->tripTime(2140), 2);
  echo '<br>car time '.round($car3->tripTime(2140), 2);



  /* отличие this от self заключается в том, что в this мы получаем доступ к объекту в котром вызван метод, а self ссылается на класс */




  /* ТЕМА: статические свойства и методы */
  // ОПРЕДЕЛЕНИЕ: свойства и методы которые принадлежат классу, СТАТИЧЕСКИЕ

 echo "<br>";
  class CarCar {
    public static $engine = 1;
    public static function whatis () {
      echo '<br>avto - transport trafic dorog';
    }
  }

  echo CarCar::$engine; // доступ к свойству
  CarCar::whatis(); // доступ к методу


?>
