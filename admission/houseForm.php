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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EKIS Montessori</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/wenstrap.css" />

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootbox.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body >
<?php
include "../navbar.php";
?>
<!-- END OF NAVIGATION BAR -->

<!-- INCLUDE SIDE BAR HERE-->

<div class="container-fluid page-gradient">
    <div class="row">
        <div class="col-md-1 col-xs-1 col-lg-1"></div>
        <div class="col-md-10 col-xs-10 col-lg-10">
            <p class="text-center text-primary panel panel-heading panel-primary txtHead">Admission Form</p>
            <form class="form-horizontal" action="" method="POST">
                <div class="row">
                    <div class="col-md-3 col-lg-3"></div>
                    <div class="col-md-3 col-lg-3">
                        <p class="text-center text-info">House Information</p>

                        <label class="label label-info" for="txtpop"> <span class="glyphicon glyphicon-"></span> House Population </label>
                        <input class="form-control" id="txtpop" name="txtpop" type="number"/>
                        <br>

                        <label class="label label-info" for="txthlang"> Home Language </label>
                        <input class="form-control" type="text" id="txthlang" name="txthlang" placeholder="Twi" autocomplete="off"/>
                        <br>

                        <label class="label label-info" for="txthaddr"> House Address/E-mail </label>
                        <textarea class="form-control txtArea" type="text" id="txthaddr" name="txthaddr" autocomplete="off">
                        </textarea>
                        <br>

                        <label class="label label-info" for="txtother"> Other Information </label>
                        <textarea class="form-control txtArea" type="text" id="txtother" name="txtother" autocomplete="off">
                        </textarea>
                        <br>
                        <hr>
                        <div class="btn-group pull-right" role="group">
                            <button class="btn btn-default" id="btn_back_to_parent"><span class="glyphicon glyphicon-chevron-left"></span> &nbsp; Back </button>
                            <button class="btn btn-success pull-right" id="btn_save_house"><span class="glyphicon glyphicon-send"></span> &nbsp;Save and Submit </button>
                        </div>

                    </div>
                    <div class="col-md-3 col-lg-3"></div>
                </div>
            </form>
        </div>
        <div class="col-md-1 col-xs-1 col-lg-1"></div>
    </div>
</div>
<!-- end of Main body -->
<?php
include "../footer.php";
?>
<!-- end of footer -->
</body>
</html>