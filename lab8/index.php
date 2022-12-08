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
  <div class="container">
    <div class="row">
      <div class="col s4 offset-s4 center-align">
        <a href="logout.php">Logout, <?= $_SESSION['user'] ?></a>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <?php include('./addForm.php'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <?php include('./table.php'); ?>
      </div>
    </div>
  </div>
</body>
</html>
<?php endif; ?>
