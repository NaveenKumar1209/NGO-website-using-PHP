<?php
include("config.php");
// $servername = 'localhost';
// $username = 'root';
// $password = '';

// // Create connection
// $con = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Database name
// // $db = "ngo_db1";

// // Check if the database exists
// $sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db'";
// $result = mysqli_query($con, $sql);

// if (mysqli_num_rows($result) == 0) {
//     // Database does not exist, create it
//     $sql = "CREATE DATABASE $db";
//     if (mysqli_query($con, $sql)) {
//         echo "Database created successfully";
//     } else {
//         echo "Error creating database: " . mysqli_error($con);
//     }
// } else {
//     echo "Database already exists";
// }




// use ngo db for further queries
// mysqli_select_db($con, $db);

// $table_name = "donation_tbl";

// $query = "SELECT ID FROM $table_name";
// $result = mysqli_query($con, $query);

// $sql = "CREATE TABLE IF NOT EXISTS
//         $table_name(
//             Name VARCHAR(50),
//             Email VARCHAR(50),
//             Phone VARCHAR(10),
//             Gender VARCHAR(10),
//             Age INT,
//             Donated_amount INT,
//             Payment_mode VARCHAR(50),
//             Payment_date DATETIME DEFAULT CURRENT_TIMESTAMP
//         )";

// mysqli_query($con, $sql);



// insert query


$name = $_SESSION['name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$gender = $_SESSION['gender'];
$age = $_SESSION['age'];
$amount = $_POST['amount'];
$mode  = $_POST['mode'];



$sql = "INSERT INTO donation_tbl (Name, Email, Phone,  Gender, Age, Donated_amount, Payment_mode) values (?,?,?,?,?,?,?);";
$pst = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($pst, "ssssiis", $name, $email, $phone, $gender, $age, $amount, $mode);
mysqli_stmt_execute($pst);


mysqli_close($con);
