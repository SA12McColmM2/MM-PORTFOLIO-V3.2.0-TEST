function check(form) { /*function to check userid & password*/

    /*the following code checkes whether the entered userid and password are matching*/
    if(form.userid.value == "MissLawrence" && form.pswrd.value == "Technical21!") {
        window.open('dofe.html')/*opens the target page while Id & password matches*/
    }
    if(form.userid.value == "MissFulton" && form.pswrd.value == "Geography2021£") {
        window.open('dofe.html')/*opens the target page while Id & password matches*/
    }
    if(form.userid.value == "DanielScott" && form.pswrd.value == "BYOL2021@") {
        window.open('dofe.html')/*opens the target page while Id & password matches*/
    }
    if(form.userid.value == "MatthewMcColm" && form.pswrd.value == "Failavenue66") {
        window.open('dofe.html')/*opens the target page while Id & password matches*/
    }
    else {
        alert("Error Password or Username")/*displays error message*/
    }
}