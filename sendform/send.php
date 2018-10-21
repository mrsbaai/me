
<?php
$upload_dir="../uploads";
$target_file="";
$tmp_file="";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$type = $_POST['type'];



$tmp_file=$_FILES['front']['tmp_name'];
$front=date('m-d-Y_hia').'-'.$firstname.'-'.$lastname.'-front-'.basename($_FILES['front']['name']);
move_uploaded_file($tmp_file, $upload_dir."/".$front);

$tmp_file=$_FILES['back']['tmp_name'];
$back=date('m-d-Y_hia').'-'.$firstname.'-'.$lastname.'-back-'.basename($_FILES['back']['name']);
move_uploaded_file($tmp_file, $upload_dir."/".$back);


$servername = "localhost";
$username = "forge";
$password = "ZUMeAhYa2FsU8GITdoHs";
$dbname = "forge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = mysql_query("INSERT INTO people(first_name, last_name, email, address, type, phone, front, back) 
VALUES('$firstname', '$lastname', '$email', '$firstname', '$address', '$type', '$phone', '$front', '$back')")  
or die (mysql_error());



$conn->close();


?>
