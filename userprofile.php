<?php include ('connData.txt');?>
<?php include ('userportal.php');?>

<?php
// $user = $_POST['uname'];
$sql = " SELECT u.uname
FROM
USER AS u;
WHERE
u.uname = 'Gpie'";

$result = mysqli_query($conn,$sql);

// while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
// {
// print "<tr><td>$row[uname] </td></tr>	";
// }

?>