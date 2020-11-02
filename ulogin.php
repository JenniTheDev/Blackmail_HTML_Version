<?php include ('connData.txt');?>
<?php
    $user = $_POST['uname'];
    $paswrd = $_POST['psw'];
    $sql = " SELECT u.fname, u.paswrd
    FROM
    USER AS u;
    WHERE
    u.uname = '$user'
    u.paswrd = '$paswrd'";

header("Location: userportal.php");

    if ($sql) {
        echo 'You have successfully loged in!';
    }
    else {
        echo 'No username or password found, please try again.';
    }


?>