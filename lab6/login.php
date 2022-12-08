<?php
   $user = isset($_POST['user']) ? trim($_POST['user']) : null;
   $pass = isset($_POST['pass']) ? trim($_POST['pass']) : null;

   if ($user && $pass) {
    if ($user === 'User1' && $pass === 'pass') {
      session_start();
      $_SESSION['user'] = 'User1';
      header('Location: index.php');
    } else {
      $msg = 'Credentiale incorecte.';
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<?php include('./head.php'); ?>
<body>
<form action="login.php" method="post">
  <?php if (isset($msg)): ?>
    <p class="red-text"><?= $msg; ?></p>
  <?php endif; ?>
  <input type="text" name="user">
  <input type="password" name="pass">
  <button class="waves-effect waves-light green btn">
    Login
    <i class="material-icons white-text right">login</i>
  </button>
</form>
</body>
</html>
