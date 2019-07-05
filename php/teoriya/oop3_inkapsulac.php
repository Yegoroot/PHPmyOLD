<?php

/* Инкапсуляция */

class Phone {

  public function getNumberByName ($name)
  {
    // доступ всем из любой части программы
  }
  protected function dialNumber($number)
  {
    // доступ внуртри класса и для наследуемых объектов
  }
  private function call ($name)
  {
    // доступ только внутри класса
  }

}

class iphone extends Phone {

  function print() {
     $this->getNumberByName();  // ok
     $this->dialNumber();       //ok
     $this->call();             // undefined
  }

}

$obj = new iphone;

 ?>
