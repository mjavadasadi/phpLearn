<?php

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    echo 'username : '.$username . " ".'password : ' . $password.'<br>';
} else {
    echo "PLZ LOGIN";
}
var_dump($_POST);
?>
<html>
<head></head>
<body>
    <?php if (isset($_POST['user'])) { ?>
        <h3><?php echo 'hi'.$_POST['user']?></h3>
        <?php }?>
<form action="/MethodPost.php" method="post">
    <input type="text" name='user'>
    <input type="password" name='pass'>
    <button type='submit'>send</button>
</form>
</body>

</html>