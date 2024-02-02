<?php
$servername="localhost";
$db_name ="project_login";
$username ="root";
$pass ="";
$conn =new mysqli($servername,$username,$pass,$db_name);
if($conn->connect_error)
{
    die("Connection fail" .$conn->connect_error);
}
echo "";
?>