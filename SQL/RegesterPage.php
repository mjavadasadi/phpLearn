<?php

function request($field) {
    return isset($_REQUEST[$field]) && $_REQUEST[$field] != "" ? trim($_REQUEST[$field]) : null;
}

function has_error($field) {
    global $errors;
    return isset($errors[$field]);
}

function get_error($field) {
    global $errors;
    return has_error($field) ? $errors[$field] : null;
}

$errors = [];


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = request('email');
    $password = request('password');

    if(is_null($email)) {
        $errors['email'] = 'فیلد ایمیل نمی‌تواند خالی بماند';
    }

    if(is_null($password)) {
        $errors['password'] = 'فیلد پسورد نمی‌تواند خالی بماند';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'فیلد پسورد نمی‌تواند کمتر از 6 کاراکتر باشد';
    }

    if(! is_null($email) && ! is_null($password) && strlen($password) >= 6) {
        echo 'save user data into user table';
    }

}
?>


<html>
    <head>
        <title>Register Page</title>
    </head>
    <body>
        <h3>Register Page</h3>
        <br>
        <form action="/SQL/RegesterPage.php" method="post">
            <label for="">email : </label>
            <input type="email" name="email"><br>
            <?php if(has_error('email')) { ?>
                <span><?php  echo get_error('email'); ?></span><br>
            <?php  } ?>
            <label for="">password</label>
            <input type="password" name="password"><br>
            <?php if(has_error('password')) { ?>
                <span><?php  echo get_error('password'); ?></span><br>
            <?php  } ?>
            <button type="submit">register</button>
        </form>
    </body>
</html>
