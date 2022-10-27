<?php
  var_dump($_POST);
  if (file_exists('./todos.json')) {
    $rawdata=file_get_contents('./todos.json');
    $todos=json_decode($rawdata, true);
  } else {
    $rawdata=file_get_contents('https://jsonplaceholder.typicode.com/todos/');
    $todos=json_decode($rawdata, true);
    file_put_contents('./todos.json', $rawdata);
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div class="row">
    <div class="col s8">
      <div class="card">
        <div class="card-content">
          <div class="card-title">PRODUSE</div>
          <table>
            <thead>
              <tr>
                <th>User ID</th>
                <th>ID</th>
                <th>Title</th>
                <th>Completed</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($todos as $rand):?>
              <tr>
                <?php foreach($rand as $index=>$celula): ?>
                <td>
                  <?php if($index=='completed'): ?>
                    <i class="material-icons <?= $celula ? "green-text" : "red-text" ?>">
                      <?= $celula ? "done" : "close" ?>
                    </i>
                  <?php else: ?>
                    <?=$celula?>
                  <?php endif; ?>
                </td>
                
                <?php endforeach;?>
                <td>
                  <form action="index.php" method="post">
                  <button class="waves-effect waves-light btn-small"><i class="material-icons left">delete</i></button>
                  <input type="hidden" name="id" value="<?= $rand["id"] ?>">
                  </form>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
