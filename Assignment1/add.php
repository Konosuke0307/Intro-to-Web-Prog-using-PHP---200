<?php

$servername = "your_database_server";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$employeeName = $_POST['employeeName'];
$hoursWorked = $_POST['hoursWorked'];

$sql = "INSERT INTO employee_info (employee_name, hours_worked) VALUES ('$employeeName', $hoursWorked)";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
