<?php
  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions

  $tab = $_GET["tab"]; //get which tab the user selected

  $datas_file = array(); //creat a array

  $datas_file = show_file_txt($tab); //catch all the Information about the tab that informed for the user
?>
  </p>
  <!--When this button is pressed, the user will return fot the page status.php-->
  <form action="status.php">
    <input type="submit" class="btn btn-primary btn-sm" value="Return Status Server"/>
  </form>
  </p>

  <!--by according the tab that was selected, will be shown all the Information about this tab-->
<?php
  if($tab=="add"):?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Information about action Add</th>
        </tr>
      </thead>
    <?php include("logic_showStatusServer.php")?>
    </table>
<?php
  elseif($tab=="update"):?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Information about action Update</th>
        </tr>
      </thead>
    <?php include("logic_showStatusServer.php") ?>
    </table>
<?php
  elseif($tab=="remove"):?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Information about action Remove</th>
        </tr>
      </thead>
    <?php include("logic_showStatusServer.php") ?>
    </table>
<?php
  elseif($tab=="consult"):?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Information about action Consult</th>
        </tr>
      </thead>
    <?php include("logic_showStatusServer.php") ?>
    </table>
<?php
  elseif($tab=="blacklist"):?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Information about access tab Blacklist</th>
        </tr>
      </thead>
    <?php include("logic_showStatusServer.php") ?>
    </table>
<?php
  elseif($tab=="list_all"):?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Information about access tab List</th>
        </tr>
      </thead>
    <?php include("logic_showStatusServer.php") ?>
    </table>
<?php
  endif;
  include("footer.php");
?>
