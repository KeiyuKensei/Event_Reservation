<?php

session_start();

if(isset($_SESSION[$_REQUEST['name_event']])) {

  $people = $_REQUEST['people_event'] + $_SESSION[$_REQUEST['name_event']][1];
  $_SESSION[$_REQUEST['name_event']] = array($_REQUEST['name_event'], $people);
} else {

  $_SESSION[$_REQUEST['name_event']] = array($_REQUEST['name_event'], $_REQUEST['people_event']);
}

header("location: ../");

?>
