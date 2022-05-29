<?php
require_once('../db.php');
require '../includes/functions.php';

$data = get_user($pdo, $_GET['term']);
liveSearchRequest($data, 'full_name');
