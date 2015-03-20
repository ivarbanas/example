<?php
const USERNAME = 'testuser';
const PASSWORD = 'testpass';


if (!empty($_POST)) {
    // this is post request, let's check values

    $username = null;
    $password = null;

    if (isset($_POST['userUsername'])) {
        $username = (string)$_POST['userUsername'];
    }

    if (isset($_POST['userPassword'])) {
        $password = (string)$_POST['userPassword'];
    }

    $errors = [];

    if ($username != USERNAME || $password != PASSWORD ) {
        $errors['general'] = 'Wrong credentials';
    }

    if (empty($username)) {
        $errors ['userUsername'] = 'You have to enter username';
    }

    if (empty($password)) {
        $errors ['userPassword'] = 'You have to enter password';
    }

    if (!empty($errors)) {
        // there are errors, return 400 with json with errors
        http_response_code(400);
    } else {
        // there are no errors, return 200
        http_response_code(200);
    }
    header('Content-Type: application/json');
    echo json_encode($errors);
    exit();
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Login</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/scriptMoje.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
	
    <script>
            $('#myForm').submit(function(){
                $.ajax({
                    type: "POST",
                    url: "script.php",
                    dataType:'json',
                    data: $('#myForm').serialize(),

                    success: function (data) {
                        $("#result").html("Success - LogIn !");
                        $("#result").addClass("succMessage");
                        $("#result").removeClass("errMessage");
						$("#login").addClass("buttonDivHide");


                    },
                    error: function(data){
                        json = data.responseJSON;
                        
                        var output = "";
                        if (json.general != undefined) {
                            output += json.general;
                        }
                        if (json.userUsername != undefined) {
                            output += "<br/>" + json.userUsername;
                        }
                        if (json.userPassword != undefined) {
                            output += "<br/>" + json.userPassword;
                        }
    
                        //console.log(output);
                        
                        $("#result").html(output);
                        $("#result").addClass("errMessage");
                    }
                });
               return false;
            });




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
    </script>
</head>
<body>
<div id="ajaxContainer">
    <button class="mfp-close" type="button" title="Close">x</button>
    <div class="titleLogin">
        Sign in
    </div>
    <div id="result"></div>
    <div class="loginIcon">
        <span class="icon-kilococach_icon_fonts_template-90"></span>
    </div>
    <form method="post" id="myForm" >
        <div class="first">
            <input type="text" name="userUsername" id="userUsername" placeholder="Username" /><br>
            <span id="usernameInfo"></span>
        </div>
        <div class="second">
            <input type="password" name="userPassword" id="userPassword" placeholder="Password" /><br>
            <span id="passwordInfo"></span>
        </div>
        <div class="buttonDiv">         
            <input type="submit" class="button" id="login" name="login"  value="Sign In" />
        </div>
    </form>
</div>
</body>
</html>