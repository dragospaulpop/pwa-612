<?php
  require_once('./secure.php');

  if (isset($loggedIn)) {
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $id_user = isset($_GET['id_user']) ? $_GET['id_user'] : null;

    if ($id && $id_user) {
      require_once('./readDb.php');

      $title = null;

      foreach($toDos as $todo) {
        if ($todo['id_user'] == $id_user && $todo['id'] == $id) {
          $title = $todo['title'];
        }
      }

      if ($title === null) {
        header('Location: index.php');
      }

    } else {
      header('Location: index.php');
    }
  }
?>
<?php if (isset($loggedIn) && $loggedIn): ?>
<!DOCTYPE html>
<html lang="en">
<?php include('./head.php'); ?>
<body>
<form action="editTodo.php" method="post">
  <input type="hidden" value="<?= $id; ?>" name="id">
  <input type="hidden" value="<?= $id_user; ?>" name="id_user">
  <input type="text" value="<?= $title; ?>" name="title">
  <button class="waves-effect waves-light green btn">
    <i class="material-icons white-text">save</i>
  </button>
</form>
</body>
</html>
<?php endif; ?>
