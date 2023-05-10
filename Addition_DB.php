<?php
$host="localhost";
$username="root";
$password="";
$database="conection";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    echo"Success";
    $option = $_POST['option'];
    $query="insert into project1(Name,Quantity,Availability) values('".$_POST['name']."','".$_POST['Amount']."',('$option'))";
    
    if ($conn->query($query)==true) {
        echo "Data inserted";
    }else{
        echo "failed";
    }

}
header('Location: Form.php');
?>