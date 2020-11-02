<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
  <title>UserPortal Blackmail</title>
  <meta charset="UTF_8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <container>
    <div class="header">
      <!--This image should be bigger, then shrink with page. Leaving as is for now-->
      <div style=" text-align: center" class="img-responsive"> <img src="img/blackmailLogo.png" alt="Blackmail"
          style="text-align: center;  margin: 25px 25px;">
        <div class="header-right">
        <a href = "userprofile.php">User</a> 
        <a class="active" href="index.html">Home</a>
          <a href="login.html">Login</a>
          <a href="contact.html">Contact</a>
          <a href="remove.html">Remove Blackmail</a>
          <a href="submit.html">Submit Blackmail</a>
        </div>
      </div>
    </div>
  </container>
</head>

<body>

  <container>

    <h1> This is the user portal. It will show all the blackmail available </h1>

  </container>
  <!-- This needs to be completed. Not sure if it's correct. Following the guide at https://www.w3schools.com/php/php_mysql_select.asp -->
    <?php include ('connData.txt');?>
    <?php
    $sql = " SELECT u.fname, u.lname, u.uname 
    FROM
    USER AS u;";
    $result = mysqli_query($conn,$sql);
    print "<pre>";
    print "<table border=1>";
    print "<tr><td>First Name</td><td> Last Name </td><td> Username </td>";
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
    {
    print "\n";
    print "<tr><td>$row[fname] </td><td> $row[lname]  </td><td> $row[uname]  </td></tr>	";
    }
    print "</table>";
    print "</pre>";
    ?>

    <div id = "post1">
        <img src = "https://i.redd.it/o3g7izh9xqw51.jpg" alt = "BM1">
    </div>
    <div title = "user2">
      <?php include("post/post1.php"); ?>
    </div>

    <div id = "post2">
        <img src = "https://i.redd.it/xnk4utkqrpw51.jpg" alt = "BM2">
    </div>
    <div title = "user2">
      <?php include("post/post2.php"); ?>
    </div>

    <div id = "post3">
        <img src = "https://i.redd.it/56g9nk8jpqw51.jpg" alt = "BM3">
    </div>
    <div title = "user3">
      <?php include("post/post3.php"); ?>
    </div>

    <div id = "post4">
        <img src = "https://i.redd.it/qjearo7bnqw51.jpg" alt = "BM4">
    </div>
    <div title = "user4">
      <?php include("post/post4.php"); ?>
    </div>

    <div id = "post5">
        <img src = "https://i.redd.it/pocz1kfyunw51.jpg" alt = "BM5">
    </div>
    <div title = "user5">
      <?php include("post/post5.php"); ?>
    </div>

</body>

</main>
<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
<script src="scripts/main.js" charset="utf-8"></script>

</html>