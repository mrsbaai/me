
<?php
$upload_dir="../uploads";
$target_file="";
$tmp_file="";

 $tmp_file=$_FILES['front']['tmp_name'];
        $target_file=basename($_FILES['front']['name']);
            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file))
        {   
        echo "File uploaded <br />";

        }
        else {
              echo "Something went Wrong !!<br/>";
            }
?>
