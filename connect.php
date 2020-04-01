<?php
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$department=$_POST['department'];
$phone = $_POST['phone'];
$address = $_POST['address'];


//Database connection
$servername ="localhost";
$username = "id12983082_form";
$password="ahoaham513";
$dbname="id12983082_platon";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
    
}else
$stmt = $conn->prepare("insert into padai(fullname,email,gender,college,department,phone,address) values (?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss",$fullname,$email,$gender,$college,$department,$phone,$address);
$stmt->execute();
echo "Registered successfully....";
$stmt->close();
$conn->close();

?>