<?php
  include('../model/login.php');
  class LoginController{
    private $user;
    private $pass;
    private $model;
    
    public function __construct(){
      $this->model = new LoginModel;
    }

    public function access(){
      if (isset($_POST['user'])){
        if ($_POST['pass'] == $this->model->getPassword($_POST['user'])) {
          header('LOCATION: dashboard');
        }
      } else {
        echo 'Error POST';
      }
    }
  }
?>
