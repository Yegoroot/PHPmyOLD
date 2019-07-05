<?php

abstract class SQL_news {
  // создали класс соттветсвующий названию sql таблицы,
  // соответсвенно поля соответсвуют полям в таблице
  public $id;
  public $h1;
  public $short_content;
  public $content;
  public $category_id;
  public $author_id;
  public $date;
  public $preview;
  public $status;

  // абстрактный метод в этом классе для того чтоб при создании дочер-
  // них классов в которых будет отсутсвовать метод printItem() - ошиб-
  // ку отлавливать на момент создания дочернего класса (у которого не
  // будет этого метода), а не вывода
  // --- но нужно учитывать сигнатуры метода у абстактного и "релизующегося" должны совпадать
  // ----- сигнатуры метода - имя, кол-во параметров, тип параметра
  abstract public function printItem(); //

  function __construct($row){
    $this->id = $row['id'];
    $this->h1 = $row['h1'];
    $this->date = $row['date'];
    $this->short_content = $row['short_content'];
    $this->content = $row['content'];
    $this->preview = $row['preview'];
    $this->author_id = $row['author_id'];
    $this->category_id = $row['category_id'];
  }

}

class NewsPublication extends SQL_news {

  // заголовок и дата
  public function printItem(){
    // echo '<br>Вызван метод '.__METHOD__;
    echo "<br><strong>Новость Общества</strong>";
    echo "<h1>".$this->h1."</h1>";
    echo $this->date;
    echo "<p>".$this->content."</p>";
    echo '<hr>';
  }
}

class ArticlePublication extends SQL_news {

  // заголовок и имя краткое описание
  public function printItem(){
    // echo '<br>Вызван метод '.__METHOD__;
    echo "<br><strong>Новость Культуры</strong>";
    echo "<h1>".$this->h1."</h1>";
    echo "<p>".$this->short_content."</p>";
    echo '<hr>';
  }
}

class PhotoReportPublication extends SQL_news {

  // фотография и заголовок
  public function printItem(){
    // echo '<br>Вызван метод '.__METHOD__;
    echo "<br><strong>Фотоотчет</strong>";
    echo "<h1>".$this->h1."</h1>";
    echo '<img style="max-width:100%" src="'.$this->preview.'" >';
    echo '<hr>';
  }

}



?>
