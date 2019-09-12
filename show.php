
<?php
//$files = glob("uploads/*.*");
//for ($i=1; $i<count($files); $i++)
//{
	//$num = $files[$i];
	//print $num."<br />";
	//echo '<img src="'.$num.'" alt="random image" />'."<br /><br />";
//}


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


$sql = "SELECT * FROM people WHERE id = 2";
$sth = $conn->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'
}

$conn->close();
?>
