
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

$resource = $conn->query('SELECT * FROM people');
if ( !$resource ) die('Database Error: '.$conn->error);
while ( $row = $resource->fetch_assoc() ) {
    echo "{$row['field']}";
}
$resource->free();
$conn->close();

?>
