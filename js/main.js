$(document).ready(function () {


    document.querySelector("#snack_bar_warning").style.display = "none";
    document.querySelector("#snack_bar_success").style.display = "none";
    document.querySelector("#snack_bar_danger").style.display = "none";




    /*SAVE*/
    $("#btn_save_std").click(function (e) {
        submitStudentInfoForm(e);
    });

    $("#btn_save_parent").click(function (e) {
        submitParentInfoForm(e);
    });

    $("#btn_save_house").click(function (e) {
        submitHouseAndFinalInfoForm(e);
    });

    /* BACK */
    $("#btn_back_to_child").click(function (e) {
        backToChildForm(e);
    });

    $("#btn_back_to_parent").click(function (e) {
        backToParentForm(e);
    });


    /* RESET*/
    $("#btn_reset_std").click(function (e) {
        clearStudentTextFields(e);
    });

    $("#btn_reset_parent").click(function (e) {
        clearParentTextFields(e);
    });

    $("#btn_reset_house").click(function (e) {
        clearHouseTextFields(e);
    });


});

function submitHouseAndFinalInfoForm(e) {
    e.preventDefault();

    let hpopu= $("#txtpopu").val();
    let hlang=$("#txthlang").val();
    let haddr=$("#txthaddr").val();
    let other=$("#txtother").val();

    let fields={
        submithouse:1,
        hpopu:hpopu,
        hlang:hlang,
        haddr:haddr,
        other:other
    };
    //let validation=validateTextFields(fields);
    let validation=true;
    let requestObj={};
    if(validation===true){
        let message="";
        let poster= postRequest('houseAction.php',fields,function (e) {
            if(e !=""){
                message="You have successfully saved the admission form."
                showSnackBarSuccess(message);
                window.setTimeout(function () {
                        window.location="../admission/";
                    }, 200000);
            }else {
                message="Failed: Data was not saved. Please check and try again.";
                showSnackBarWarning(message);
            }
        });
        if(poster===true){
            bootbox.alert("Form Submitted");
        }
    }
}


function clearHouseTextFields(e) {
    e.preventDefault();
    bootbox.confirm({
            message: "Are you sure you want to reset clear all the fields ?",
            callback: function (result) {
                if(result===true){
                    $("#txtpopu").val('');
                    $("#txthlang").val('');
                    $("#txthaddr").val('');
                    $("#txtother").val('');
                }
            }
        }
    );
}


function submitParentInfoForm(e) {
    e.preventDefault();
    let  fname= $("#txtfname").val();
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

    let fields={
        submitparent:1,
        fname:fname,
        fnation:fnation,
        fhome:fhome,
        focc:focc,
        fphone:fphone,
        mname:mname,
        mnation:mnation,
        mhome:mhome,
        mocc:mocc,
        mphone:mphone,
        paddr:paddr,
        nokname:nokname,
        nokphone:nokphone
    };
    //let validation=validateTextFields(fields);
    let validation=true;
    //let requestObj={};
    if(validation===true){
        let poster= postRequest('parentAction.php',fields,function (e) {
            if(e !=""){
                showSnackBarSuccess("Data saved successfully");
                window.location="houseForm";
            }else {
                showSnackBarWarning("Data was not saved. Please check and try again");
            }
        });
        if(poster===true){
            bootbox.alert("Form Submitted");
        }
    }
}

function clearParentTextFields(e) {
    e.preventDefault();
    bootbox.confirm({
            message: "Are you sure you want to reset clear all the fields ?",
            callback: function (result) {
                if(result===true){
                    $("#txtfname").val('');
                    $("#txtfnalty").val('');
                    $("#txtfhome").val('');
                    $("#txtfocc").val('');
                    $("#txtfphone").val('');
                     $("#txtmname").val('');
                     $("#txtmnalty").val('');
                    $("#txtmhome").val('');
                    $("#txtmocc").val('');
                    $("#txtmphone").val('');
                    $("#txtpaddress").val('');
                    $("#txtnok").val('');
                    $("#txtnokphone").val('');
                }
            }
        }
    );
}

function submitStudentInfoForm(e) {
    e.preventDefault();
    let stdname=$("#txtstdname").val();
    let stddob= $("#txtdob").val();
    let placeob= $("#txtpob").val();
    let stdaddr= $("#txtstdaddr").val();
    //let stdimg= $("#stdimage").val();
    let stdclass= $("#stdclass").val();

    let txtprevsch1= $("#txtprevsch1").val();
    let txtprevschlevel1= $("#txtprevschlevel1").val();
    let txtprevschdate1= $("#txtprevschdate1").val();
    let txtprevschaddr1= $("#txtprevschaddr1").val();


    let txtspecneed= $("#txtspecneed").val();
    let txtsickcon= $("#txtsickcon").val();
    let txtmed= $("#txtmed").val();
    let txtalleg= $("#txtalleg").val();
    let txteyeprob= $("#txteyeprob").val();
    let txtearprob= $("#txtearprob").val();

    let stdimg = document.getElementById("stdimage").files[0].name;


    /*

        let txtprevsch2= $("#txtprevsch2").val();
        let txtprevschlevel2= $("#txtprevschlevel2").val();
        let txtprevschdate2= $("#txtprevschdate2").val();
        let txtprevschaddr2= $("#txtprevschaddr2").val();
        let schRecords=[
            {
                txtprevsch:txtprevsch1,
                txtprevschlevel:txtprevschlevel1,
                txtprevschdate:txtprevschdate1,
                txtprevschaddr:txtprevschaddr1
            },
            {
                txtprevsch:txtprevsch2,
                txtprevschlevel:txtprevschlevel2,
                txtprevschdate:txtprevschdate2,
                txtprevschaddr:txtprevschaddr2
            }
        ];
        //schRecords:schRecords,

     */

        let fields={
        submitstudent:1,
        stdname:stdname,
        stddob:stddob,
        placeob:placeob,
        stdaddr:stdaddr,
        stdimg:stdimg,
        stdclass:stdclass,

        txtprevsch:txtprevsch1,
        txtprevschlevel:txtprevschlevel1,
        txtprevschdate:txtprevschdate1,
        txtprevschaddr:txtprevschaddr1,

        txtspecneed:txtspecneed,
        txtsickcon:txtsickcon,
        txtmed:txtmed,
        txtalleg:txtalleg,
        txteyeprob:txteyeprob,
        txtearprob:txtearprob
    };
   // let validation=validateTextFields(fields);
    let validation=true;
    //let requestObj=fields;
    if(validation===true){
        let  message="";
        let poster= postRequest('studentAction.php',fields,function (e) {
            if(e !=""){
                message="Data saved successfully";
                showSnackBarSuccess(message);
                window.location="parentForm";
            }else {
                message="Data was not saved. Please check and try again";
                showSnackBarWarning(message);
            }
        });
        if(poster===true){
            bootbox.alert("Form Submitted");
        }
    }
}


function clearStudentTextFields(e) {
    e.preventDefault();
    bootbox.confirm({
        message: "Are you sure you want to reset clear all the fields ?",
        callback: function (result) {
            if(result===true){
                $("#txtstdname").val('');
                $("#txtdob").val('');
                $("#txtpob").val('');
                $("#txtstdaddr").val('');
                $("#stdimage").val('');
                $("#stdclass").val('');
                $("#txtprevsch1").val('');
                $("#txtprevschlevel1").val('');
                $("#txtprevschdate1").val('');
                $("#txtprevschaddr1").val('');
                $("#txtprevsch2").val('');
                $("#txtprevschlevel2").val('');
                $("#txtprevschdate2").val('');
                $("#txtprevschaddr2").val('');
                $("#txtspecneed").val('');
                $("#txtsickcon").val('');
                $("#txtmed").val('');
                $("#txtalleg").val('');
                $("#txteyeprob").val('');
                $("#txtearprob").val('');
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
    x.className = "show";
    setTimeout(function () {
        x.className = x.className.replace("show", "");
    }, 8500);

}

function showSnackBarSuccess(message) {
    $("#snack_bar_success").html(message);
    let x = document.getElementById("snack_bar_success");
    x.className = "show";
    setTimeout(function () {
        x.className = x.className.replace("show", "");
    }, 8500);

}


function showSnackBarDanger(message) {
    $("#snack_bar_danger").html(message);
    let x = document.getElementById("snack_bar_danger");
    x.className = "show";
    setTimeout(function () {
        x.className = x.className.replace("show", "");
    }, 8500);

}

function  postRequest(uri,reqObject,callback=null) {
    let message="";
    $.ajax({
        url 	: uri,
        method 	: "POST",
        data 	: reqObject,
        success	: function(data){
            if(data !="" || data.length !=0){
                message="Data saved successfully";
                callback(data);
                //showSnackBarSuccess(message);
                return true;
            }else{
                message="Data was not saved. Check and try again.";
                showSnackBarDanger(message);
                return false;
            }
        }
    })
}



function backToChildForm(e) {
    e.preventDefault();
    bootbox.confirm({
            message: "Are you sure you want to go back ?",
            callback: function (result) {
                if(result===true){
                    window.location="../admission/";
                }
            }
        }
    );
}


function backToParentForm(e) {
    e.preventDefault();
    bootbox.confirm({
            message: "Are you sure you want to go back ?",
            callback: function (result) {
                if(result===true){
                    window.location="../admission/parentForm";
                }
            }
        }
    );
}


async function SavePhoto(inp)
{
    let formData = new FormData();
    let photo = inp.files[0];

    formData.append("file", photo);

    try {
        let r = await fetch('../upload.php', {method: "POST", body: formData});
        console.log('HTTP response code:',r.status,r.body,r.response);
    } catch(e) {
        console.log('Huston we have problem...:', e);
    }

}