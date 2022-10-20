<?php
  $produse = [
    [1, 'mere' , 123.25, true ],
    [2, 'pere' , 33.28, true  ],
    [3, 'gutui', 7.12, false  ],
    [4, 'capsuni', 9.72, true ],
    [5, 'prune', 8.12, false  ],
  ];
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
                <th>#</th>
                <th>Denumire</th>
                <th>Pret</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($produse as $rand):?>
              <tr>
                <?php foreach($rand as $index=>$celula): ?>
                <td>
                  <?php if($index==3): ?>
                    <i class="material-icons <?= $celula ? "green-text" : "red-text" ?>">
                      <?= $celula ? "done" : "close" ?>
                    </i>
                  <?php else: ?>
                    <?=$celula?>
                  <?php endif; ?>
                </td>
                
                <?php endforeach;?>
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