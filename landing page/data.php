<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
$con=new mysqli('localhost','root','','dataform');
if($con){
    $sql="insert into fitness (username,password,email) values( '$username', '$password', '$email')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}

}
?>