function validateForm() {
    let username = document.getElementById("user_name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;
    let phone = document.getElementById("phone").value;

    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("confirmPasswordError").innerHTML = "";
    document.getElementById("phoneError").innerHTML = "";

    if (username === "") {
        document.getElementById("usernameError").innerHTML = "Username is required";
        return false;
    }
    let namePattern = /^[A-Z][a-z]+(\s[A-Z][a-z]+)*$/;
    if (!namePattern.test(username)) {
        document.getElementById("usernameError").innerHTML = "Use proper capitalization";
        return false;
    }

    let emailPattern = /^[a-z0-9._-]+@(gmail|yahoo|hotmail)+\.[a-z]{3}$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Invalid email format";
        return false;
    }

    let passPattern = /^[A-Za-z0-9]{6,}$/;
    if (!passPattern.test(password)) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
        return false;
    }

    if (password !== confirmPassword) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match";
        return false;
    }

    let phonePattern = /^(013|014|015|016|017|018|019)[0-9]{8}$/;
    if (!phonePattern.test(phone)) {
        document.getElementById("phoneError").innerHTML = "Phone number must be exactly 11 digits";
        return false;
    }

    return true;
}
