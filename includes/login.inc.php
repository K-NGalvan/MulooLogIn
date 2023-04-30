<?php

if(isset($_POST["submit"]))
{
    //grab data from form
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    

    //instaniate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $login = new LoginContr($uid, $pwd); 
    //running error handlers
    $login->loginUser();
    //going back to front page
    header("location: ../index.php?error=none");


}