<?php
include 'Database.php';
$conn=Database::connect();
$lname=$_POST['username'];
$lpass=$_POST['password'];

$sql="SELECT `user_name`,`user_pass` FROM `admin` WHERE  user_name=$lname AND user_pass=$lpass;";
$i=exec($sql);
if ($conn==true){
if ($i=['user_name']=$lname && $i=['user_pass']=$lpass){
echo "welcome";
}
}
