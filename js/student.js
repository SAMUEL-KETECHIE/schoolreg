$(document).ready(function () {

    displayStudents();


    $("body").delegate("#btn_del_student","click",function(event){
        event.preventDefault();
        let stdNo = $(this).attr("studid");
        console.log(stdNo);
        bootbox.confirm({
                message: "Are you sure you want to Delete this student ?",
                callback: function (result) {
                    if(result===true){
                        deleteStudent(stdNo);
                    }
                }
            }
        );
    });

    $("body").delegate("#btn_edit_std","click",function(event){
        event.preventDefault();
        let stdNo = $(this).attr("studid");
        console.log(stdNo);
        bootbox.confirm({
                message: "Are you sure you want to Edit this student ?",
                callback: function (result) {
                    if(result===true){
                        moveToEditStudent(stdNo);
                    }
                }
            }
        );

    });

});

function displayStudents() {
    $("#studentTable").dataTable();
}

function deleteStudent(stdNo) {
    let model={
        deletestudent:1,
        stdNo:stdNo
    }
    $.ajax({
        url 	: "studentDisplayAction.php",
        method 	: "POST",
        data 	: model,
        success : function(data){
            //$("#del_update_msg").html(data);
            let message="";
            if(data !=""){
                message="Student successfully deleted.";
                showSnackBarSuccess(message);
                window.location="../student/"
            }else {
                message="Student not deleted. Please check and try again.";
                showSnackBarWarning(message);
            }
        }
    })
}


function moveToEditStudent(stdNo) {
    let model={
        moveToEdit:1,
        stdNo:stdNo
    }
    $.ajax({
        url 	: "studentDisplayAction.php",
        method 	: "POST",
        data 	: model,
        success : function(data){
            let message="";
            if(data !=""){
                window.location="../student/edit";
            }else {
                message="An error occurred. Please check and try again.";
                showSnackBarWarning(message);
            }
        }
    })
}