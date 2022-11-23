function setErrorMsg(message){
    document.getElementById('errormsg').innerHTML=message;
}

function validatefields(){

    var isUsernameValid = false;
    var isPasswordValid = false;
    var ismatchPass = false;
    
    var username = document.forms['form1']['username'].value;

    if(username){
        if(username.length >= 8){
            isUsernameValid = true;
        }else{
            setErrorMsg('Username should be at least 8 characters long.');
            return false;
        }
       
    }else{
        setErrorMsg('Enter the Username');
        return false;
    }

    var password = document.forms['form1']['password'].value;

    if(password){
        if(password.length >= 8){
            isPasswordValid = true;
        }else{
            setErrorMsg('Password should be at least 8 characters long.');
            return false;
        }
       
    }else{
        setErrorMsg('Enter the Password');
        return false;
    }

    var confpassword = document.forms['form1']['confpassword'].value;

    if(confpassword){
        if(confpassword == password){
            ismatchPass = true;
        }else{
            setErrorMsg('Incorrect Password. Reenter the correct password.');
            return false;
        }

    }else{
        setErrorMsg('Confirm the password');
        return false;
    }

    if(isUsernameValid && isPasswordValid && ismatchPass){
        alert("Login Success!");
    }

}

function validateUsername(){
    var username = document.forms['form1']['username'].value;

   if(username && username.length > 8){
       document.getElementById('usernamelable').style.color ="blue";
   }else{
       document.getElementById('usernamelable').style.color ="red";
   }
}

function validatePassword(){
    var password = document.forms['form1']['password'].value;

   if(password && password.length > 8){
       document.getElementById('passwordlable').style.color ="green";
   }else{
       document.getElementById('passwordlable').style.color ="red";
   }
}