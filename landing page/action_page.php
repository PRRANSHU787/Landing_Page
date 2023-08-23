<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $subject=$_POST['subject'];
$con=new mysqli('localhost','root',' ','dataform');
if($con){
    $sql="insert into fitness (firstname,lastname,message) values( '$firstname', '$lastname', '$subject')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}
}
else{
    echo "Data is not inserted";
    // die(mysqli_error($con));
}
?>