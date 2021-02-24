document.getElementById("myform").onsubmit = validate;

function validate()
{
    let isValid = true;

    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++)
    {
        errors[i].style.display = "none";
    }

    let first = document.getElementById("fname").value;
    if (first === "")
    {
        let errFirst = document.getElementById("err-fname");
        errFirst.style.display = "inline";
        isValid = false;
    }


    let last = document.getElementById("lname").value;
    if (last === "")
    {
        let errLast = document.getElementById("err-lname");
        errLast.style.display = "inline";
        isValid = false
    }

    let met = document.getElementById("met").value;
    if (met === "") {
        let errMet = document.getElementById("err-met");
        errMet.style.display = "inline";
        isValid = false
    }

    let methods = document.getElementById("methods");
    if (methods.checked)
    {
        let email = document.getElementById("eaddress").value;
        if (email === "") {
            let errEmail = document.getElementById("err-eaddress");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }

    return isValid;

}