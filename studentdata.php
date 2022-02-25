<?php


$name = $_POST["name"];
$fname = $_POST["fname"];
$fee = $_POST["fee"];


$connect = mysqli_connect('localhost', 'root','','studentform');

if(mysqli_connect_error())
{
    echo "Connection to database failed!";
}

$insert = "INSERT INTO student(name,fname,fees)VALUES('$name','$fname','$fee')";


$result = mysqli_query($connect,$insert);

if($result){
    echo '<script>alert("Data saved successfully!")</script>';
    
}

else{
    echo "Data insertion failed!";
}

?>