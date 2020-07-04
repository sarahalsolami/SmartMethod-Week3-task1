<?php

include "dbConn.php"; // Using database connection file here


//[name]
if(isset($_POST['Stop']))
{


     $query = "INSERT INTO Robot (bstop , bright , bleft , bbackward , bforward)
      VALUES ('S','-','-','-','-')";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert ("Data Saved") </script>';
    }
    else
    {
      echo '<script type="text/javascript"> alert ("Data not Saved") </script>';
    }
}

///////

if(isset($_POST['Forward']))
{
    $fw = $_POST['Forward'];
    $query = "INSERT INTO Robot (bstop , bright , bleft , bbackward , bforward)
     VALUES ('-','-','-','-','F')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert ("Data Saved") </script>';
    }
    else
    {
      echo '<script type="text/javascript"> alert ("Data not Saved") </script>';
    }
}
////////
if(isset($_POST['Backword']))
{
$bw = $_POST['Backword'];

$query = "INSERT INTO Robot (bstop , bright , bleft , bbackward , bforward)
 VALUES ('-','-','-','B','-')";

$query_run = mysqli_query($connection, $query);

if($query_run)
{
echo '<script type="text/javascript"> alert ("Data Saved") </script>';
}
else
{
echo '<script type="text/javascript"> alert ("Data not Saved") </script>';
}
}

/////////

if(isset($_POST['Right']))
{
$r = $_POST['Right'];


$query = "INSERT INTO Robot (bstop , bright , bleft , bbackward , bforward)
 VALUES ('-','R','-','-','-')";

$query_run = mysqli_query($connection, $query);

if($query_run)
{
echo '<script type="text/javascript"> alert ("Data Saved") </script>';
}
else
{
echo '<script type="text/javascript"> alert ("Data not Saved") </script>';
}
}

///

if(isset($_POST['Left']))
{
$l = $_POST['Left'];

$query = "INSERT INTO Robot (bstop , bright , bleft , bbackward , bforward)
 VALUES ('-','-','L','-','-')";

$query_run = mysqli_query($connection, $query);

if($query_run)
{
echo '<script type="text/javascript"> alert ("Data Saved") </script>';
}
else
{
echo '<script type="text/javascript"> alert ("Data not Saved") </script>';
}
}
?>
