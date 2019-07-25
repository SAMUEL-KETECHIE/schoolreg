
<!DOCTYPE html>

<html>
<?php
include "admissionHeader.php";
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
    <!-- INCLUDE SIDE BAR HERE-->
    <div  id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 page-gradient">
                    <h3 class="text-center text-primary panel panel-heading txtHead">
                        Admission Form
                    </h3>
                    <form class="form-horizontal page-white form-card" action="" method="POST">
                        <div class="row">
                            <div class="col-md-1 col-lg-1"></div>
                            <div class="col-md-3 col-lg-3">
                                <h4 class="text-center text-info"> Child's Information </h4>
                                <label class="label label-info form-labels" for="txtstdname"> <span class="glyphicon glyphicon-user"></span> Child's Full Name </label>
                                <input class="form-control" type="text" name="txtstdname" id="txtstdname" required placeholder="John Doe Bright" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtdob"> <span class="glyphicon glyphicon-calendar"></span> Child's Date of Birth </label>
                                <input class="form-control" id="txtdob" name="txtdob" required type="date"/>
                                <br>

                                <label class="label label-info form-labels" for="txtpob"> <span class="glyphicon glyphicon-map-marker"></span> Place of Birth </label>
                                <input class="form-control" type="text" id="txtpob" name="txtpob" required placeholder="Kokomlemle-Accra" autocomplete="off"/>
                                <hr>

                                <h4 class="text-center text-info">School Records</h4>

                                <label class="label label-info form-labels" for="txtprevsch1"> <span class="glyphicon glyphicon-certificate"></span> Previous School 1 </label>
                                <input class="form-control" type="text" name="txtprevsch1" id="txtprevsch1" placeholder="Wendolin Int. School" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschlevel1"> <span class="glyphicon glyphicon-certificate"></span> Level Reached </label>
                                <input class="form-control" type="number" name="txtprevschlevel1" id="txtprevschlevel1" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschdate1"> <span class="glyphicon glyphicon-calendar"></span> Date Attended </label>
                                <input class="form-control" type="date" name="txtprevschdate1" id="txtprevschdate1" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschaddr1"> <span class="glyphicon glyphicon-envelope"></span> Prev Sch. Address </label>
                                <input class="form-control" type="date" name="txtprevschaddr1" id="txtprevschaddr1" autocomplete="off"/>
                                <br>

                            </div>
                            <div class="col-md-3 col-lg-3">
                                <h4 class="text-center text-info "><br></h4>

                                <label class="label label-info form-labels" for="txtprevsch2"> <span class="glyphicon glyphicon-certificate"></span> Previous School 2 (Optional)</label>
                                <input class="form-control" type="text" name="txtprevsch2" id="txtprevsch2" placeholder="Palma Int. School" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschlevel2"> <span class="glyphicon glyphicon-certificate"></span> Level Reached </label>
                                <input class="form-control" type="number" name="txtprevschlevel2" id="txtprevschlevel2" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschdate2"> <span class="glyphicon glyphicon-calendar"></span> Date Attended </label>
                                <input class="form-control" type="date" name="txtprevschdate2" id="txtprevschdate2" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschaddr2"> <span class="glyphicon glyphicon-envelope"></span> Prev Sch. Address </label>
                                <input class="form-control" type="date" name="txtprevschaddr2" id="txtprevschaddr2" autocomplete="off"/>
                                <br>
                                <br>

                                <label class="label label-info form-labels" for="txtprevsch3"> <span class="glyphicon glyphicon-certificate"></span> Previous School 3 (Optional)</label>
                                <input class="form-control" type="text" name="txtprevsch3" id="txtprevsch3" placeholder="Eltrich Int. School" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschlevel3"> <span class="glyphicon glyphicon-certificate"></span> Level Reached </label>
                                <input class="form-control" type="number" name="txtprevschlevel3" id="txtprevschlevel3" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschdate3"> <span class="glyphicon glyphicon-calendar"></span> Date Attended </label>
                                <input class="form-control" type="date" name="txtprevschdate3" id="txtprevschdate3" autocomplete="off"/>
                                <br>
                                <label class="label label-info form-labels" for="txtprevschaddr3"> <span class="glyphicon glyphicon-envelope"></span> Prev Sch. Address </label>
                                <input class="form-control" type="date" name="txtprevschaddr3" id="txtprevschaddr3" autocomplete="off"/>
                                <br>
                                <hr>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <h4 class="text-center text-info">Health Record</h4>

                                <label class="label label-info form-labels" for="txtspecneed"> Any Special Needs </label>
                                <input class="form-control" type="text" id="txtspecneed" name="txtspecneed" placeholder="Diabetic" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtsickcon"> Sickness Condition </label>
                                <input class="form-control" type="text" name="txtsickcon" id="txtsickcon" placeholder="Critical" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtmed"> Medication </label>
                                <input class="form-control" type="text" name="txtmed" id="txtmed" placeholder="Asperine" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtalleg"> Any Allegies </label>
                                <input class="form-control" type="tel" name="txtalleg" id="txtalleg" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txteyeprob"> Eye Problem </label>
                                <input class="form-control" type="text" name="txteyeprob" id="txteyeprob" autocomplete="off"/>
                                <br>

                                <label class="label label-info form-labels" for="txtearprob"> Ear Problem </label>
                                <input class="form-control" id="txtearprob" name="txtearprob" type="text" autocomplete="off"/>

                                <br>
                                <br>
                                    <button class="btn btn-danger" id="btn_reset_std"><span class="glyphicon glyphicon-refresh"></span> &nbsp;Reset </button>
                                    <button class="btn btn-warning pull-right" id="btn_save_std"><span class="glyphicon glyphicon-check"></span>Save and Continue ></button>
                                <hr>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>

                            <div class="col-md-1 col-lg-1"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
            <!-- end of Main body -->
            <?php
            include "../footer.php";
            ?>
            <!-- end of footer -->
        </div>
    </div>
</div>
</body>
</html>