<?php
$host='localhost';
$username="root";
$password="";
$database="conection";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    echo"Success";
    $query="insert into users(name,email,password) values('".$_POST['name']."','".$_POST['email']."','".$hashed_password."')";


    if (mysqli_query($conn, $query)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
}
header('Location: login.php')
?>