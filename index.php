<?php

if (isset($_GET['url'])) {

  $url = $_GET['url'];

  include('views/' . $url . '.php');

} else {

  include('views/login.php');

}

?>
