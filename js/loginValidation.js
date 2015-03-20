$(document).ready(function(){
    var form = $("#myForm");
    var username = $("#userUsername");
    var usernameInfo = $("#usernameInfo");
    var password = $("#userPassword");
    var passwordInfo = $("#passwordInfo");
    
    form.submit(function(){
        if(validateUsername() & validatePassword())
            return true
        else
            return false;
    });
    function validatePassword(){
        
        if(password.val() != "testpass"){
            password.addClass("error");
            passwordInfo.text("Please type a valid password!");
            passwordInfo.addClass("error");
            return false;
        }
        else{
            password.removeClass("error");
            passwordInfo.text("Password valid!");
            passwordInfo.removeClass("error");
            return true;
        }
        
    }
    function validateUsername(){
        if(username.val() != "testuser"){
            username.addClass("error");
            usernameInfo.text("Please type a valid username!");
            usernameInfo.addClass("error");
            return false;
        }
        else{
            username.removeClass("error");
            usernameInfo.text("Username valid!");
            usernameInfo.removeClass("error");
            return true;
        }
    }
});