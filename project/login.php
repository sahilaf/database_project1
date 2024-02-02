<?php
include("connection.php");
if(isset($_POST['submit'])){
$username = $_POST['user'];
$password = $_POST['pass'];

$sql ="select * from info where user_name ='$username' and pass ='$password'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count =mysqli_num_rows($result);

if($count==0){
    echo '<script>
    window.location.href ="index.php";
    alert("login failed")
    </script>';
}
else
{
    header("Location: welcome.php/");
}
}
?>