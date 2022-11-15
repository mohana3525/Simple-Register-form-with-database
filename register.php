<?php
include('connection.php');

$username=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$Gmail=$_POST['Mail'];
$password=$_POST['password'];
$password1=$_POST['password1'];

if($password != $password1){
    echo '<script>
    alert("password not match"); 
    window.location="../partials/index.php";
    </script>';
}
else{
    $sql = "INSERT INTO `form`(`name`, `address`, `phone`, `mail`, `password`, `password1`) VALUES ('$username','$address','$phone','$Gmail','$password','$password1')";

    $result=mysqli_query($conn,$sql);


    if($result)
    {
        echo '<script>
        alert("sucessfull");
        window.location="../partials/login.php";
        </script>';

    }
    else{

        die(mysqli_error($conn));
    }
}


?>
