
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



$tmp_file1=$_FILES['front']['tmp_name1'];
$front=date('m-d-Y_hia').'-'.$firstname.'-'.$lastname.'-front.jpg';
move_uploaded_file($tmp_file1, $upload_dir."/".$front);

$tmp_file2=$_FILES['back']['tmp_name2'];
$back=date('m-d-Y_hia').'-'.$firstname.'-'.$lastname.'-back.jpg';
move_uploaded_file($tmp_file2, $upload_dir."/".$back);


$servername = "localhost";
$username = "forge";
$password = "rHSFYv0FmrmuqHlxPXQF";
$dbname = "forge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
     	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erreur!');
    window.location.href='../';
    </script>");
}


$sql = "INSERT INTO people (first_name, last_name, email, address, type, phone, front, back) VALUES ('$firstname', '$lastname', '$email', '$address', '$type', '$phone', '$front', '$back')";

if ($conn->query($sql) === TRUE) {
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Candidature Spontanée Ressue!');
    window.location.href='../';
    </script>");
} else {
   	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erreur!');
    window.location.href='../';
    </script>");
}
$conn->close();


?>
