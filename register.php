<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");

    if(isset($_POST["submitButton"])) {

    
    
    $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
    $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
    $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
    $email = FormSanitizer::sanitizeFormEmail($_POST["Email"]);
    $email2 = FormSanitizer::sanitizeFormEmail($_POST["Email2"]);
    $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
    $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

echo $firstName . "<br>"; 
echo $lastName . "<br>"; 
echo $username. "<br>" ;
echo $email. "<br>"; 
echo $email2. "<br>"; 
echo $password. "<br>"; 
echo $password2. "<br>"; 

}

    
?>



<!DOCTYPE html>
<html>
   <head>
     <title>Welcome to Reeceflix </title>

    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />

   </head>
<body> 


<div class="signInContainer">

    <div class="column">

    <div class="header">
    <img src="assets/images/logo.png" title="Logo" alts="Site Logo">
        <h3> Sign Up </h3>
        <span> to continue to Reddflix </span>
        

        <form method="POST">


            <input type="text" name="firstName" placeholder="First Name" required>

            <input type="text" name="lastName" placeholder="Last Name" required>

            <input type="text" name="username" placeholder="Username" required>

            <input type="email" name="Email" placeholder="Email" required>

            <input type="email" name="Email2" placeholder="Confirm Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="password" name="password2" placeholder="Confirm Password" required>

            <input type="submit" name="submitButton" value="SUBMIT">




        </form>

            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>



    </div>



</div>

</body>

</html>