<?php
session_start();
  function check_session()
  {
      if(isset($_SESSION['logged_in'])){
          return true;
      } elseif (isset($_POST['username'], $_POST['password']) && $_POST['username']=="srivasshubh@gmail.com" && $_POST['password']=="composition27"){
          return true;
      }
      return false;
  }
