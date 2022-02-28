function passwordEquality(){

    const password        = document.signup.password.value;
    const retypedPassword = document.signup.retype_password.value;

    if(password === retypedPassword){

        return true;
    }

    alert("It seems like there had been an error when retyping your password!\nPlease try again!");
    return false;
}

const submitButton = document.signup.submit.addEventListener('click', function(event){

    document.cookie="password_equality=" + passwordEquality();
});
