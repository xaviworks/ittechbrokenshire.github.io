<?php 
  $errorMessage = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'jxta' && $password === '123') {
      header('Location: success.html');
      exit();
    } else {
      header('location: error.html');
    }
  }
?>
