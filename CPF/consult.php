<?php

  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions

  $cpf = $_GET["cpf"];//catch the cpf in urli
  $string="";//creat a var

  if (verify_cpf($cpf))  $string = cpf_consult($cpf); //verify the cpf have the right length and call the function that willi return all the information about this cpf
    else{
      header("Location: index.php?err=error_consult");//return to the index page and shown a warning message
    }
?>
    </br></br></br>
<?php
  if(!$string): ?> <!--if string is null this message will be shown -->
  <div class="container">
    <h5 class="card-title text-center">This page is only to show this message!</h5>
    <h6 class="card-subtitle mb-2 text-muted text-center">This CPF does not exist!</h6>
  </div>

<?php else:
?><!--if string isn't null this message will be shown -->
  <div class="container">
    <h5 class="card-title text-center">This page is only to show this message!</h5>
    <h6 class="card-subtitle mb-2 text-muted text-center">The information of CPF in JSON is: <?=$string?></h6>
  </div>

<?php
  endif;
  include("footer.php");
?>
