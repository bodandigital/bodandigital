function validate(){
    
    var isfname = false;
    var islname = false;
    var isemail = false;
    var isuser = false;
    var ispswd = false;
    
    isemail = checkMail();
    isuser = checkData("username","Choose a user name","usermsg");
    islname = checkData("lastname","Last name is required","lastmsg");
    isfname = checkData("firstname","First name is required","firstmsg");
    
    
    if(isfname && islname && isuser && isemail){
        document.getElementById("signup").submit();
    }
    
    
    // Function to check input boxes are not empty
    function checkData(input, message, msg)
    {
        if(document.getElementById(input).value != "")
        {
            return true;
        }
        else
        {
            document.getElementById(msg).innerHTML = message;
            document.getElementById(msg).style.color = "red";
        }
    }
    
    function checkMail(){
        var at = document.getElementById("email").value.indexOf("@");
        var dot = document.getElementById("email").value.indexOf(".");
        
        if(at != -1 && dot != -1){
            return true;
        }else{
            document.getElementById("emailmsg").innerHTML = "Email Address is Bullshit";
            document.getElementById("emailmsg").style.color = "red";
        }
    }
}


