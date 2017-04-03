function firstname()
{ 
var fname = document.register.txtfirstname;
var letters = /^[A-Za-z]+$/;
if(fname.value.match(letters))
{
document.register.txtlastname.focus();
return true;
}
else
{
alert('First Name must have alphabet characters only');
fname.focus();
return false;
}
}
function lastname()
{ 	
var lname = document.register.txtlastname;
var letters = /^[A-Za-z]+$/;
if(lname.value.match(letters))
{
document.register.address.focus();
return true;
}
else
{
alert('Last Name must have alphabet characters only');
lname.focus();
return false;
}
}
function alphanumeric()
{ 
var uadd = document.register.address;
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
// Focus goes to next field i.e. Country.
document.register.txtcity.focus();
return true;
}
else
{
alert('Address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function city()
{ 
var city = document.register.txtcity;
var letters = /^[A-Za-z]+$/;
if(city.value.match(letters))
{
document.register.txtpincode.focus();
return true;
}
else
{
alert('City must have alphabet characters only');
city.focus();
return false;
}
}
function pincode()
{ 
var uzip = document.register.txtpincode;
var numbers = /^[0-9]{6}+$/;
if(uzip.value.match(numbers))
{
// Focus goes to next field i.e. email.
document.register.txtmobile.focus();
return true;
}
else
{
alert('ZIP code must have numeric characters only');
uzip.focus();
return false;
}
}
function mobile()
{ 
var mobile = document.register.txtmobile;
var numbers = /^([0-9]{10})+$/;
if(mobile.value.match(numbers))
{
// Focus goes to next field i.e. email.
document.register.txtemail.focus();
return true;
}
else
{
alert('Please Enter Valid Mobile Number');
mobile.focus();
return false;
}
}
function ValidateEmail()
{
var uemail = document.register.txtemail;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
document.register.txtbirthdate.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
} 
function dateformat()
{ 
var birthdate = document.register.txtbirthdate;
var numbers = /^(([0-9]{4}))?[-. ]?([0-9]{2})[-. ]?([0-9]{2})$/;;
if(birthdate.value.match(numbers))
{
// Focus goes to next field i.e. email.
document.register.txtusername.focus();
return true;
}
else
{
alert('Please Enter Valid Mobile Number');
mobile.focus();
return false;
}
}

