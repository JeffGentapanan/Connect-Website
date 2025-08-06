<?php

$conn = mysqli_connect("localhost", "root","", "BSIT",);
if(!$conn){
    die("wala connect");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "Select * from students Where email = '$email' and password = '$password'";

$result = mysqli_query($sql);

if (mysqli_num_rows($result)>0){
    header("Location: home.html");
    exit();
} 
else{
        echo "wala na";
    }

    my_close($conn);
?>