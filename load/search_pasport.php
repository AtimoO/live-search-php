<?php
require_once('../db.php');
require '../includes/functions.php';

$pasport = get_pasport($pdo, $_GET['term']);

liveSearchRequest($pasport, 'type');
