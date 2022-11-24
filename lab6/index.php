<?php  
  require_once('./secure.php');  
  
  if (isset($loggedIn)) {
    require_once('./readDb.php');  
  } else {
    header('Location: login.php');
  }
?>

<?php if (isset($loggedIn) && $loggedIn): ?>
<!DOCTYPE html>
<html lang="en">
<?php include('./head.php'); ?>
<body>
  <a href="logout.php">Logout</a>
  <?php include('./addForm.php'); ?>
  <?php include('./table.php'); ?>
</body>
</html>
<?php endif; ?>
