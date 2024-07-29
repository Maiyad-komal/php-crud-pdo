<?php
include "./connection.php";

$name = $_POST['name'];
$password = $_POST['password'];

$query ="INSERT INTO `user_details` (`name`,`password`) values (?,?)";
$params = [$name,$password];

$statement = $connection ->prepare($query);
$row = $statement->execute($params);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "failed to insert data ";
