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
<?php
include "admissionHeader.php";
?>
<body>
<?php
include "../navbar.php";
?>
<!-- END OF NAVIGATION BAR -->
<div id="wrapper">
    <?php
    include "../sidebar.php";
    ?>
<!-- INCLUDE SIDE BAR HERE-->
    <div  id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
                <div class="col-md-10 col-xs-10 col-lg-10 page-gradient">
                    <h3 class="text-center text-primary panel panel-heading panel-primary txtHead">
                        Admission Form
                    </h3>
                    <form class="form-horizontal page-white form-card" action="" method="POST">
                        <div class="row">
                            <div class="col-md-1 col-lg-1"></div>
                            <div class="col-md-3 col-lg-3">

                                <h4 class="text-center text-info">Father's Information</h4>
                                <label class="label label-info form-labels" for="txtfname"> <span class="glyphicon glyphicon-user"></span> Father's Name </label>
                                <input class="form-control" type="text" id="txtfname" name="txtfname" required placeholder="John Doe Wen" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtfnalty"><span class="glyphicon glyphicon-globe"></span> Nationality </label>
                                <input class="form-control" type="text" id="txtfnalty" name="txtfnalty" required placeholder="Congoles" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtfhome"><span class="glyphicon glyphicon-globe"></span> HomeTown </label>
                                <input class="form-control" type="text" name="txtfhome" id="txtfhome" required placeholder="Jamestown" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtfocc"> Father's Occupation </label>
                                <input class="form-control" type="text" name="txtfocc" id="txtfocc" required placeholder="Teacher" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtfphone"><span class="glyphicon glyphicon-phone"></span> Father's Phone Number </label>
                                <input class="form-control" type="tel" name="txtfphone" id="txtfphone" required placeholder="024xxxxxxx" autocomplete="off"/>

                                <hr>
                            </div>
                            <div class="col-md-3 col-lg-3">

                                <h4 class="text-center text-info">Mother's Information</h4>
                                <label class="label label-info form-labels" for="txtmname"><span class="glyphicon glyphicon-user"></span> Mother's Name </label>
                                <input class="form-control" type="text" id="txtmname" name="txtmname" required placeholder="Jennifa Doe" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtmnalty"><span class="glyphicon glyphicon-globe"></span> Nationality </label>
                                <input class="form-control" type="text" id="txtmnalty" name="txtmnalty" required placeholder="Togolese" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtmhome"><span class="glyphicon glyphicon-globe"></span> Hometown </label>
                                <input class="form-control" type="text" name="txtmhome" id="txtmhome" placeholder="Jamestown" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtmocc"> Mother's Occupation </label>
                                <input class="form-control" type="text" name="txtmocc" id="txtmocc" required placeholder="Trader" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtmphone"><span class="glyphicon glyphicon-phone"></span> Mother's Phone Number </label>
                                <input class="form-control" type="tel" name="txtmphone" id="txtmphone" placeholder="024xxxxxxx" autocomplete="off"/>
                                <hr>


                            </div>
                            <div class="col-md-3 col-lg-3">
                                <br>
                                <br>
                                <br>
                                <label class="label label-info form-labels" for="txtpaddress"> <span class="glyphicon glyphicon-map-marker"></span> Parent/Guardians Postal Address </label>
                                <textarea class="form-control txtArea" name="txtpaddress" id="txtpaddress" required autocomplete="off">
                                </textarea>
                                <br>

                                <label class="label label-info form-labels" for="txtnok"> <span class="glyphicon glyphicon-user"></span> Next of Kin Name </label>
                                <input class="form-control" type="text" id="txtnok" name="txtnok" placeholder="John Doe" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtnokphone"><span class="glyphicon glyphicon-phone"></span> Next of Kin Phone Number </label>
                                <input class="form-control" type="tel" name="txtnokphone" id="txtnokphone" placeholder="024xxxxxxx" autocomplete="off"/>
                                <br>
                                    <button class="btn btn-default" id="btn_back_to_child"><span class="glyphicon glyphicon-chevron-left"></span> &nbsp; Back </button>
                                    <button class="btn btn-danger pull-right" id="btn_reset_parent"><span class="glyphicon glyphicon-remove-circle"></span> &nbsp;Reset</button>
                                <br>
                                <br>
                                    <button class="btn btn-warning pull-right" id="btn_save_parent"><span class="glyphicon glyphicon-check"></span> &nbsp;Save and Continue ></button>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr>
                            </div>
                            <div class="col-md-1 col-lg-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="alert alert-warning" id="snack_bar_warning"></div>
                                <div class="alert alert-success" id="snack_bar_success"></div>
                                <div class="alert alert-danger" id="snack_bar_danger"></div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
            </div>
        </div>
    </div>

    <!-- end of Main body -->
    <?php
    include "../footer.php";
    ?>
    <!-- end of footer -->
</div>
</body>
</html>