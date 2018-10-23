
<?php


$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];


$servername = "localhost";
$username = "forge";
$password = "ZUMeAhYa2FsU8GITdoHs";
$dbname = "forge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
     	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erreur!');
    window.location.href='marocemploi.live';
    </script>");
}


$sql = "INSERT INTO people (first_name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
$v= $conn->query($sql);

$conn->close();
 echo "Merci pour vorte message!";

?>

