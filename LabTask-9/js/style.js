+
function checkEmail()
{
    if (document.getElementById("Pemail").value == "") 
    {
	  	document.getElementById("PemailErr").innerHTML = "Email Required";
		document.getElementById("PemailErr").style.color = "red";
		document.getElementById("Pemail").style.borderColor = "red";
	}
	
	else if(document.form.hemail.value.indexOf("@")<1||document.form.hemail.value.indexOf("@")+2>document.form.hemail.value.lastIndexOf(".")||document.form.hemail.value.lastIndexOf(".")+2>=document.form.hemail.value.length)
    {
        document.getElementById("PemailErr").innerHTML = "Invalid Email Format";
        document.getElementById("PemailErr").style.color = "red";
        document.getElementById("Pemail").style.borderColor = "red";
    }
	
	else
	{
		document.getElementById("PemailErr").innerHTML = "";
		document.getElementById("Pemail").style.borderColor = "black";
	}
}

function checkName() 
{

	if (document.getElementById("Pname").value == "") 
	{
		document.getElementById("PnameErr").innerHTML = "Name can't be blank";
		document.getElementById("PnameErr").style.color = "red";
		document.getElementById("Pname").style.borderColor = "red";
	}

	else
	{
		document.getElementById("PnameErr").innerHTML = "";
		document.getElementById("Pname").style.borderColor = "black";
	}
			
}



function checkusername() 
{
	if (document.getElementById("Pusername").value == "") 
	{
		document.getElementById("PusernameErr").innerHTML = " can't be blank";
		document.getElementById("PusernameErr").style.color = "red";
		document.getElementById("Pusername").style.borderColor = "red";
	}

	else
	{
		document.getElementById("PusernameErr").innerHTML = "";
		document.getElementById("Pusername").style.borderColor = "black";
	}
			
}




function checkPassword()
{
    if (document.getElementById("Ppassword").value == "") 
    {
		document.getElementById("PpasswordErr").innerHTML = "Password Required";
		document.getElementById("PpasswordErr").style.color = "red";
		document.getElementById("Ppassword").style.borderColor = "red";
	}
	else if(document.getElementById("Ppassword").value.length<8)
	{
		document.getElementById("PpasswordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("PpasswordErr").style.color = "red";
		document.getElementById("Ppassword").style.borderColor = "red";
	}
	else
	{
		document.getElementById("PpasswordErr").innerHTML = "";
		document.getElementById("Ppassword").style.borderColor = "black";
	}
}


function checkConfirmPassword()
{
    if (document.getElementById("Pconfirm_password").value == "") 
    {
		document.getElementById("Pconfirm_passwordErr").innerHTML = "Password Required";
		document.getElementById("Pconfirm_passwordErr").style.color = "red";
		document.getElementById("Pconfirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("Pconfirm_password").value.length<8)
	{
		document.getElementById("Pconfirm_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("Pconfirm_passwordErr").style.color = "red";
		document.getElementById("Pconfirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("Pconfirm_password").value != document.getElementById("hpassword").value)
	{
		document.getElementById("Pconfirm_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("Pconfirm_passwordErr").style.color = "red";
		document.getElementById("Pconfirm_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("Pconfirm_passwordErr").innerHTML = "";
		document.getElementById("Pconfirm_password").style.borderColor = "black";
	}
}

function checkgender()
{

    if (document.getElementById("Pgender").value == "none") 
    {
        document.getElementById("PgenderErr").innerHTML = "gender can't be blank";
        document.getElementById("PgenderErr").style.color = "red";
        document.getElementById("Pgender").style.borderColor = "red";
    }

    else
    {
        document.getElementById("PgenderErr").innerHTML = "";
        document.getElementById("Pgender").style.borderColor = "black";
    }

}


function checkPhoneNumber()
{
    if (document.getElementById("Pmobile_number").value == "") 
    {
		document.getElementById("Pmobile_numberErr").innerHTML = "Mobile Number Required";
		document.getElementById("Pmobile_numberErr").style.color = "red";
		document.getElementById("Pmobile_number").style.borderColor = "red";
	}
	else if(document.getElementById("Pmobile_number").value.length<11)
	{
		document.getElementById("Pmobile_numberErr").innerHTML = "Must Be Atleast 11 Numbers";
		document.getElementById("Pmobile_numberErr").style.color = "red";
		document.getElementById("Pmobile_number").style.borderColor = "red";
	}
	else
	{
		document.getElementById("Pmobile_number").innerHTML = "";
		document.getElementById("Pmobile_number").style.borderColor = "black";
	}
}



/*function checkregistrationid()
{
    if (document.getElementById("registrationid").value == "") 
    {
		document.getElementById("registrationidErr").innerHTML = "registrationid Number Required";
		document.getElementById("registrationidErr").style.color = "red";
		document.getElementById("registrationid").style.borderColor = "red";
	}
	else if(document.getElementById("registrationid").value.length<11)
	{
		document.getElementById("registrationidErr").innerHTML = "Must Be Atleast 11 Numbers";
		document.getElementById("registrationidErr").style.color = "red";
		document.getElementById("registrationid").style.borderColor = "red";
	}
	else
	{
		document.getElementById("registrationidErr").innerHTML = "";
		document.getElementById("registrationid").style.borderColor = "black";
	}
}*/




function checklocation()
{
    if (document.getElementById("Paddress").value == "") 
    {
		document.getElementById("PaddressErr").innerHTML = "Address Required";
		document.getElementById("PaddressErr").style.color = "red";
		document.getElementById("Paddress").style.borderColor = "red";
	}	else
	{
		document.getElementById("PaddressErr").innerHTML = "";
		document.getElementById("Paddress").style.borderColor = "black";
	}
}


function checkhedate()
{
    if (document.getElementById("Pdob").value == "") 
    {
		document.getElementById("PdobErr").innerHTML = "Date Of Birth Required";
		document.getElementById("PdobErr").style.color = "red";
		document.getElementById("Pdob").style.borderColor = "red";
	}
	else
	{
		document.getElementById("PdobErr").innerHTML = "";
		document.getElementById("Pdob").style.borderColor = "black";
	}
}


function checkCurrentPassword()
{
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "Password Required";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("current_passwordErr").innerHTML = "";
		document.getElementById("current_password").style.borderColor = "black";
	}
}


function checkNewPassword()
{
    if (document.getElementById("new_password").value == "") 
    {
		document.getElementById("new_passwordErr").innerHTML = "New Password Required";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	// else if(document.getElementById("new_password").value == document.getElementById("current_password").value)
	// {
	// 	document.getElementById("new_passwordErr").innerHTML = "Can't set the same password";
	// 	document.getElementById("new_passwordErr").style.color = "red";
	// 	document.getElementById("new_password").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "black";
	}
}


function checkRetypeNewPassword()
{
    if (document.getElementById("retype_new_password").value == "") 
    {
		document.getElementById("retype_new_passwordErr").innerHTML = "Retype New Password Required";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value.length<8)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value != document.getElementById("new_password").value)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "";
		document.getElementById("retype_new_password").style.borderColor = "black";
	}
}


/*function search(id) //for appointment
{
	if (document.getElementById("searchByID").value == "") 
    {
		document.getElementById("searchByIDErr").innerHTML = "ID Required";
		document.getElementById("searchByIDErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
		document.getElementById("search").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/search.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
		document.getElementById("search").style.borderColor = "black";
	}
}*/

/*function searchPrescription(id) 
{
	var xhttp;
	if (id == "") 
    {
		document.getElementById("txtHint").innerHTML = "";
		return;
	}

		xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/searchPrescription.php?id="+id, true);
   		xhttp.send();
	
}*/
