<?php
 //include_once 'db.php';
/*session_start();

if(isset($_SESSION["uid"])){
	header("location: user.php");
}
 */
?>

<!DOCTYPE html>

<html>
<?php include "header.php"; ?>
<body >
<?php include "navbar.php"; ?>
<!-- END OF NAVIGATION BAR -->
<div id="wrapper">
<?php
include "sidebar.php";
?>
    <div  id="page-content-wrapper" class="main-container">

        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-4">
                    <div class="single-card">
                        <h4 class="card-beta"> Total Students</h4>
                        <hr>
                        <span class="badge badge-dark badger" id="totalStudents">200</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-card">
                        <h4 class="card-beta"> Total Subjects</h4>
                        <hr>
                        <span class="badge badge-dark badger" id="totalSubjects">10</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-card">
                        <h4 class="card-beta"> Total Classes</h4>
                        <hr>
                        <span class="badge badge-dark badger" id="totalStudents">15</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event-card panel panel-info">
                        <h4 class="card-beta"> Events </h4>
                        <hr>
                        <label class="label label-default"> Event 1</label>
                        <input class="label label-default" id="event1" disabled>All student are to pay their fees before end of August.</input>
                        <hr>
                        <label class="label label-default"> Event 2</label>
                        <input class="label label-default" id="event2" disabled>PTA meeting on Wednesday 31st July, 2019 08:00AM.</input>
                        <hr>
                        <label class="label label-default"> Event 3</label>
                        <input class="label label-default" id="event2" disabled>PTA meeting on Wednesday 31st July, 2019 08:00AM.</input>

                        <hr>
                        <label class="label label-default"> Event 4</label>
                        <input class="label label-default" id="event2" disabled>PTA meeting on Wednesday 31st July, 2019 08:00AM.</input>

                    </div>
                </div>
            </div>
        </div>
        <!--<div class="overlay"></div>-->
    </div>

    <!-- end of Main body -->
    <?php include "footer.php"; ?>
    <!-- end of footer -->
</div>
</body>
</html>