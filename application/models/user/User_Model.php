<?php
class User_Model extends CI_Model
{
    protected $userID;
    public function __construct()
    {
        if(isset($_SESSION['login'])){
            $this->userID = $_SESSION['login']->rowid;
        }
       
    }
}