function clearErrorMessages () {
    let emailErrorMessage = document.getElementById("email-error-message");
    let ageErrorMessage = document.getElementById("age-error-message");
    let passwordErrorMessage = document.getElementById("password-error-message");

    emailErrorMessage.innerText = "";
    ageErrorMessage.innerText = "";
    passwordErrorMessage.innerText = "";
}

function passwordsMatch (password, repeatPassword) {
    return password === repeatPassword;
}

function isAgeNumeric (age) {
    return !isNaN(age);
}

function isFieldEmpty (firstName, lastName, email, age, password, repeatPassword) {
    return !firstName || !lastName || !email || !age || !password || !repeatPassword;
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validateForm(e) {
    let firstName = document.getElementById("first-name").value;
    let lastName = document.getElementById("last-name").value;
    let email = document.getElementById("email").value;
    let age = document.getElementById("age").value;
    let password = document.getElementById("password").value;
    let repeatPassword = document.getElementById("repeat-password").value;

    let emailErrorMessage = document.getElementById("email-error-message");
    let ageErrorMessage = document.getElementById("age-error-message");
    let passwordErrorMessage = document.getElementById("password-error-message");

    let errorRaised = false;

    clearErrorMessages();

    // check if one of the fields are empty. show alert if empty
    if (isFieldEmpty(firstName, lastName, email, age, password, repeatPassword)) {
        alert("One of the fields is missing. Please enter something in the fields. Thank you!");
        errorRaised = true;
    }

    if (!isValidEmail(email)) {
        emailErrorMessage.innerText = "Invalid email. Please retype valid email";
        errorRaised = true;

    }

    if (!isAgeNumeric(age)) {
        ageErrorMessage.innerText = "Invalid Age. Please enter a valid age";
        errorRaised = true;

    }

    if (!passwordsMatch(password, repeatPassword)) {
        passwordErrorMessage.innerText = "Passwords do not match. Please retype passwords";
        errorRaised = true;
    }

    if (errorRaised) {
        e.preventDefault();
    } 
}

function clearForm(e) {
    if (!confirm("Are you sure you want to clear all fields?")) {
        e.preventDefault();
        return;
    }

    clearErrorMessages();

    let firstName = document.getElementById("first-name");
    let lastName = document.getElementById("last-name");
    let email = document.getElementById("email");
    let age = document.getElementById("age");
    let password = document.getElementById("password");
    let repeatPassword = document.getElementById("repeat-password");

    firstName.value = "";
    lastName.value = "";
    email.value = "";
    age.value = "";
    password.value = "";
    repeatPassword.value = "";
}

window.onload = function() {
    let submitButton = document.getElementById("submit-button");
    let clearButton = document.getElementById("clear-button");
    submitButton.addEventListener("click", validateForm);
    clearButton.addEventListener("click", clearForm)
}
