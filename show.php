<?php
$dirname = "/uploads";
$images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<h1>'.$image.': </h1><img src="'.$image.'" /><br />';
}