<?php
$server ="localhost";
$user ="root";
$password ="";
$dbase ="ekis_montessori";
$portNumber="3306";

$conn = mysqli_connect($server,$user,$password,$dbase,$portNumber);

/*
if($conn){

    echo '<div class="alert alert-success">';
        echo '<b>Connected to database '.$dbase.' Successfully. </b>';
    echo '</div>';

}else{
    die("Not connected" . mysqli_connect_error());

}
*/
?>