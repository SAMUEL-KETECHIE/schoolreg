<?php
include '../db.php';

if(isset($_POST['totalstudent'])){

    $query="SELECT * FROM student";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
    echo $count;
}