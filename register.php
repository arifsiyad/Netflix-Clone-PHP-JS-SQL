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





    </div>



</div>

</body>

</html>