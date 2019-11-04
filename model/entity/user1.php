<?php
class User1
{
    var $userName;
    var $passWord;
    var $id;
    
    function User1($userName, $passWord)
    {
        $this->userName = $userName;
        $this->passWord = $passWord;
       
       
    }
    static function authentication($userName, $pw)
    {
      
           return new User1($userName, $pw);
        return null;
    }
}
