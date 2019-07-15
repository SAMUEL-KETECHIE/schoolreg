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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1 col-xs-1 col-lg-1"></div>
        <div class="col-md-10 col-xs-10 col-lg-10">
            <p class="text-center text-primary txtHead">Admission Form</p>
            <form class="form-horizontal" action="home/regFormAction.php">
                <div class="row">
                    <div class="col-md-4">
                        <label class="label label-info" for="txtstdname"> Child's Full Name </label>
                        <input class="form-control" type="text" name="txtstdname" id="txtstdname" placeholder="John Doe Bright"/>
                        <br>
                        <label class="label label-info" for="txtdob"> Child's Date of Birth </label>
                        <input class="form-control" id="txtdob" name="txtdob" type="date"/>
                        <br>
                        <label class="label label-info" for="txtpob"> Place of Birth </label>
                        <input class="form-control" type="text" id="txtpob" name="txtpob" placeholder="Kokomlemle-Accra"/>
                        <hr>

                        <label class="label label-info" for="txtfname"> Father's Name </label>
                        <input class="form-control" type="text" id="txtfname" name="txtfname" placeholder="John Doe Wen"/>
                        <br>
                        <label class="label label-info" for="txtfnalty"> Nationality </label>
                        <input class="form-control" type="text" id="txtfnalty" name="txtfnalty" placeholder="Congoles"/>
                        <br>
                        <label class="label label-info" for="txtfhome"> HomeTown </label>
                        <input class="form-control" type="text" name="txtfhome" id="txtfhome" placeholder="Jamestown"/>
                        <br>
                        <label class="label label-info" for="txtfocc"> Father's Occupation </label>
                        <input class="form-control" type="text" name="txtfocc" id="txtfocc" placeholder="Teacher"/>
                        <br>
                        <label class="label label-info" for="txtfphone"> Father's Phone Number </label>
                        <input class="form-control" type="tel" name="txtfphone" id="txtfphone" placeholder="024xxxxxxx"/>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <label class="label label-info" for="txtmname"> Mother's Name </label>
                        <input class="form-control" type="text" id="txtmname" name="txtmname" placeholder="Jennifa Doe"/>
                        <br>
                        <label class="label label-info" for="txtmnalty"> Nationality </label>
                        <input class="form-control" type="text" id="txtmnalty" name="txtmnalty" placeholder="Togolese"/>
                        <br>
                        <label class="label label-info" for="txtmhome"> HomeTown </label>
                        <input class="form-control" type="text" name="txtmhome" id="txtmhome" placeholder="Jamestown"/>
                        <br>
                        <label class="label label-info" for="txtmocc"> Mother's Occupation </label>
                        <input class="form-control" type="text" name="txtmocc" id="txtmocc" placeholder="Trader"/>
                        <br>
                        <label class="label label-info" for="txtmphone"> Mother's Phone Number </label>
                        <input class="form-control" type="tel" name="txtmphone" id="txtmphone" placeholder="024xxxxxxx"/>
                        <hr>

                        <label class="label label-info" for="txtpaddress"> Parent/Guardians Postal Address </label>
                        <textarea class="form-control" name="txtpaddress" id="txtpaddress" placeholder="Kwame Nkrumah Circle">
                        </textarea>
                        <br>
                        <label class="label label-info" for="txtnok"> Next of Kin Name </label>
                        <input class="form-control" type="text" id="txtnok" name="txtnok" placeholder="John Doe"/>
                        <br>
                        <label class="label label-info" for="txtnokphone"> Next of Kin Phone Number </label>
                        <input class="form-control" type="tel" name="txtnokphone" id="txtnokphone" placeholder="024xxxxxxx"/>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <label class="label label-info" for="txtprevsch"> Previous School </label>
                        <input class="form-control" type="text" name="txtprevsch" id="txtprevsch" placeholder="Alison School"/>
                        <br>
                        <label class="label label-info" for="txtpop"> House Population </label>
                        <input class="form-control" id="txtpop" name="txtpop" type="number"/>
                        <br>
                        <label class="label label-info" for="txthlang"> Home Language </label>
                        <input class="form-control" type="text" id="txthlang" name="txthlang" placeholder=""/>
                        <hr>
                        <label class="label label-info" for="txthaddr"> House Address </label>
                        <input class="form-control" type="text" id="txthaddr" name="txthaddr" placeholder="John Doe Wen"/>
                        <br>
                        <label class="label label-info" for="txtfnalty"> Nationality </label>
                        <input class="form-control" type="text" id="txtfnalty" name="txtfnalty" placeholder="Congoles"/>
                        <br>
                        <label class="label label-info" for="txtfhome"> HomeTown </label>
                        <input class="form-control" type="text" name="txtfhome" id="txtfhome" placeholder="Jamestown"/>
                        <br>
                        <label class="label label-info" for="txtfocc"> Father's Occupation </label>
                        <input class="form-control" type="text" name="txtfocc" id="txtfocc" placeholder="Teacher"/>
                        <br>
                        <label class="label label-info" for="txtfphone"> Father's Phone Number </label>
                        <input class="form-control" type="tel" name="txtfphone" id="txtfphone" placeholder="024xxxxxxx"/>
                        <hr>
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