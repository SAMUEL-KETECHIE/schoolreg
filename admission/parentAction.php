<?php
include '../db.php';
session_start();

if(isset($_POST['submitparent'])){
    if(isset($_SESSION['STDNO'])){
        $studentNo=$_SESSION['STDNO'];

        $fname=$_POST['fname'];
        $fnation=$_POST['fnation'];
        $fhome=$_POST['fhome'];
        $focc=$_POST['focc'];
        $fphone=$_POST['fphone'];
        $mname=$_POST['mname'];
        $mnation=$_POST['mnation'];
        $mhome=$_POST['mhome'];
        $mocc=$_POST['mocc'];
        $mphone=$_POST['mphone'];
        $paddr=$_POST['paddr'];

        $nokname=$_POST['nokname'];
        $nokphone=$_POST['nokphone'];


        $parentquery="INSERT INTO parent (f_name,f_nlty,f_htown,f_phoneno,f_occ,m_name,m_nlty,m_htown,m_phoneno,m_occ,parent_addr,std_no) 
            values ('$fname','$fnation','$fhome','$fphone','$focc','$mname','$mnation','$mhome','$mphone','$mocc','$paddr','$studentNo')";
        $parentresult = mysqli_query($conn,$parentquery);

        $nokquery="INSERT INTO nextofkin (nok_name,nok_phoneno,std_no) values ('$nokname','$nokphone','$studentNo')";
        $nokresult = mysqli_query($conn,$nokquery);

        if($parentresult && $nokresult){
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
?>