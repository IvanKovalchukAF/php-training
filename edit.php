<?php

require_once 'model/model.php';

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {
    update($_POST['id'], $_POST['name'], $_POST['description'], $_POST['created_at']);
    header('Location: index.php');
}

$id = $_GET['id'];
$row = findById($id);
require_once 'view/editTemlate.php';

