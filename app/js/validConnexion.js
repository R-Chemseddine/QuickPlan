var inp = document.getElementById("password");
var spn = document.getElementById("yeux");
var o = document.getElementById("oeil");
var os = document.getElementById("oeils");
spn.addEventListener('click', function () {
	if (inp.type == "password") {
		inp.type = "text"
		o.style.display = "none";
		os.style.display = "inline";
	} else {
		inp.type = "password";
		o.style.display = "inline";
		os.style.display = "none";
	}
})


var inp1 = document.getElementById("passwordc");
var spn1 = document.getElementById("yeux1");
var o1 = document.getElementById("oeil1");
var os1 = document.getElementById("oeils1");
spn1.addEventListener('click', function () {
	if (inp1.type == "password") {
		inp1.type = "text"
		o1.style.display = "none";
		os1.style.display = "inline";
	} else {
		inp1.type = "password";
		o1.style.display = "inline";
		os1.style.display = "none";
	}
})


const form = document.getElementById('myForm');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', e => {

	let valid = validateInputs();
	if (!valid) {
		e.preventDefault();
	}
});

const setError = (element, message) => {
	const inputControl = element.parentElement;
	const errorDisplay = inputControl.querySelector('.error');

	errorDisplay.innerText = message;
}

const setSuccess = element => {
	const inputControl = element.parentElement;
	const errorDisplay = inputControl.querySelector('.error');

	errorDisplay.innerText = '';
};

const isValidEmail = email => {
	const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
	let validmail = false;
	let validmdp = false;
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();

	if (emailValue === '') {
		setError(email, 'Email is required');
	} else if (!isValidEmail(emailValue)) {
		setError(email, 'Provide a valid email address');
	} else {
		setSuccess(email);
		validmail = true;
	}

	if (passwordValue === '') {
		setError(password, 'Password is required');
	} else if (passwordValue.length < 8) {
		setError(password, 'Password must be at least 8 character.')
	} else {
		setSuccess(password);
		validmdp = true
	}

	return validmail && validmdp
};
