<?php

require './connection.php';
$query = "SELECT * FROM user_details";
$statement = $connection->prepare($query);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="./insert.php" method="post">
        <input type="text" name="name" placeholder="enter your name" />
        <input type="text" name="password" placeholder="enter your password" />
        <input type="submit" value="submit" />
    </form>
    <table border="1">
        <thead>
            <th>name</th>
            <th>password</th>
            <th>delete</th>
            <th>update</th>

        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><a href="./delete.php?id=<?= $user['id'] ?>">delete</a></td>
                    <td><a href="./updatepage.php?id=<?= $user['id'] ?>">update</a></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>
</html>