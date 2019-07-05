<?php

// НАСЛЕДОВАНИЕ


/* родительский класс */
class Vehicle {

  public $color;
  public $speed;
  public $brand;

  public function tripTime($distance) {
    $time = $distance / $this->speed;
    return $time;
  }


}


/* дочерний класс велосипеды */
  class Bicycle extends Vehicle {
    public $type;
    /* переопределили метод */
    public function tripTime ($distance) {
      return parent::tripTime($distance) * 1.2;
    }
  }

/* дочерний класс для авто машин */
  class Car extends Vehicle {
    public $fuel;

    public function fuelCon ($distance) {
      $result = ($this->fuel * $distance) / 100;
      return $result;
    }

  }


  $car1 = new Car;
  $car1->speed = 110;
  $car1->fuel = 12;

  $car2 = new Car;
  $car2->speed = 140;
  $car2->fuel = 14;

  $bicycle1 = new Bicycle;
  $bicycle1->speed = 20;

  echo '<br> Car1 trip time'. round($car1->tripTime(100), 2);
  echo '<br> Car2 trip time'. round($car2->tripTime(100), 2);
  echo '<br> Bicycle trip time'. round($bicycle1->tripTime(100), 2);





/* можно запретеить переопределение методов  */
// FINAL METHOD AND CLASSES
// {можно все закоментировать}

class VehicleV {
  final public function test() {}
}
final class CarR extends VehicleV {
  public function test (){} // ERRRRRRRRRRRRRRROR
}
// ERRRRRRRROOOOOOOR
// ошибка - нельзя принимать наследство от класса с предисториеей "final"
class CarX extends CarR {
  public function test (){}
}





?>
