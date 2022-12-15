<?php
  require_once('./secure.php');

  if (isset($loggedIn)) {
    $id = isset($_POST['id']) ? $_POST['id'] : false;

    if ($id !== false) {
      require_once('./mysql.php');
      $link=connect();
      deleteTodo($link, $_SESSION['id_user'], $id);
    }

    header('Location: index.php');
  }
?>