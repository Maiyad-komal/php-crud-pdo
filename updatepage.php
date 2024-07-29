<?php

$id = $_GET['id'];
require './connection.php';
$query = "SELECT * FROM user_details where id=(?)";
$params = [$id];

$statement = $connection->prepare($query);
$statement->execute($params);
$user = $statement->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<form action="./update.php" method="post">
         <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="text" name="name"  value="<?= $user['name'] ?>" placeholder="name" /></br>
        <input type="text" name="password" value="<?= $user['password'] ?>" placeholder="password" /></br>
        <input type="submit" value="submit" />
    </form>
</body>
</html>