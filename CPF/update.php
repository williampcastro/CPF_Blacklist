<?php

  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions

  $cpf = $_GET["cpf"];  //get the string like the page list.php
  $status = $_GET["status"];  //get the string like the page list.php

  cpf_update($cpf,$status); //chanfe the status of cpf that was informed and return to the list.php

?>


<?php  include("footer.php"); ?>
