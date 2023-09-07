<?php
var_dump($_GET);
var_dump($_POST);
var_dump($_REQUEST);
?>

<html>

<head></head>

<body>
    <form action="RequestMethod.php/?site_name=mjavadasadi" method="post">
        <input type="text" name="Full_name"></input>
        <button type="submit">send</button>
    </form>
</body>

</html>