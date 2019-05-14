<?php
  include("header.php");
  include("functions.php");

//call this function to show all the cps has status BLOCK
  $cpfs = cpf_show_by_status();

//if variable $cpfs is false the warning message will be shown
  if(!$cpfs):
?>
</br>
  <p class="alert-warning">No exists any CPF in blacklist.</p>
<?php
//if variable $cpfs isn't false and have some information, all the cpfs that is BLOCK will be shown
  else:
?>
<br/>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">CPF</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
<tbody>
  <!--show all the cpfs and creat a new row in the table -->
<?php  foreach ($cpfs as $cpf):?>
  <tr>
      <th scope="row"><?=$cpf['idCPF']?></th  >
      <td><label id="cpf"/><?=cpf_change_string($cpf['CPF_num'])?></td>
      <td><?=$cpf['CPF_status']?></td>
  </tr>
</thead>
<?php endforeach ?>
</tbody>
</table>

<?php
  endif;
  include("footer.php");
?>
