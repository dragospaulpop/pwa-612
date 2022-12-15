<?php
  function connect () {
    $link = mysqli_connect('localhost', 'root' , '' ,'todos');

    return $link;
  }

  function login ($link, $user, $pass) {
    $sql = "SELECT id, username  FROM users WHERE username = '$user' AND active = 1 and password = PASSWORD('$pass');";
    $result = mysqli_query($link, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
      $row = mysqli_fetch_assoc($result);

      return $row;
    } else {
      return false;
    }
  }

  function readTodos ($link, $id_user) {
    $sql = "SELECT *  FROM `todos` WHERE `id_user` = '$id_user';";
    $result = mysqli_query($link, $sql);
    $numRows = mysqli_num_rows($result);
    $todos = [];
    if ($numRows > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $todos[] = $row;
      }
    }
    return $todos;
  }

  function addTodo ($link, $id_user, $title) {
    $sql = "INSERT INTO `todos` (`id_user`, `title`) VALUES ($id_user, '$title');";
    mysqli_query($link, $sql);
  }

  function editTodo ($link, $id_user, $title, $id) {
    $sql = "UPDATE `todos` SET `title` = '$title' WHERE `id` = $id AND `id_user` = $id_user;";
    mysqli_query($link, $sql);
  }

  function deleteTodo ($link, $id_user, $id) {
    $sql = "DELETE FROM todos WHERE `id` = $id AND `id_user` = $id_user";
    mysqli_query($link, $sql);
  }

  function toggleTodo ($link, $id_user, $completed, $id) {
    $sql = "UPDATE `todos` SET `completed` = '$completed' WHERE `id` = $id AND `id_user` = $id_user;";
    mysqli_query($link, $sql);
  }
?>