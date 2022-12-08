<?php
  require_once('./secure.php');
?>
<?php
  if (isset($loggedIn)):
?>
<form action="addTodo.php" method="post">
  <div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <span class="card-title">Adaugare Todo</span>
      <input type="text" name="title">
    </div>
    <div class="card-action">
      <button class="waves-effect waves-light green btn">
        <i class="material-icons white-text">add</i>
      </button>
    </div>
  </div>
</form>
<?php endif; ?>