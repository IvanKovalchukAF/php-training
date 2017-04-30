<?php

require_once 'model/model.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {

    $result = insert($_POST['name'], $_POST['description'], $_POST['created_at']);

}

require_once 'view/indexTemplate.php';