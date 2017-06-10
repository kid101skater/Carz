<?php
class User
    {
        private $userId;
        private $username;
        private $password;
 
        function __construct($userId, $username, $password)
        {
        $this->userId = $userId;
        $this->username = $username;
        $this->password = $password;
        }
    
        function getUserId()
        {
            return $this->UserId;        
        }
        
        function setUsername()
        {
            $this->username = $username;
        }
        
        function getUsername()
        {
            return $this->username;
        }
        
        function setPassword($password)
        {
            $this->password = $password;
        }
        
        function getPassword()
        {
            return $this->password;
        }