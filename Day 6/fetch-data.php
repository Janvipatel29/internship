<?php
$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

$connection=mysqli_connect($host,$username,$password,$dbname);

$q=mysqli_query($connection,
   "select * from tbl_user")
    or die("Error".mysqli_error($connection));

  $row=mysqli_fetch_row($q);

  print_r($row);
 echo $row[0].$row[1].$row[2].$row[3];

$row=mysqli_fetch_array($q);
echo"<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo"<br>";
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_moblie'];

