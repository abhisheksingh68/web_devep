 // Defining a function to display error message
 function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
       // Defining a function to validate form 
       function validateForm() {
        var email = document.contactForm.email.value;
        var password = document.contactForm.password.value;
    
                   // Validate email address
                   if (email == "") {
                    printError("emailErr", "Please enter your email address");
                } else {
                    // Regular expression for basic email validation
                    var regex = /^\S+@\S+\.\S+$/;
                    if (regex.test(email) === false) {
                        printError("emailErr", "Please enter a valid email address");
                    } else {
                        printError("emailErr", "");
                        emailErr = false;
                    }
                }
            }