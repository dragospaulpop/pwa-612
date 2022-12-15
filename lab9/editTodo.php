<?php
  require_once('./secure.php');

  if (isset($loggedIn)) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $title = isset($_POST['title']) ? trim($_POST['title']) : null;

    if ($id && $title && strlen($title) > 0) {
      require_once('./mysql.php');
      $link = connect();
      editTodo($link, $_SESSION['id_user'], $title, $id);
      header('Location: index.php');
    } else {
      header('Location: index.php');
    }

  }
?>