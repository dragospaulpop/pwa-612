<?php
  require_once('./secure.php');

  if (isset($loggedIn)) {
    $title = isset($_POST['title']) ? trim($_POST['title']) : false;

      if ($title !== false && strlen($title) > 0) {
        require_once('./mysql.php');

        $link=connect();
        addTodo($link, $_SESSION['id_user'], $title);
      }

    header('Location: index.php');
  }
?>