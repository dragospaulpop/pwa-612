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
?>