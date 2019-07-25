$(document).ready(function () {

    document.querySelector("#snack_bar_warning").style.display = "none";
    document.querySelector("#snack_bar_success").style.display = "none";
    document.querySelector("#snack_bar_danger").style.display = "none";

    let stdname=$("#txtstdname").val();
    let stddob= $("#txtdob").val();
    let placeob= $("#txtpob").val();
    let  father= $("#txtfname").val();
    let fnation= $("#txtfnalty").val();
    let fhome =$("#txtfhome").val();
    let focc=$("#txtfocc").val();
    let fphone=$("#txtfphone").val();
    let mname= $("#txtmname").val();
    let mnation= $("#txtmnalty").val();
    let mhome=$("#txtmhome").val();
    let mocc =$("#txtmocc").val();
    let mphone=$("#txtmphone").val();
    let paddr= $("#txtpaddress").val();
    let nokname=$("#txtnok").val();
    let nokphone= $("#txtnokphone").val();
    let prevsch = $("#txtprevsch").val();
    let hpop=$("#txtpop").val();
    let hlang=$("#txthlang").val();
    let haddr = $("#txthaddr").val();
    let specneed= $("#txtspecneed").val();
    let sickness=$("#txtsickcon").val();
    let med=$("#txtmed").val();
    let allegy=$("#txtalleg").val();
    let eyeprob=$("#txteyeprob").val();
    let earprob= $("#txtearprob").val();
    let others= $("#txtother").val();

    //btn_save_std
    //btn_reset_std

    $("#btn_save_std").click(function (e) {
        submitStudentInfoForm(e);
    });

    $("#btn_save_parent").click(function (e) {
        submitParentInfoForm(e);
    });

    $("#btn_save_house").click(function (e) {
        submitHouseAndFinalInfoForm(e);
    });

    $("#btn_reset_std").click(function (e) {
        clearTextFields(e);
    });
});

function submitHouseAndFinalInfoForm(e) {
    e.preventDefault();
    let fields={};
    let validation=validateTextFields(fields);
    let requestObj={};
    if(validation===true){
        let poster= postRequest('houseAction.php',requestObj,function (e) {
        });
        if(poster===true){
            bootbox.alert("Form Submitted");
        }
    }
}

function submitParentInfoForm(e) {
    e.preventDefault();
    let fields={};
    let validation=validateTextFields(fields);
    let requestObj={};
    if(validation===true){
        let poster= postRequest('parentAction.php',requestObj,function (e) {
            window.location="houseForm.php";
        });
        if(poster===true){
            bootbox.alert("Form Submitted");
        }
    }
}

function submitStudentInfoForm(e) {
    e.preventDefault();
    let fields={};
    let validation=validateTextFields(fields);
    let requestObj={};
    if(validation===true){
        let poster= postRequest('studentAction.php',requestObj,function (e) {
            window.location="parentForm.php";
        });
        if(poster===true){
            bootbox.alert("Form Submitted");
        }
    }
}

function clearTextFields(e,fields) {
    e.preventDefault();
    bootbox.confirm({
        message: "Are you sure you want to reset clear all the fields ?",
        callback: function (result) {
            if(result===true){
                for(let field in fields){
                    field.value ="";
                }
                //let stdname=$("#txtstdname").val();
            }
        }
    }
    );
}

function validateTextFields(fields){
	let errorMessage="";
	for(let field in fields){
		if(field==="" || field===undefined || field.length===0 || field.value===""){
			let fieldName=field.getAttribute(name);
			errorMessage +=fieldName + "cannot be empty";
		}
	}
	showSnackBarDanger(errorMessage);
	if(errorMessage===""){
	    return true;
    }else {
	    return false;
    }
}


function showSnackBarWarning(message) {
    $("#snack_bar_warning").html(message);
    let x = document.getElementById("snack_bar_warning");
    x.className = "show alert-warning";
    setTimeout(function () {
        x.className = x.className.replace("alert-warning show", "");
    }, 9050);

}

function showSnackBarSuccess(message) {
    $("#snack_bar_success").html(message);
    let x = document.getElementById("snack_bar_success");
    x.className = "show alert-success";
    setTimeout(function () {
        x.className = x.className.replace("alert-success show", "");
    }, 9500);

}


function showSnackBarDanger(message) {
    $("#snack_bar_danger").html(message);
    let x = document.getElementById("snack_bar_danger");
    x.className = "show alert-danger";
    setTimeout(function () {
        x.className = x.className.replace("alert-danger show", "");
    }, 9500);

}

function  postRequest(uri,reqObject,callback=null) {
    let message="";
    $.ajax({
        url 	: uri,
        method 	: "POST",
        data 	: reqObject,
        success	: function(data,status){
            if(status===true){
                message="Data saved successfully";
                showSnackBarSuccess(message);
                callback(data);
                return true;
            }else{
                message="Data was not saved. Check and try again.";
                showSnackBarDanger(message);
                return false;
            }
        }
    })
}

/*
$("#txtdob").value("");
$("#txtpob").value("");
$("#txtfname").value("");
$("#txtfnalty").value("");
$("#txtfhome").value("");
$("#txtfocc").value("");
$("#txtfphone").value("");
$("#txtmname").value("");
$("#txtmnalty").value("");
$("#txtmhome").value("");
$("#txtmocc").value("");
$("#txtmphone").value("");
$("#txtpaddress").value("");
$("#txtnok").value("");
$("#txtnokphone").value("");
$("#txtprevsch").value("");
$("#txtpop").value("");
$("#txthlang").value("");
$("#txthaddr").value("");
$("#txtspecneed").value("");
$("#txtsickcon").value("");
$("#txtmed").value("");
$("#txtalleg").value("");
$("#txteyeprob").value("");
$("#txtearprob").vvalue("");
$("#txtother").value("");

 */