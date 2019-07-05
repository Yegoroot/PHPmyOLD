<?php

// get all data - > array {news}

require_once 'class.php';

$publication = array();


// подключение к BD
$con = mysqli_connect("***", "***", "**", "temp_php");
mysqli_set_charset($con, "utf8");

if (mysqli_connect_error()) {
  echo "Failed is connect to MySQL ".mysqli_connect_error();
}


// // получение данных
$query = 'SELECT * FROM sql_news;';
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result)) {

  $publication[] = new $row['category_id']($row);   // new $row['category_id']($row); - эта конструкция - new ClassName($dataToConstructor)

}
