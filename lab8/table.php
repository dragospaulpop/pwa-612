<?php
  require_once('./secure.php');
?>
<?php
  if (isset($loggedIn)):
?>
<table class="responsive-table highlight striped">
  <thead>
    <tr>
      <?php foreach($keys as $key): ?>
        <th><?= $key; ?></th>
      <?php endforeach; ?>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($toDos as $row): ?>
    <tr>
      <?php foreach($row as $key=>$cell): ?>
      <td>
        <?php if($key==="completed"): ?>
        <?php if($cell): ?>
        <i class="material-icons green-text">done</i>
        <?php else: ?>
          <i class="material-icons red-text">close</i>
          <?php endif; ?>
        <?php else: ?>
          <?= $cell ?>
        <?php endif; ?>
      </td>
      <?php endforeach; ?>
      <td>
        <div style="display: flex; justify-content: flex-end">
          <form action="delete.php" method="post" style="display: inline-block; margin: 0 1em">
            <input type="hidden" name="userId" value="<?= $row['userId']; ?>">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <button class="waves-effect waves-light red lighten-4 btn btn-small">
              <i class="material-icons red-text">delete</i>
            </button>
          </form>
          <form action="editForm.php" method="get" style="display: inline-block; margin: 0 1em">
            <input type="hidden" name="userId" value="<?= $row['userId']; ?>">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <button class="waves-effect waves-light blue lighten-4 btn btn-small">
              <i class="material-icons blue-text">edit</i>
            </button>
          </form>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>