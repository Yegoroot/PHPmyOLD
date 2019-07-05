<?php

$con = mysqli_connect("*****", "****", "****", "temp_php");
mysqli_set_charset($con, "utf8");

if (mysqli_connect_error()) {
  echo "Failed is connect to MySQL ".mysqli_connect_error();
}

$query = 'SELECT * FROM sql_news;';
$result = mysqli_query($con, $query);

/* количество выведенных строк*/
$count = mysqli_num_rows($result);

/* присвиваем первую строку переменной */
/* mysqli_fetch_array($result);   при каждом вызове присваиваем новую строку из таблицы
    когда закончатся строки - вернется - false
 */
if ($count) {
  while($row = mysqli_fetch_array($result)) {
    echo '<pre>';
    echo $row['h1'];
    echo '</pre>';
  }
}

?>
