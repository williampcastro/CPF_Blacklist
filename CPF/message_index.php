</br>

<!--Show the messages by according the behavior of the functions-->

<?php
  //if the cpf informed dont have a right length  when the user tries to add
  if(array_key_exists("err", $_GET) && $_GET["err"]=="error_index"):
  ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    Please, inform CPF again!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  endif;
  //if the cpf informed dont have a right lenth when the user tries to consult
  if(array_key_exists("err", $_GET)&& $_GET["err"]== "error_consult"):
  ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    Please, inform CPF again for <strong>consult</strong>! The CPF wasn't registered!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php endif;
  //if the cpf informed already exits in databases
  if(array_key_exists("added", $_GET)&& $_GET["added"]== "false"):
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    This CPF already exists! Please, inform another CPF!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php endif?>
