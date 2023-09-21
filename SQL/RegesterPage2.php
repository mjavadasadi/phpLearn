<!-- همان ریجستر \یج هست با این تفاوت که جلو گیری شده از حمله sql injection
-->



<?php

function request($field)
{
    return isset($_REQUEST[$field]) && $_REQUEST[$field] != "" ? trim($_REQUEST[$field]) : null;
}

function has_error($field)
{
    global $errors;
    return isset($errors[$field]);
}

function get_error($field)
{
    global $errors;
    return has_error($field) ? $errors[$field] : null;
}

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = request('email');
    $password = request('password');

    if (is_null($email)) {
        $errors['email'] = 'فیلد ایمیل نمی‌تواند خالی بماند';
    }

    if (is_null($password)) {
        $errors['password'] = 'فیلد پسورد نمی‌تواند خالی بماند';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'فیلد پسورد نمی‌تواند کمتر از 6 کاراکتر باشد';
    }

    if (!is_null($email) && !is_null($password) && strlen($password) >= 6) {
        $link = mysqli_connect('localhost:3306', 'root', '');
        if (!$link) {
            echo 'could not connect : ' . mysqli_connect_error();
            exit;
        }

        mysqli_select_db($link, 'mjavadasadi');

        $statement = mysqli_prepare($link, "insert into users (email , password ) values ( ? , ?)");
        mysqli_stmt_bind_param($statement, 'ss', $email, $password);
        if ($result = mysqli_stmt_execute($statement)) {
            var_dump($result);
            exit;
            // $success = true;
        } else {
            echo 'error : ' . mysqli_error($link);
            exit;
        }
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
    <?php if ($success) { ?>
        <span>اطلاعات شما با موفقیت ثبت شد</span>
    <?php } ?>
    <form action="/SQL/RegesterPage2.php" method="post">
        <label for="">email : </label>
        <input type="email" name="email"><br>
        <?php if (has_error('email')) { ?>
            <span><?php echo get_error('email'); ?></span><br>
        <?php  } ?>
        <label for="">password</label>
        <input type="password" name="password"><br>
        <?php if (has_error('password')) { ?>
            <span><?php echo get_error('password'); ?></span><br>
        <?php  } ?>
        <button type="submit">register</button>
    </form>
</body>

</html>