<?php

    if(isset($_POST["submitButton"]))
    echo "Form submitted"
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
        <h3> Sign In </h3>
        <span> to continue to Reddflix </span>
        

        <form method="POST">


           

            <input type="text" name="username" placeholder="Username" required>


            <input type="password" name="password" placeholder="Password" required>

            <input type="submit" name="submitButton" value="SUBMIT">




        </form>

            <a href="register.php" class="signInMessage">Already have an account? Sign Up here!</a>



    </div>



</div>

</body>

</html>