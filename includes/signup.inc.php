<?php

if(isset($_POST["submit"]))
{
    //grab data from form
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $confirmPwd=$_POST["confirmPwd"];
    $e_mail=$_POST["e_mail"];

    //instaniate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $e_mail, $pwd, $confirmPwd); 
    //running error handlers
    $signup->signupUser(); 
    //going back to front page
    header("location: ../index.php?error=none");


}