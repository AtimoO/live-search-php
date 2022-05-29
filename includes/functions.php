<?php
function get_user($pdo, $term)
{
  $stmt = $pdo->prepare("SELECT full_name FROM visitors WHERE full_name LIKE '%" . $term . "%' ORDER BY full_name ASC LIMIT 10");
  $stmt->execute(array());
  $data = $stmt->fetchall();

  return $data;
}

function get_pasport($pdo, $term)
{
  $stmt = $pdo->prepare("SELECT type FROM trud_statia WHERE type LIKE '%" . $term . "%' ORDER BY type ASC LIMIT 10");
  $stmt->execute(array());
  $data = $stmt->fetchall();

  return $data;
}

function liveSearchRequest($data, $column)
{
  if (isset($_GET['term']) && (mb_strlen($_GET['term']) > 1)) {
    $list = array();
    // Для ограничения выпадающего списка
    foreach ($data as $city) {
      $list[] = $city[$column];
    }

    if ($list) {
      echo json_encode($list);
    } else {
      $list[] = 'Нет совпадений';
      echo json_encode($list);
    }
  } else {
    $list[] = 'Введите минимум 2 символа';
    echo json_encode($list);
  }
}
