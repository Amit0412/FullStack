<?php


$con=mysqli_connect('localhost','root');

if($con)
{
    echo "success";
}
else
{
    echo "no";
}


mysqli_select_db($con,'userinf');

$user=$_POST['myname'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$comm=$_POST['tes'];

$query=" insert into userdata (user,email,mobile,comment)
values('$user','$email','$mob','$comm')";

mysqli_query($con,$query);

header('location:index.php');





?>