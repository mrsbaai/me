
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


$sqlimage = "SELECT front FROM people;
$imageresult1 = mysql_query($sqlimage);

while($rows = mysql_fetch_assoc($imageresult1))
{       
    $image = $rows['image'];    
    print $image;
}
?>
