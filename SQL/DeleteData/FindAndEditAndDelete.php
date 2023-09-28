<?php
$link = mysqli_connect('localhost:3306', 'root', '');
if (!$link) {
    echo 'could not connect : ' . mysqli_connect_error();
    exit;
}
mysqli_select_db($link, 'mjavadasadi');


$SQL = "select * from users";


if ($result = mysqli_query($link, $SQL)) {


} else {
    echo 'error : ' . mysqli_error($link);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user table</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>userName</th>
                <th>password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user =  mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['password'] ?></td>
                    <td><a href="Edit.php?id=<?= $user['id']?>">Edit</a></td>
                    <td><a href="Delete.php?id=<?= $user['id']?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>