<?php
include "./connection.php";
$id = $_GET['id'];
$query = "DELETE from `user_details` where `id`= (?)";
$params = [$id];

$statement = $connection ->prepare($query);
$row = $statement->execute($params);

if($row >0)
       return header("Location:./index.php");
else
       echo "failed to delete data";





?>