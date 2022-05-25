<?php
require_once('../db.php');

function get_city($pdo, $term)
{
  $stmt = $pdo->prepare("SELECT full_name FROM visitors WHERE full_name LIKE '%" . $term . "%' ORDER BY full_name ASC LIMIT 10");
  $stmt->execute(array());
  $data = $stmt->fetchall();

  return $data;
}

if (isset($_GET['term']) && (mb_strlen($_GET['term']) > 2)) {
  $getCity = get_city($pdo, $_GET['term']);
  $cityList = array();
  // Для ограничения выпадающего списка
  foreach ($getCity as $city) {
    $cityList[] = $city['full_name'];
  }

  if ($cityList) {
    echo json_encode($cityList);
  } else {
    $cityList[] = 'Нет совпадений';
    echo json_encode($cityList);
  }
} else {
  $cityList[] = 'Введите минимум 3 символа';
  echo json_encode($cityList);
}
