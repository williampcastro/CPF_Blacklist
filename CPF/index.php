<?php
  include("header.php"); //include all the structureof the header
  include("functions.php");//include all the functions
  include("message_index.php");//include the messages that will be shown for the user
 ?>

  <body>
    <p/>
    <div id="form_add"class="container-fluid" style=""> <!--have the structure for the user add some cpf-->
      <h5 id="title">Register a CPF </h5>
      <form action="add.php">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">CPF:</label>
          <div clas="col-sm-10">
            <input type="text" id="CPF_num" name="CPF_num" class="form-control form-control-sm" placeholder="000.000.000-00"/>
          </div>
        </div>

        <div class="form-group row ">
          <label class="col-sm-2 col-form-label">Status:</label>
          <div clas="col-sm-10">
            <select class="form-control form-control-sm" name="CPF_status" autofocus="Status">
              <option value="BLOCK" selected>Block</option>
              <option value="FREE">Free</option>
            </select>
          </div>
        </div>
        <!--call the page add.php to insert the cpf in database-->
        <div id="btn_add" class="form-group row form-control-sm col-sm-10">
          <input type="submit" class="btn btn-primary btn-sm" value="Add"/>
        </div>
      </form>
    </div>

  </body>

<?php include("footer.php");?>
