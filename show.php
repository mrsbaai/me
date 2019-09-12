
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


if ($result = $mysqli->query("SELECT * FROM people", MYSQLI_USE_RESULT)) {

    /* Note, that we can't execute any functions which interact with the
       server until result set was closed. All calls will return an
       'out of sync' error */
    if (!$mysqli->query("SET @a:='this will not work'")) {
        printf("Error: %s\n", $mysqli->error);
    }
    $result->close();
}

$mysqli->close();
?>
