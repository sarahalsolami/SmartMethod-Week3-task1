<?php
header( "refresh:5;url=Controls.html" );
include "insert.php";
include "dbConn.php"; // Using database connection file here

if(array_key_exists('Stop', $_POST)) {
  $sql = mysqli_query($connection, "SELECT * FROM Robot ORDER BY id DESC LIMIT 1");
  $p = mysqli_fetch_row($sql);
  echo $p[1];
}

else if(array_key_exists('Forward', $_POST)) {

$sql = mysqli_query($connection, "SELECT * FROM Robot ORDER BY id DESC LIMIT 1");
$p = mysqli_fetch_row($sql);
echo $p[5];

}

else if(array_key_exists('Backword', $_POST)) {
  $sql = mysqli_query($connection, "SELECT * FROM Robot ORDER BY id DESC LIMIT 1");
  $p = mysqli_fetch_row($sql);
  echo $p[4];
}

else if(array_key_exists('Right', $_POST)) {
  $sql = mysqli_query($connection, "SELECT * FROM Robot ORDER BY id DESC LIMIT 1");
  $p = mysqli_fetch_row($sql);
  echo $p[2];
}

else if(array_key_exists('Left', $_POST)) {
  $sql = mysqli_query($connection, "SELECT * FROM Robot ORDER BY id DESC LIMIT 1");
  $p = mysqli_fetch_row($sql);
  echo $p[3];}

?>
