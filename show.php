
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  
  <!-- COMMON TAGS -->
<meta charset="utf-8">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap-imageupload.min.css" rel="stylesheet">

</head>

<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    

  <div id="headerwrap">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">

		<?php
$files = glob("uploads/*.*");
for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];
	print $num."<br />";
	echo '<img src="'.$num.'" alt="random image" />'."<br /><br />";
}




?>
