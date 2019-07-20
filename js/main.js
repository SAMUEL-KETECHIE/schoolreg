$(document).ready(function () {

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
        submitAddmissionForm(e);
    });

    $("#btn_reset_std").click(function (e) {
        clearTextFields(e);
    })
});

function submitAddmissionForm(e) {
    e.preventDefault();
    bootbox.alert("Form Submitted");
}

function clearTextFields(e) {
    e.preventDefault();
    bootbox.confirm({
        message: "Are you sure you want to reset clear all the fields ?",
        callback: function (result) {
            if(result===true){
                let stdname=$("#txtstdname").val();

                $("#txtstdname").value="";

                bootbox.alert(stdname);
            }
        }
    }
    );
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