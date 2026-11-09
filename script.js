function welcomeUser(){

    alert("Welcome to AgriConnect");

}

function validateForm(){

    let email =
    document.getElementById("email").value;

    let password =
    document.getElementById("password").value;

    if(email==""){
        alert("Email required");
        return false;
    }

    if(password.length < 8){
        alert(
        "Password must be at least 8 characters"
        );
        return false;
    }

    return true;
}
