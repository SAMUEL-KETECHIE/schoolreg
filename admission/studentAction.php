<?php
include '../db.php';

if(isset($_POST['submitstudent'])){
    $stdname=$_POST['stdname'];
    $stddob=$_POST['stddob'];
    $placeob=$_POST['placeob'];
    $stdaddr=$_POST['stdaddr'];
    $stdclass=$_POST['stdclass'];

    $stdNo='EK';
    $numquery="select * from student ORDER BY std_id DESC LIMIT 1";
    $numresult = mysqli_query($conn,$numquery);
    $row=mysqli_fetch_array($numresult);
    $lastid=$row['std_id'];
    $studentNo= $stdNo . $lastid;

    $stdimg=$_POST['stdimg'];

    $schname=$_POST['txtprevsch'];
    $lvl=$_POST['txtprevschlevel'];
    $dateattnd=$_POST['txtprevschdate'];
    $schaddr=$_POST['txtprevschaddr'];

    $specneed=$_POST['txtspecneed'];
    $sickcon=$_POST['txtsickcon'];
    $med=$_POST['txtmed'];
    $allegies=$_POST['txtalleg'];
    $eyeprob=$_POST['txteyeprob'];
    $earprob=$_POST['txtearprob'];


    $stdquery="INSERT INTO student (std_name,std_no,std_dob,std_pob,std_haddr,std_class) values ('$stdname','$studentNo','$stddob','$placeob','$stdaddr','$stdclass')";
    $stdresult = mysqli_query($conn,$stdquery);
    if($stdresult){

        $schquery="INSERT INTO schoolrecords (sch_name,sch_addr,d_attd,lev_rd,std_no) values ('$schname','$schaddr','$dateattnd','$lvl','$studentNo')";
        $schresult = mysqli_query($conn,$schquery);


        $healthquery="INSERT INTO healthrecords (spec_nds,sick_con,med,allegies,eye_prob,ear_prob,std_no) values ('$specneed','$sickcon','$med','$allegies','$eyeprob','$earprob','$studentNo')";
        $healthresult = mysqli_query($conn,$healthquery);

        $imgquery="INSERT INTO studentimage (image,image_desc,std_no) values ('$stdimg','$stdname','$studentNo')";
        $imgresult=mysqli_query($conn,$imgquery);

        /*
        if($imgresult){
            $target_dir = "studentImages/";
            $target_file = $target_dir . basename($_FILES["stdimage"]["name"]);
            $destination=$target_dir . $stdimg;
            move_uploaded_file($stdimg,$target_file);
        }
        */
        echo 'OK';
    }
}
?>