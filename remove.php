<?php


$servername="localhost";
$username="root";
$password="123";
$dbname="project";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed" .$conn->connect_error);
}
echo"connected succesfully";

$id=$_GET['id'];
$q="DELETE FROM info WHERE id=$id";

if (mysqli_query($conn, $q))
{
header('location:prolist.php');
}
?>

