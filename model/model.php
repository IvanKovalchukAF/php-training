<?php

function getConnecton()
{
    $pdo_conn = new PDO("mysql:host=127.0.0.1;dbname=CRUD_php_school", 'root', '0015');

    return $pdo_conn;
}

function insert($name, $description, $created_at)
{
    $pdo_conn = getConnecton();
    $sql = 'INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)';
    $statement = $pdo_conn->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':created_at', $created_at);

    return $statement->execute();
}