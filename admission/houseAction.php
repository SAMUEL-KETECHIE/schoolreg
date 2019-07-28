<?php
include '../db.php';
session_start();

if(isset($_POST['submithouse'])){
    if(isset($_SESSION['STDNO'])){

        $studentNo=$_SESSION['STDNO'];

        $hpopu=$_POST['hpopu'];
        $hlang=$_POST['hlang'];
        $haddr=$_POST['haddr'];

        $other=$_POST['other'];

        $housequery="INSERT INTO house (h_addr,h_popu,h_lang,std_no) values ('$haddr','$hpopu','$hlang','$studentNo')";
        $houseresult = mysqli_query($conn,$housequery);

        $otherquery="INSERT INTO otherinfo (others,std_no) values ('$other','$studentNo')";
        $otherresult = mysqli_query($conn,$otherquery);

        if($houseresult && $otherresult){
            unset($_SESSION['STDNO']);
            echo 'OK';
        }
        else{
            echo 'An error occured';
        }
    }
    else{
        echo 'No student';
    }


}
