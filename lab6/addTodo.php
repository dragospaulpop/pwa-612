<?php
  require_once('./secure.php');

  if (isset($loggedIn)) {
    $title = isset($_POST['title']) ? trim($_POST['title']) : false;

      if ($title !== false && strlen($title) > 0) {
        require_once('./readDb.php');

        $max = 0;
        foreach($toDos as $todo) {
          if ($todo['userId'] === 1 && $todo['id'] > $max) {
            $max = $todo['id'];
          }
        }

        $toDos[] = [
          'userId' => 1,
          'id' => $max + 1,
          'title' => $title,
          'completed' => false,
        ];

        $stringData = json_encode($toDos);
        file_put_contents($dbFile, $stringData);
      }

    header('Location: index.php');
  }
?>