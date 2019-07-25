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
                    <p class="text-center text-primary panel panel-heading panel-primary txtHead">
                        <br>
                        Admission Form</p>
                    <form class="form-horizontal page-white" action="" method="POST">
                        <div class="row">
                            <div class="col-md-3 col-lg-3"></div>
                            <div class="col-md-3 col-lg-3">

                                <p class="text-center text-info">Father's Information</p>
                                <label class="label label-info" for="txtfname"> <span class="glyphicon glyphicon-user"></span> Father's Name </label>
                                <input class="form-control" type="text" id="txtfname" name="txtfname" required placeholder="John Doe Wen" autocomplete="off"/>
                                <br>
                                <label class="label label-info" for="txtfnalty"><span class="glyphicon glyphicon-globe"></span> Nationality </label>
                                <input class="form-control" type="text" id="txtfnalty" name="txtfnalty" required placeholder="Congoles" autocomplete="off"/>
                                <br>
                                <label class="label label-info" for="txtfhome"><span class="glyphicon glyphicon-globe"></span> HomeTown </label>
                                <input class="form-control" type="text" name="txtfhome" id="txtfhome" required placeholder="Jamestown" autocomplete="off"/>
                                <br>
                                <label class="label label-info" for="txtfocc"> Father's Occupation </label>
                                <input class="form-control" type="text" name="txtfocc" id="txtfocc" required placeholder="Teacher" autocomplete="off"/>
                                <br>
                                <label class="label label-info" for="txtfphone"><span class="glyphicon glyphicon-phone"></span> Father's Phone Number </label>
                                <input class="form-control" type="tel" name="txtfphone" id="txtfphone" required placeholder="024xxxxxxx" autocomplete="off"/>

                                <hr>

                                <p class="text-center text-info">Mother's Information</p>
                                <label class="label label-info" for="txtmname"><span class="glyphicon glyphicon-user"></span> Mother's Name </label>
                                <input class="form-control" type="text" id="txtmname" name="txtmname" required placeholder="Jennifa Doe" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtmnalty"><span class="glyphicon glyphicon-globe"></span> Nationality </label>
                                <input class="form-control" type="text" id="txtmnalty" name="txtmnalty" required placeholder="Togolese" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtmhome"><span class="glyphicon glyphicon-globe"></span> Hometown </label>
                                <input class="form-control" type="text" name="txtmhome" id="txtmhome" placeholder="Jamestown" autocomplete="off"/>
                                <br>


                            </div>
                            <div class="col-md-3 col-lg-3">
                                <label class="label label-info" for="txtmocc"> Mother's Occupation </label>
                                <input class="form-control" type="text" name="txtmocc" id="txtmocc" required placeholder="Trader" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtmphone"><span class="glyphicon glyphicon-phone"></span> Mother's Phone Number </label>
                                <input class="form-control" type="tel" name="txtmphone" id="txtmphone" placeholder="024xxxxxxx" autocomplete="off"/>
                                <hr>

                                <label class="label label-info" for="txtpaddress"> <span class="glyphicon glyphicon-map-marker"></span> Parent/Guardians Postal Address </label>
                                <textarea class="form-control txtArea" name="txtpaddress" id="txtpaddress" required autocomplete="off">
                                </textarea>
                                <br>

                                <label class="label label-info" for="txtnok"> <span class="glyphicon glyphicon-user"></span> Next of Kin Name </label>
                                <input class="form-control" type="text" id="txtnok" name="txtnok" placeholder="John Doe" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtnokphone"><span class="glyphicon glyphicon-phone"></span> Next of Kin Phone Number </label>
                                <input class="form-control" type="tel" name="txtnokphone" id="txtnokphone" placeholder="024xxxxxxx" autocomplete="off"/>
                                <br>
                                    <button class="btn btn-default" id="btn_back_to_child"><span class="glyphicon glyphicon-chevron-left"></span> &nbsp; Back </button>
                                    <button class="btn btn-warning pull-right" id="btn_save_parent"><span class="glyphicon glyphicon-check"></span> &nbsp;Save and Continue ></button>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr>
                            </div>
                            <div class="col-md-3 col-lg-3"></div>
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