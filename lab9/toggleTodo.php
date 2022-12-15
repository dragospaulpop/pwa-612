<?php
  require_once('./secure.php');

  if (isset($loggedIn)) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $completed = isset($_POST['completed']) ? $_POST['completed'] : null;

    if ($id) {
      require_once('./mysql.php');
      $link = connect();
      toggleTodo ($link, $_SESSION['id_user'], $completed, $id);
      header('Location: index.php');
    } else {
      header('Location: index.php');
    }

  }
?>