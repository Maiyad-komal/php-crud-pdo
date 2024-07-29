<?php
include "./connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];


$connection = mysqli_connect('localhost', 'root', '', 'user');
$query = "UPDATE `user_details` set `name` =(?), `password` = (?) where `id`=(?)";
$params = [$name,$password,$id];

$statement = $connection ->prepare($query);
$row = $statement->execute($params);

if($row >0)
       return header("Location:./index.php");
else
       echo "failed to delete data";





?>