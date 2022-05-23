<?php
require_once('db.php');

function get_city($conn, $term)
{
  $query = "SELECT full_name FROM visitors WHERE full_name LIKE '%" . $term . "%' ORDER BY full_name ASC";
  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $data;
}

if (isset($_GET['term'])) {
  $getCity = get_city($conn, $_GET['term']);
  $cityList = array();
  foreach ($getCity as $city) {
    $cityList[] = $city['full_name'];
  }
  echo json_encode($cityList);
}
