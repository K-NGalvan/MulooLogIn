<?php
class SignupContr extends Signup{
    private $uid;
    private $e_mail;
    private $pwd;
    private $confirmPwd;
    

    public function __construct($uid, $e_mail, $pwd, $confirmPwd){
        $this->uid = $uid;
        $this->e_mail = $e_mail;
        $this->pwd = $pwd;
        $this->confirmPwd = $confirmPwd;
    }

    public function signupUser(){
        if($this->emptyInput() == false)
        {
            //echo "Empty Input" 
            header("location: ../index.php?error=emptyinput");
            exit;
        }

       if($this->invalidUid() == false)
       {
        //echo "invalid Uid" 
        header("location: ../index.php?error=uid");
        exit();
        }

       if($this->invalidEmail() == false)
       {
        //echo "invalid Email" 
        header("location: ../index.php?error=email");
        exit();
       }

       if($this->confirmPwd() == false)
       {
        //echo "passwords dont match"
        header("location: ../index.php?error=passwordmatch");
        exit();
       }

       if($this->uidTakenCheck() == false)
       {
        //echo "passwords dont match"
        header("location: ../index.php?error=useroremailtaken");
        exit(); 
       }

       $this->setUser($this->uid, $this->e_mail, $this->pwd);

    }


    public function emptyInput(){
        $result = false; 

        if (empty($this->uid) || empty($this->e_mail) || empty($this->pwd) || empty($this->confirmPwd))
            {
            $result;
            }
            else
            {
                $result = true; 
            }
            return $result;
        
    }
    public function invalidUid(){
        $result = false; 

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
            {
            $result;
            }
            else
            {
                $result = true; 
            }
            return $result; 
        
    }

    public function invalidEmail(){
        $result = false; 

        if (!filter_var($this->e_mail, FILTER_VALIDATE_EMAIL))
            {
            $result;
            }
            else
            {
                $result = true; 
            }
            return $result; 
        
    }
    public function confirmPwd(){
        $result = false; 

        if ($this->pwd !== $this->confirmPwd)
            {
            $result;
            }
            else
            {
                $result = true; 
            }
            return $result;
    }

    public function uidTakenCheck(){
        $result = false; 

        if(!$this->checkUser($this->uid, $this->e_mail))
            {
            $result;
            }
            else
            {
                $result = true; 
            }
            return $result; 
        
    }



}