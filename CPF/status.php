<?php
  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions
?>
</br>
<h5>Here, you can select a link and see all the information about this actions:</h5>
<nav class="nav flex-column">
  <!--ALL THE LINKS TO SHOWN THE STATUS OF SOME ACTION IN APPLICATION-->
  <!--ALL THE LINKS CALL THE PAGE showStatusServer.php AND PASS WITH PARAMETER
  WHICH INFORMATION THAT USER WANT TO SE-->
  <a class="nav-link active" href="showStatusServer.php?tab=add">Add</a>
  <a class="nav-link" href="showStatusServer.php?tab=update">Update</a>
  <a class="nav-link" href="showStatusServer.php?tab=remove">Remove</a>
  <a class="nav-link" href="showStatusServer.php?tab=consult">Consult</a>
  <a class="nav-link" href="showStatusServer.php?tab=blacklist">Blacklist</a>
  <a class="nav-link" href="showStatusServer.php?tab=list_all">Show All</a>
</nav>

<?php
  include("footer.php");
?>
