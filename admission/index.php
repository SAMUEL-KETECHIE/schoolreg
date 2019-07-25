
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
                    <p class="text-center text-primary panel panel-heading txtHead">
                        <br>
                        Admission Form
                    </p>
                    <form class="form-horizontal page-white" action="" method="POST">
                        <div class="row">
                            <div class="col-md-1 col-lg-1"></div>
                            <div class="col-md-3 col-lg-3">
                                <p class="text-center text-info"> Child's Information </p>
                                <label class="label label-info" for="txtstdname"> <span class="glyphicon glyphicon-user"></span> Child's Full Name </label>
                                <input class="form-control" type="text" name="txtstdname" id="txtstdname" required placeholder="John Doe Bright" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtdob"> <span class="glyphicon glyphicon-calendar"></span> Child's Date of Birth </label>
                                <input class="form-control" id="txtdob" name="txtdob" required type="date"/>
                                <br>

                                <label class="label label-info" for="txtpob"> <span class="glyphicon glyphicon-map-marker"></span> Place of Birth </label>
                                <input class="form-control" type="text" id="txtpob" name="txtpob" required placeholder="Kokomlemle-Accra" autocomplete="off"/>
                                <hr>



                            </div>
                            <div class="col-md-3 col-lg-3">
                                <p class="text-center text-info">School Record</p>

                                <label class="label label-info" for="txtprevsch1"> <span class="glyphicon glyphicon-certificate"></span> Previous School 1 </label>
                                <input class="form-control" type="text" name="txtprevsch1" id="txtprevsch1" placeholder="Wendolin Int. School" autocomplete="off"/>
                                <br>
                                <label class="label label-info" for="txtprevschlevel1"> <span class="glyphicon glyphicon-certificate"></span> Level </label>
                                <input class="form-control" type="number" name="txtprevschlevel1" id="txtprevschlevel1" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtprevsch2"> <span class="glyphicon glyphicon-certificate"></span> Previous School 2 </label>
                                <input class="form-control" type="text" name="txtprevsch2" id="txtprevsch2" placeholder="Palma Int. School" autocomplete="off"/>
                                <br>
                                <label class="label label-info" for="txtprevschlevel2"> <span class="glyphicon glyphicon-certificate"></span> Level </label>
                                <input class="form-control" type="number" name="txtprevschlevel2" id="txtprevschlevel2" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtprevsch3"> <span class="glyphicon glyphicon-certificate"></span> Previous School 3 </label>
                                <input class="form-control" type="text" name="txtprevsch3" id="txtprevsch3" placeholder="Eltrich Int. School" autocomplete="off"/>
                                <br>
                                <label class="label label-info" for="txtprevschlevel3"> <span class="glyphicon glyphicon-certificate"></span> Level </label>
                                <input class="form-control" type="number" name="txtprevschlevel3" id="txtprevschlevel3" autocomplete="off"/>
                                <br>
                                <hr>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <p class="text-center text-info">Health Record</p>

                                <label class="label label-info" for="txtspecneed"> Any Special Needs </label>
                                <input class="form-control" type="text" id="txtspecneed" name="txtspecneed" placeholder="Diabetic" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtsickcon"> Sickness Condition </label>
                                <input class="form-control" type="text" name="txtsickcon" id="txtsickcon" placeholder="Critical" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtmed"> Medication </label>
                                <input class="form-control" type="text" name="txtmed" id="txtmed" placeholder="Asperine" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtalleg"> Any Allegies </label>
                                <input class="form-control" type="tel" name="txtalleg" id="txtalleg" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txteyeprob"> Eye Problem </label>
                                <input class="form-control" type="text" name="txteyeprob" id="txteyeprob" autocomplete="off"/>
                                <br>

                                <label class="label label-info" for="txtearprob"> Ear Problem </label>
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