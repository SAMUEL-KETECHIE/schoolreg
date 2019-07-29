<?php
include '../db.php';


if(isset($_POST['moveToEdit'])){

}

if(isset($_POST['deletestudent'])){
    if(isset($_POST['stdNo'])){
        $studentNo=$_POST['stdNo'];
        $stdDelQuery="DELETE FROM student WHERE std_no='$studentNo'";
        $stdResult = mysqli_query($conn,$stdDelQuery);
        if($stdResult){

            $imgDelQuery="DELETE FROM studentimage WHERE std_no='$studentNo'";
            $imgResult = mysqli_query($conn,$imgDelQuery);

            $schDelQuery="DELETE FROM schoolrecords WHERE std_no='$studentNo'";
            $schResult = mysqli_query($conn,$schDelQuery);

            $pDelQuery="DELETE FROM parent WHERE std_no='$studentNo'";
            $pResult = mysqli_query($conn,$pDelQuery);

            $othDelQuery="DELETE FROM otherinfo WHERE std_no='$studentNo'";
            $othResult = mysqli_query($conn,$othDelQuery);

            $nokDelQuery="DELETE FROM nextofkin WHERE std_no='$studentNo'";
            $nokResult = mysqli_query($conn,$nokDelQuery);

            $hDelQuery="DELETE FROM house WHERE std_no='$studentNo'";
            $hResult = mysqli_query($conn,$hDelQuery);

            $hlthDelQuery="DELETE FROM healthrecords WHERE std_no='$studentNo'";
            $hlthResult = mysqli_query($conn,$hlthDelQuery);

            echo "OK";
        }
    }
}

if(isset($_POST['editstudent'])){

}