<?php
  class Db {

    public $users;
    public $passwords;
    
    public function __construct() {

      // $this->users = array('david' => 'david', 'hiram' => 'hiram');
      $this->passwords = array('david' =>'1234', 'hiram' => '4321');

    }

  }
?>
