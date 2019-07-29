
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
    <!-- INCLUDE SIDE BAR HERE-->
    <div  id="page-content-wrapper">
        <div class="container-fluid main-card student-container">
            <h3 class="text-center text-primary panel panel-heading">Students</h3>

            <table id="studentTable" class="table table-striped table-bordered">

                <thead>
                <tr class="info">
                    <th>#</th>
                    <th>Student No.</th>
                    <th>Full Name</th>
                    <th>Class</th>
                    <th>Image</th>
                    <th>Age (yrs)</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Student Location</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php
                function formatDate( $d ) {
                    return date( 'jS M y', strtotime($d));
                        }
                function calculateAge($birthDate){
                    $age = floor((time() - strtotime($birthDate)) / 31556926);
                    return $age;
                }
                $rowId=0;
                $dataToReturn= array();
                $std_query="SELECT std.std_id, std.std_no, std.std_name, std.std_class, std.std_dob, std.std_haddr,pnt.f_name,pnt.m_name FROM student std 
    JOIN parent pnt WHERE std.std_no = pnt.std_no ORDER BY std.std_id";
                $run_query=mysqli_query($conn,$std_query);
                if(mysqli_num_rows($run_query) > 0) {
                    while($row=mysqli_fetch_array($run_query)){
                        $stdid =$row["std_id"];
                        $stdno =$row["std_no"];
                        $stdname =$row["std_name"];
                        $stdclass=$row["std_class"];
                        $dob =$row["std_dob"];
                        $addr =$row["std_haddr"];
                        $father =$row["f_name"];
                        $mother =$row["m_name"];
                        $rowId = $rowId + 1;


                    ?>
                    <tr>
                        <td> <?php
                            echo $rowId;
                            ?>
                        </td>
                        <td> <?php
                            echo $stdno;
                            ?>
                        </td>
                        <td><?php echo $stdname; ?> </td>
                        <td> <?php echo $stdclass; ?> </td>
                        <td><?php echo "Student Image"; ?> </td>
                        <td><?php echo calculateAge($dob);?></td>
                        <td><?php echo $father; ?></td>
                        <td><?php echo $mother; ?></td>
                        <td> <?php echo $addr; ?></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-info btn-xs" studid="<?php echo $stdno;?>" id="btn_edit_std"><span
                                            class="glyphicon glyphicon-pencil"> Edit</span></button>
                                <button class="btn btn-danger btn-xs" studid="<?php echo $stdno;?>" id="btn_del_student"><span
                                            class="glyphicon glyphicon-trash"> Delete </span></button>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                }
                ?>
                </tbody>

            </table>
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