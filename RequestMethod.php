<?php
var_dump($_GET);
?><br>
<?php
var_dump($_POST);
?><br>
<?php
var_dump($_REQUEST);
?><br>

<html>

<head></head>

<body>
    <form action="RequestMethod.php/?site_name=mjavadasadi.ir" method="post">
        <input type="text" name="Full_name"></input>
        <button type="submit">send</button>
    </form>
</body>

</html>