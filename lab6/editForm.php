<?php
  require_once('./secure.php');  
    
  if (isset($loggedIn)) {
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $userId = isset($_GET['userId']) ? $_GET['userId'] : null;
    
    if ($id && $userId) {
      require_once('./readDb.php');

      $title = null;

      foreach($toDos as $todo) {
        if ($todo['userId'] == $userId && $todo['id'] == $id) {
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
  <input type="hidden" value="<?= $userId; ?>" name="userId">
  <input type="text" value="<?= $title; ?>" name="title">
  <button class="waves-effect waves-light green btn">
    <i class="material-icons white-text">save</i>
  </button>
</form>
</body>
</html>
<?php endif; ?>
