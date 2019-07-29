$(document).ready(function () {
    getTotalStdent();


});

function getTotalStdent() {
    $.ajax({
        url:"../dashboard/dashboardAction.php",
        method: "POST",
        data: {totalstudent:1},
        success: function (data) {
            $("#totalStudents").html(data);
        }
    })

}


function getTotalSubject() {
    $.ajax({
        uri:"../dashboardAction.php",
        method: "POST",
        data: {totalsubject:1},
        success: function (data) {
            $("#totalStudents").html(data);
        }
    })

}