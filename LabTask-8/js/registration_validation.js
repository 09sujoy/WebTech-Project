function Clear() {
    $('#hname').val("");
    $('#husername').val("");
    $('#hpassword').val("");
    $('#hconfirm_password').val("");
    $('#errmsg').html("");
    document.getElementById("lb-hemail").style["visibility"] = "hidden";
    document.getElementById("lb-hpassword").style["visibility"] = "hidden";
    document.getElementById("lb-hname").style["visibility"] = "hidden";
    document.getElementById("lb-hconfirm_pass").style["visibility"] = "hidden";
}
function RegistrationFieldValidation() {
    
    var hname = $('#hname').val();
    var husername = $('#husername').val();
    var hpassword = $('#hpassword').val();
    var hconfirm_password = $('#hconfirm_password').val();
    var hemail = $('#hemail').val();
    var hlocation = $('#hlocation').val();
    var hphone = $('#hphone').val();
    var hedate = $('#hedate').val();
    var hosid = $('hosid').val();
    var hicuseatno = $('#hicuseatno').val();
    var hoswno = $('#hoswno').val();
    var hosnosea = $('#hosnosea').val();
    var hcabinno = $('#hcabinno').val();
    var hoxav = $('#hoxav').val();
    document.getElementById("hemail").style["visibility"] = "hidden";
    document.getElementById("hpassword").style["visibility"] = "hidden";
    document.getElementById("hname").style["visibility"] = "hidden";
    document.getElementById("hconfirm_password").style["visibility"] = "hidden";
    var status = "";

    var regEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regPhone = /(^(013)|^(014)|^(015)|^(016)|^(017)|^(018)|^(019)){1}\d{8}/;
    hname
    if (hname.length >2) {
        document.getElementById("hname").style["visibility"] = "visible";
        status = "hname";
    }
    if (!(huserName.toString()).match(regEmail) && (!(huserName.toString()).match(regPhone) || huserName.length > 11)) {
        document.getElementById("hemail").style["visibility"] = "visible";
        status = "huseraname";
    }
    if (hpassword.length < 6) {
        document.getElementById("lb-hpassword").style["visibility"] = "visible";
        status = "hpassword";
    }
    if (hconfirm_Password != hpassword) {
        document.getElementById("hconfirm_password").style["visibility"] = "visible";
        status = "hconfirm_passwords";
    }
    if (status == "") {
        AddUser(Name, username, password);
    }

}

function AddUser(name, uname, pass) {
    var catname = "addsuer";
    $.ajax({
        url: "/control/registration-validation.php",
        type: 'POST',
        data: {
            //addUser: catname,
            name: name,
            username: username,
            password: password
        },
        success: function (data, status) {
            $('#errmsg').html(data);
        }
    });
    return false;
}