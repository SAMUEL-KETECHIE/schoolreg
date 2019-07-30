<?php
include '../db.php';
session_start();
$studentNumber=$_SESSION['stdNo'];

?>

<!DOCTYPE html>

<html>
<?php
include '../db.php';
include "studentHeader.php";
?>
<body >
<?php
include "../navbar.php";
?>
<!-- END OF NAVIGATION BAR -->
<div id="wrapper">
    <?php
    include "../sidebar.php";
    ?>
    <div  id="page-content-wrapper">
        <div class="container-fluid main-card student-container">
            <!--Main Body-->
            <h5 class="text-center text-primary panel panel-heading"><?php echo $studentNumber; ?></h5>
            <!-- end of Main body -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="alert alert-warning" id="snack_bar_warning"></div>
                    <div class="alert alert-success" id="snack_bar_success"></div>
                    <div class="alert alert-danger" id="snack_bar_danger"></div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <?php
            include "../footer.php";
            ?>
            <!-- end of footer -->
        </div>
    </div>
</div>
</body>
</html>