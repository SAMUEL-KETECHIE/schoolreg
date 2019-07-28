<?php
header('Access-Control-Allow-Origin: *');
if ( 0 < $_FILES['file']['error'] ) {
   echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else {
    $target_path = $_SERVER['DOCUMENT_ROOT'] . "/studentImages/" . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
    echo $target_path;
}
?>