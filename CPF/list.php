  <?php
  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions

  $cpfs = cpf_show_all(); //call the function and return all the cpfs in database for this var

  include("message_list.php");//include the messages that will be shown for the user
  ?>

  <p/>
  <!--CREATE THE TABLE FOR SHOW THE CPF-->
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">CPF</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
  <tbody>
  <!--SHOW EACH ONE CPF THAT WAS REUTNED BY THE FUNCTION-->
  <?php  foreach ($cpfs as $cpf):?>
    <tr>
        <th scope="row"><?=$cpf['idCPF']?></th  >
        <td><label id="cpf"/><?=cpf_change_string($cpf['CPF_num'])?></td>
        <td><?=$cpf['CPF_status']?></td>
        <td>
          <a href="remove.php?cpf=<?=$cpf['CPF_num']?>" class="danger">Remove</a>
          |
          <a href="update.php?id=<?=$cpf['idCPF']?>&cpf=<?=$cpf['CPF_num']?>&status=<?= $cpf['CPF_status'] ?>" class="danger">
          <?php
            if($cpf['CPF_status']=="FREE"):
          ?>
          <!--Change the option by according the status of each one cpf-->
            Add Blacklist
          <?php else: ?>
            Remove Blacklist
          <?php endif ?>
          </a>
        </td>
    </tr>
  </thead>
  <?php endforeach ?>
  </tbody>
  </table>

  <?php include("footer.php"); ?>
