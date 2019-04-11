<?php
$regname=$_POST['name'];
$regemail=$_POST['email'];
$repass=$_POST['pass'];
include 'Database.php';

/*
 database variable name*/
$dnam=null;
$dpas=null;
$dmail=null;
$valid=true;
$PDO=Database::connect();
$sql="INSERT INTO `admin`(`user_name`, `user_pass`, `user_email`) VALUES (?,?,?)";


if (!empty($_POST)){
    if ($regname==''){
       echo "<script>alert('Please enter the password')</script>";
$valid=false;
    }
    if ($regemail==''){
        echo "Please Enter Your mail Id";
        $valid=false;
    }
    if ($repass==''){
        echo "plaese enter yout password";
        $valid=false;
    }
}
if ($valid){
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q=$PDO->prepare($sql);
    $q->execute(array($regname,$repass,$regemail));
Database::disconnect();
echo "You have Registered succsessfully";
}
else{
    echo " try again";
}

/*$sql="select * from admin WHERE user_name='$dnam'And user_email=='$dmail' AND user_pass='$dpas';";
$PDO=Database::connect();
if ($PDO=true){
    if ($regname==''){
        echo "Please Enter your name";
    }
    if ($regemail==''){
        echo "Please Enter Your mail Id";

    }
    if ($repass==''){
        echo "plaese enter yout password";

    }
    if ($regname=$dnam && $regemail=$dmail && $repass=$dpas){
        echo "log in successfuly";
    }
    else{
        echo "sorry";
    }
}*/