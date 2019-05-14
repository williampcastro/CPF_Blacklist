<?php

  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions

  $cpf = $_GET["cpf"]; //get the string like the page list.php

  cpf_remove($cpf); //remove the cpf informed and return to the list.php

  include("footer.php");
