<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student1_db";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

if(!$conn){
    die("Connection Failed");
}

$student_id = $_POST['student_id'];
$fullname   = $_POST['fullname'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$gender     = $_POST['gender'];
$department = $_POST['department'];
$address    = $_POST['address'];

$sql = "INSERT INTO students
(student_id, fullname, email, phone, gender, department, address)

VALUES

('$student_id',
 '$fullname',
 '$email',
 '$phone',
 '$gender',
 '$department',
 '$address')";

if(mysqli_query($conn, $sql)){
    echo "
    <h2>Student Registered Successfully</h2>
    ";
}
else{
    echo "Error : " . mysqli_error($conn);
}

mysqli_close($conn);

?>