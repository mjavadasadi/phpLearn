<?php
$link = mysqli_connect('localhost:3306', 'root', '');
if (!$link) {
    echo 'could not connect : ' . mysqli_connect_error();
    exit;
}
mysqli_select_db($link, 'mjavadasadi');

// $SQL = "select id,email from users";
// $SQL = "select * from users LIMIT 2";
// $SQL = "select * from users order by id DESC";
$SQL = "select * from users";


if ($result = mysqli_query($link, $SQL)) {
    //    var_dump(mysqli_fetch_all($result));
    //    var_dump(mysqli_fetch_array($result));

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
            </tr>
        </thead>
        <tbody>
            <?php while ($user =  mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['password'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>