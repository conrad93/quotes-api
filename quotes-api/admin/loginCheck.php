<?php
  require_once('config.php');
  $admin_email = $_POST['email'];
  $admin_password = $_POST['password'];
  $query = "SELECT * FROM admin_register where email = '$admin_email' AND password = '$admin_password'";
  $result = mysqli_query($conn, $query);
  $res = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['admin_id'] = $res['id'];
    $_SESSION['admin_email'] = $res['email'];
    $_SESSION['admin_name'] = $res['name'];
    header("Location: dashboard.php?loginSuccess=1");
  } 
  else {
    header("Location: index.php?loginError=1");
  }
  mysqli_free_result($result);
  mysqli_close($conn);
?>