<?php

class Signup extends Dbh{

    protected function setUser($uid, $e_mail, $pwd) {
        $stmt = $this->connect()->prepare('INSERT INTO users (user_uid, user_e_mail, user_pwd) VALUES (?,?,?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $e_mail, $hashedPwd))){
            $stmt = null; 
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

    }

    protected function checkUser($uid, $e_mail) {
        $stmt = $this->connect()->prepare('SELECT user_uid FROM users WHERE user_uid = ? OR user_e_mail = ?;');

        if(!$stmt->execute(array($uid, $e_mail))){
            $stmt = null; 
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;

        if($stmt->rowCount() > 0){
            $resultCheck;
        }
        else{
            $resultCheck = true; 
        }

        return $resultCheck;
        }
 
}