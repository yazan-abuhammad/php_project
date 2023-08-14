// Get the form element
let signupForm = document.querySelector('#signup');

// Get the input elements
let EmailAddress = document.querySelector('#EmailAddress');
let Phonnumber = document.querySelector('#Phonnumber');
let DateofBirth = document.querySelector('#DateofBirth');
let Password = document.querySelector('#Password');
let confirmPassword = document.querySelector('#confirmPassword');

// Get the error message elements
let emailtex = document.querySelector('#emailtex');
let Passwordtex = document.querySelector('#Passwordtex');
let ConfirmPasswordtex = document.querySelector('#ConfirmPasswordtex');
let Phonnumbertex = document.querySelector('#Phonnumbertex');
let DateofBirthtex = document.querySelector('#DateofBirthtex');

// Function to handle form submission
function handleFormSubmit(event) {
    // Reset error messages
    emailtex.classList.add("hiden");
    Passwordtex.classList.add("hiden");
    ConfirmPasswordtex.classList.add("hiden");
    Phonnumbertex.classList.add("hiden");
    DateofBirthtex.classList.add("hiden");

    // Perform validation
    let filter = /([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    let pwd_expression = /(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    let currentYear = new Date().getFullYear();
    let maxAllowedYear = 2007;

    if (!filter.test(EmailAddress.value)) {
        emailtex.classList.remove("hiden");
        event.preventDefault();
    } else if (!pwd_expression.test(Password.value)) {
        Passwordtex.classList.remove("hiden");
        event.preventDefault();
    } else if (confirmPassword.value !== Password.value) {
        ConfirmPasswordtex.classList.remove("hiden");
        event.preventDefault();
    } else if (Phonnumber.value.length !== 14) {
        Phonnumbertex.classList.remove("hiden");
        event.preventDefault();
    } else {
        // Validate Date of Birth
        let dobYear = new Date(DateofBirth.value).getFullYear();
        if (dobYear >= maxAllowedYear) {
            DateofBirthtex.classList.remove("hiden");
            event.preventDefault();
        }
     
     
    }
}


signupForm.addEventListener('submit', handleFormSubmit);
