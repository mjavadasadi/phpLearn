<?php

if (isset($_GET['user']) && isset($_GET['pass'])) {
    $username = $_GET['user'];
    $password = $_GET['pass'];
    echo $username . " " . $password;
} else {
    echo "PLZ LOGIN";
}
?>

<html>
<head></head>
<body>
<form action="/login.php" method="get">
    <input type="text" name='user'>
    <input type="password" name='pass'>
    <button type='submit'>send</button>
</form>
</body>

</html>