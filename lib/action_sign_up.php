<?php

  function password_encrypted($password) {
      return password_hash($password, PASSWORD_BCRYPT);
  }

  function sign_up($db) {
    $message = '';
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
      }
      $password = password_encrypted($_post['password']);
      $stmt = mysqli_prepare($db, "INSERT INTO user(username, password, email) VALUES (?, ?, ?)");
      mysqli_stmt_bind_param($stmt, 'sss', $_POST['username'], $password, $_POST['email']);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      $message = "bonjour ".$_POST['username'];
      echo $message;
      session_start();
      $_SESSION['password'] = $_POST['password'];
      return homeContent();
    }
    else {
      $message = 'invalid data !';
      return create_signup_form();
    }
    return $message;
  }
?>
