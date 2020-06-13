var password = document.getElementById("form_password");
var confirm_password = document.getElementById("form_confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } 
  else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

//user email validation

var XMLHttpRequestObject = false;
if(window.XMLHttpRequest){
	XMLHttpRequestObject = new XMLHttpRequest();
}else if(window.ActiveXObject){
	XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function get_user_email_message(input){
	var pass_text = "email="+input.value;
	if(XMLHttpRequestObject){
		var path_file = 'user_email_output_ajax.php';
		XMLHttpRequestObject.open("POST",path_file);
		XMLHttpRequestObject.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		XMLHttpRequestObject.onreadystatechange = function()
		{
			if(XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200){
				var values=XMLHttpRequestObject.responseText;
				if(values=="yes")
				{
					input.setCustomValidity("There is already an account for this email.");
				}
				else
				{
					input.setCustomValidity('');
				}
				
			}
		}
		XMLHttpRequestObject.send(pass_text);
	}
}