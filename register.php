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
include "header.php";
?>
<body >
<?php
include "navbar.php";
?>
<!-- END OF NAVIGATION BAR -->

<div class="container-fluid page-gradient">
    <div class="row">
        <div class="col-md-1 col-xs-1 col-lg-1"></div>
        <div class="col-md-10 col-xs-10 col-lg-10">
            <p class="text-center text-primary panel panel-heading panel-primary txtHead">Admission Form</p>
            <form class="form-horizontal" action="" method="POST">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <label class="label label-info" for="txtstdname"> <span class="glyphicon glyphicon-user"></span> Child's Full Name </label>
                        <input class="form-control" type="text" name="txtstdname" id="txtstdname" required placeholder="John Doe Bright" autocomplete="off"/>
                        <br>
                        <label class="label label-info" for="txtdob"> <span class="glyphicon glyphicon-calendar"></span> Child's Date of Birth </label>
                        <input class="form-control" id="txtdob" name="txtdob" required type="date"/>
                        <br>
                        <label class="label label-info" for="txtpob"> <span class="glyphicon glyphicon-map-marker"></span> Place of Birth </label>
                        <input class="form-control" type="text" id="txtpob" name="txtpob" required placeholder="Kokomlemle-Accra" autocomplete="off"/>
                        <hr>
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
                    </div>
                    <div class="col-md-3 col-lg-3">
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
                        <hr>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <p class="text-center text-info">School Record</p>

                        <label class="label label-info" for="txtprevsch"> <span class="glyphicon glyphicon-certificate"></span> Previous School </label>
                        <input class="form-control" type="text" name="txtprevsch" id="txtprevsch" placeholder="Wendolin Int. School" autocomplete="off"/>
                        <br>
                        <p class="text-center text-info">House Information</p>

                        <label class="label label-info" for="txtpop"> <span class="glyphicon glyphicon-"></span> House Population </label>
                        <input class="form-control" id="txtpop" name="txtpop" type="number"/>
                        <br>
                        <label class="label label-info" for="txthlang"> Home Language </label>
                        <input class="form-control" type="text" id="txthlang" name="txthlang" placeholder="Twi" autocomplete="off"/>
                        <hr>
                        <label class="label label-info" for="txthaddr"> House Address/E-mail </label>
                        <textarea class="form-control txtArea" type="text" id="txthaddr" name="txthaddr" autocomplete="off">
                        </textarea>
                        <br>
                        <p class="text-center text-info">Health Record</p>

                        <label class="label label-info" for="txtspecneed"> Any Special Needs </label>
                        <input class="form-control" type="text" id="txtspecneed" name="txtspecneed" placeholder="Diabetic" autocomplete="off"/>
                        <br>
                        <label class="label label-info" for="txtsickcon"> Sickness Condition </label>
                        <input class="form-control" type="text" name="txtsickcon" id="txtsickcon" placeholder="Critical" autocomplete="off"/>
                        <br>
                        <label class="label label-info" for="txtmed"> Medication </label>
                        <input class="form-control" type="text" name="txtmed" id="txtmed" placeholder="Asperine" autocomplete="off"/>
                        <hr>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <label class="label label-info" for="txtalleg"> Any Allegies </label>
                        <input class="form-control" type="tel" name="txtalleg" id="txtalleg" autocomplete="off"/>
                        <br>
                        <label class="label label-info" for="txteyeprob"> Eye Problem </label>
                        <input class="form-control" type="text" name="txteyeprob" id="txteyeprob" autocomplete="off"/>
                        <br>
                        <label class="label label-info" for="txtearprob"> Ear Problem </label>
                        <input class="form-control" id="txtearprob" name="txtearprob" type="text" autocomplete="off"/>
                        <br>

                        <label class="label label-info" for="txtother"> Other Information </label>
                        <textarea class="form-control txtArea" type="text" id="txtother" name="txtother" autocomplete="off">
                        </textarea>
                        <hr>
                        <div class="btn-group pull-right" role="group">
                            <button class="btn btn-success" id="btn_save_std"><span class="glyphicon glyphicon-check"></span> &nbsp;Save </button>
                            <button class="btn btn-danger pull-right" id="btn_reset_std"><span class="glyphicon glyphicon-refresh"></span> &nbsp;Reset </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-1 col-xs-1 col-lg-1"></div>
    </div>
</div>
<!-- end of Main body -->
<?php
include "footer.php";
?>
<!-- end of footer -->
</body>
</html>