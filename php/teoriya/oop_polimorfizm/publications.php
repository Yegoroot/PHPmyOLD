<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require_once 'data.php';
foreach ($publication as $item) {
  print_r ($item->printItem());
}
