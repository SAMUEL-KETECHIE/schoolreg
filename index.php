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
    <div  id="page-content-wrapper">
        <div class="container-fluid" >

        </div>
    </div>

    <!-- end of Main body -->
    <?php include "footer.php"; ?>
    <!-- end of footer -->
</div>
</body>
</html>