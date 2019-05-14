<?php

  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions

  $cpf = $_GET["CPF_num"]; //get the string like the user was typed, with characters mask
  $status = $_GET["CPF_status"]; //get the status of CPF that informed

  if (verify_cpf($cpf)) cpf_add($cpf,$status); //verify if cpf have a right length
  else header("Location:index.php?err=error_index");//isn't have a right length, return the page index and show a message



  include("footer.php"); //include all the structure of the footer
