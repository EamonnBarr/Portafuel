//If Email address is invalid - Missing @ and .com etc - Alert shows
function validEmail()
{
    if (!document.userSurvey.eMail.value)
    {
        alert("E-mail Address missing. Please enter a valid E-mail address to continue.");
        document.userSurvey.eMail.focus();
        return false;
    }
    else
    {
        var emailAddress = document.userSurvey.eMail.value;
        var atLoc = emailAddress.indexOf("@",1);
        var dotLoc = emailAddress.indexOf(".",atLoc+2);
        var len = emailAddress.length;

        if (atLoc > 0 && dotLoc > 0 && len > dotLoc+2)
        {
            return true;
        }
        else
        {
            alert("Invalid E-mail address! Please enter your e-mail address again.");
            document.userSurvey.eMail.focus();
            return false;
        }
    }
}


//If Name is invalid then alert shows and focus on the input box
function validName()
{
    if (!document.userSurvey.userName.value)
    {
        alert("Name not entered. Please enter your name to continue.");
        document.userSurvey.userName.focus();
        return false;
    }
    else
    {
        return true;
    }
}


}

function validInput()
{
    if((validName())&&(validEmail()))
    {
        return true;
    }
    else
    {
        return false;
    }
}