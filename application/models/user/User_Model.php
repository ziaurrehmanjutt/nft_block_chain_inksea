<?php
class User_Model extends CI_Model
{
    public $userID;
    public function __construct()
    {
        if(isset($_SESSION['login'])){
            $this->userID = $_SESSION['login']->rowid;
        }
       
    }
}