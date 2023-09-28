<?php

if (!isset($_GET['id'])) {
    header("Location: http://mjavadasadi.ir");
    return;
}

$link = mysqli_connect('localhost:3306', 'root', '');
if (!$link) {
    echo 'could not connect : ' . mysqli_connect_error();
    exit;
}

mysqli_select_db($link, 'mjavadasadi');

$stmt = mysqli_prepare($link, "select * from users where id = ?");
$id = (int) $_GET['id'];
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($result->num_rows == 0) {
    header("Location: /");
    return;
}

$user = mysqli_fetch_assoc($result);



if ($_SERVER['REQUEST_METHOD'] == 'POST' && !is_null($user)) {
    $stmt = mysqli_prepare($link, "update users set email=?,password=? where id=?");
    mysqli_stmt_bind_param($stmt, 'ssi', $_POST['email'], $_POST['password'], $user['id']);
    mysqli_stmt_execute($stmt);
    if (mysqli_affected_rows($link)) {
        header('location: FindAndEdit.php');
        return;
    }
}



?>

<html>

<head>
    <title>Register Page</title>
</head>

<body>
    <h3>User Edit</h3>
    <br>
    <form action="Edit.php?id=<?= $user['id'] ?>" method="post">
        <label for="">email : </label>
        <input type="email" name="email" value="<?= $user['email'] ?>"><br>
        <label for="">password</label>
        <input type="password" name="password" value="<?= $user['password'] ?>"><br>
        <button type="submit">ثبت ویرایش</button>
    </form>
</body>

</html>