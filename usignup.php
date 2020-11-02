<?php include ('connData.txt');?>
<?php
    $user = $_POST['uname'];
    $paswrd = $_POST['psw'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $money = 100;
    $bmailed = 0;

    $sql = "INSERT INTO USER (uname, paswrd, fname, lname, email, credits, blackmailed)
    VALUES ('$user', '$paswrd', '$first', '$last', '$email', '100', '0');";
    mysqli_query($conn,$sql);

    header("Location: userportal.php");
?>
