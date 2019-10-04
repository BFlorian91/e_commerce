<?php

  function sign_in($db) {

    $password = $_SESSION['password'];
    $username = $_POST['username'];

    if (isset($_POST['username']) && isset($_POST['password'])) {
      $stmt = mysqli_query($db,"SELECT password from user where username='$username'");
      $verif = mysqli_fetch_row($stmt);
      $hashedPassword = $verif[0];

      if($verif)
      {
        if (password_verify($password, $hashedPassword)) {
          session_start();
          $_SESSION['username'] = $_POST['username'];
          echo "bonjour ! ".$_SESSION['username'];
          return get_article_in_shop($db);
        } else {
          echo "<p>invalid username or password !</p>";
          return createLoginForm();
        }
      } else {
        echo "invalid data";
        return createLoginForm();
      }
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
      }
      else {
      return createLoginForm();
    }

  }

?>
