</br>
<!--Show the messages by according the behavior of the functions-->
<?php
  if(array_key_exists("removed", $_GET))://if the cpf was removed with success
?>
  <p class="alert-success">CPF was removed with success!</p>

<?php
  elseif(array_key_exists("added", $_GET))://if the cpf was added with success
?>
  <p class="alert-success">CPF was added with success!</p>

<?php
  //if the cpf status was updated with success
  elseif(array_key_exists("changed", $_GET) && array_key_exists("cpf", $_GET) && array_key_exists("status", $_GET) ):
?>
  <p class="alert-success">The new status of CPF: <?=cpf_change_string($_GET['cpf'])?> is <?=$_GET["status"]?> !  </p>

  <?php
  //if the isn't exists any cpf in database
    elseif(!$cpfs):
  ?>
    <p class="alert-warning">No exists any CPF on database! First, you need to add someone.</p>

<?php
endif;?>
