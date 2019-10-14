<?php

include('../config/db.php');

  class LoginModel {
    private $db;
    private $user;
    private $pass;

    public function __contruct(){
      $this->db = new Db();
    }

    public function getPassword($user){
      return $this->db->passwords[$user];
    }

  }
?>
