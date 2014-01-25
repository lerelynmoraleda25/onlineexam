<script>
function check_fname() {
	fname = document.getElementById('fname').value;

	if (fname.length == 0) {
		document.getElementById('c_fname').innerHTML='Fill up first';
		return false;
	} else {
		document.getElementById('c_fname').innerHTML='';
		return true;
	}
}

function check_lname() {
	lname = document.getElementById('lname').value;

	if (lname.length == 0) {
		document.getElementById('c_lname').innerHTML='Fill up first';
		return false;
	} else {
		document.getElementById('c_lname').innerHTML='';
		return true;
	}lname
}

function check_email() {
	email = document.getElementById('email').value;

	if (email.length == 0) {
		document.getElementById('c_email').innerHTML='Fill up first';
		return false;
	} else {
		document.getElementById('c_email').innerHTML='';
		return true;
	}lname
}

function check_password() {
	password = document.getElementById('password').value;

	if (password.length == 0) {
		document.getElementById('c_password').innerHTML='Fill up first';
		return false;
	} else {
		document.getElementById('c_password').innerHTML='';
		return true;
	}lname
}

function validate_pass() {
	confirm_pass = document.getElementById('confirm_pass').value;
	password = document.getElementById('password').value;

	if (confirm_pass.length == 0) {
		document.getElementById('confirm').innerHTML='Fill up first';
		return false;
	} else if (confirm_pass != password){
		document.getElementById('confirm').innerHTML='not match';
	} else {
		document.getElementById('confirm').innerHTML='';
		return true;
	}lname
}

function validateAll() {
	if(check_fname() && check_lname() && check_email() && check_password() && validate_pass()){
		alert('success');
		return true;
	} else {
		alert('incomplete');
		return false;
	}
}

</script>