function Checking(){

var User = document.getElementById("Username").value;
var Password = document.getElementById("Password").value;
var Email = document.getElementById("Email").value;


if (Email == 0){
	 $("#submit").attr('disabled',true);
}
else
{
	if (Password == 0){
		 $("#submit").attr('disabled',true);
	}else {
   $("#submit").attr('disabled',false);
}
}
}
setInterval(Checking,1000);