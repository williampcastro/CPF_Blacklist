<?php
// all the functions for connection with db, change, verify and manipulates strings, control date,
// create files and show it
//
//
//

//connection with database
function connection(){
  //var with datas of database
  $server = "localhost";
  $user = "root";
  $password = "root";
  $database = "cpfdb";

  // Create connection with db
  $conn = mysqli_connect($server, $user, $password,$database);

  // Check connection with db
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error); //execute this is the connection failed
  }

  return $conn; //
}

//manipulates the string cpf, to save in db with correct format
function cpf_Explode($cpf){

  $cpf_1 = explode('-',$cpf,2); //split the sting $cpf in 3 parts by the symbol'-'
  // and put all the 3 parts in array $cpf_1

  $cpf_2 = explode('.',$cpf_1[0],3);//split the first part of the array $cpf_1
  // in other 4 parts, separating the numbers by the symbol".", an put all the parts in the array $cpf_2

  return $cpf_2[0].$cpf_2[1].$cpf_2[2].$cpf_1[1]; // need to end...

}

//only change the string STATUS
function change_status($status){
  if($status=="BLOCK") return "FREE";
    else return "BLOCK";
}

//verify the length of string CPF, for validate this before search some CPF
function verify_cpf($cpf){
  if (strlen($cpf) == 14) return true;
  else return false;
}

//transform the string that was read in bd and insert the characteres('.'' '-') between numbers of CPF
function cpf_change_string($cpf){

  $arrCpf = str_split($cpf, 3);
  $cpf_new =$arrCpf[0].".".$arrCpf[1].".".$arrCpf[2]."-".$arrCpf[3];
  return $cpf_new;

}

//is to manipule the strings about time and date
function time_server(){

    date_default_timezone_set("America/Sao_Paulo");

    $arr_time = array();

    $year=date("Y");
    $month=date("M");
    $day=date("d");

    $hour=date("H");
    $minute=date("i");
    $second=date("s");

    $string_time = "".$hour.":".$minute.":".$second." - ".$day."/".$month."/".$year;

    return $string_time;

}

// controls and register all the actions in the page and save the data in file .txt
function status_server($action_string,$status_operation,$cpf){

  $time_string = time_server();
  if($cpf!=false)$cpf = cpf_change_string($cpf);

  if($action_string=="add"){
    if($status_operation=="success")
      $info ="The CPF:".$cpf." was added! (".$time_string.")\r\n";
    else
      $info ="The user tried to add this CPF:".$cpf." that already exists! (".$time_string.")\r\n";

    $file = fopen("./Files_of_server/add.txt","a");
    fwrite($file,$info);
    fclose($file);
  }

  if($action_string=="remove"){
    if($status_operation=="success")
      $info ="The CPF:".$cpf." was removed! (".$time_string.")\r\n";
    else
      $info ="The CPF:".$cpf." can't removed! (".$time_string.")\r\n";

    $file = fopen("./Files_of_server/remove.txt","a");
    fwrite($file,$info);
    fclose($file);
  }

  if($action_string=="update"){
    if($status_operation=="success")
    {
      $info ="The CPF:".$cpf." was updated! (".$time_string.")\r\n";
    }

    else
      $info ="The CPF:".$cpf." can't updated! (".$time_string.")\r\n";

    $file = fopen("./Files_of_server/update.txt","a");
    fwrite($file,$info);
    fclose($file);
  }

  if($action_string=="consult"){
    if($status_operation=="success")
    {
      cpf_change_string($cpf);
      $info ="The CPF:".$cpf." was consulted! (".$time_string.")\r\n";
    }

    else
      $info ="The CPF:".$cpf." can't consulted! (".$time_string.")\r\n";

    $file = fopen("./Files_of_server/consult.txt","a");
    fwrite($file,$info);
    fclose($file);
  }

  if($action_string=="list"){
    if($status_operation=="success")
    {
      $info = "All the CPF's was listed! (".$time_string.")\r\n";
    }
    else{
      $info ="All the CPF's can't listed! (".$time_string.")\r\n";
    }
    $file = fopen("./Files_of_server/list_all.txt","a");
    fwrite($file,$info);
    fclose($file);
  }

  if($action_string=="blacklist"){
    if($status_operation=="success")
    {
      $info = "All the CPF's of the blacklist was listed! (".$time_string.")\r\n";
    }
    else{
      $info ="All the CPF's of the blacklist can't listed! (".$time_string.")\r\n";
    }
    $file = fopen("./Files_of_server/blacklist.txt","a");
    fwrite($file,$info);
    fclose($file);
  }

}

//execute and show the file .txt
function show_file_txt($tab){

  $datas_file = array();

  if($tab=="add"){

    $filename="./Files_of_server/add.txt";

    if( !file_exists($filename)){
      $file = fopen("./Files_of_server/add.txt","a");
      fwrite($file,"");
      fclose($file);
    }

    $file = fopen("./Files_of_server/add.txt","r");

    while (!feof($file)) {
      $line = fgets($file,1000);
      array_push($datas_file,$line);
    }

  }
  elseif($tab=="update"){

    $filename="./Files_of_server/update.txt";

    if( !file_exists($filename)){
      $file = fopen("./Files_of_server/update.txt","a");
      fwrite($file,"");
      fclose($file);
    }

    $file = fopen("./Files_of_server/update.txt","r");

    while (!feof($file)) {
      $line = fgets($file,1000);
      array_push($datas_file,$line);
    }
  }
  elseif($tab=="remove"){

    $filename="./Files_of_server/remove.txt";

    if( !file_exists($filename)){
      $file = fopen("./Files_of_server/remove.txt","a");
      fwrite($file,"");
      fclose($file);
    }

    $file = fopen("./Files_of_server/remove.txt","r");

    while (!feof($file)) {
      $line = fgets($file,1000);
      array_push($datas_file,$line);
    }
  }
  elseif($tab=="consult"){

    $filename="./Files_of_server/consult.txt";

    if( !file_exists($filename)){
      $file = fopen("./Files_of_server/consult.txt","a");
      fwrite($file,"");
      fclose($file);
    }

    $file = fopen("./Files_of_server/consult.txt","r");

    while (!feof($file)) {
      $line = fgets($file,1000);
      array_push($datas_file,$line);
    }
  }
  elseif($tab=="blacklist"){

    $filename="./Files_of_server/blacklist.txt";

    if( !file_exists($filename)){
      $file = fopen("./Files_of_server/blacklist.txt","a");
      fwrite($file,"");
      fclose($file);
    }

    $file = fopen("./Files_of_server/blacklist.txt","r");

    while (!feof($file)) {
        $line = fgets($file,1000);
        array_push($datas_file,$line);
      }
    }
  elseif($tab=="list_all"){

    $filename="./Files_of_server/list_all.txt";

    if( !file_exists($filename)){
      $file = fopen("./Files_of_server/list_all.txt","a");
      fwrite($file,"");
      fclose($file);
    }

    $file = fopen("./Files_of_server/list_all.txt","r");

    while (!feof($file)) {
      $line = fgets($file,1000);
      array_push($datas_file,$line);
    }
  }
  return $datas_file;
}


// all the functions that afects the database
//
//
//
//

//insert datas about cpf in db
function cpf_add($cpf, $status){

  $cpf = cpf_Explode($cpf); //string to split in function explode

  if(!cpf_consult($cpf)){
    $conn = connection();
    $query = "INSERT INTO cpf(CPF_num,CPF_status) VALUES('{$cpf}','{$status}')";

    if (mysqli_query($conn,$query)){
        status_server("add","success",$cpf);
        header("Location: list.php?added=true");
      }
    mysqli_close($conn);
  }

  else{
    status_server("add","failed",$cpf);
    return header("Location: index.php?added=false");
  }

}

//remove a specific CPF from db
function cpf_remove($cpf){

  $conn = connection();
  $query = "DELETE FROM cpf where CPF_num = '{$cpf}'";

  $result = mysqli_query($conn,$query);

  json_encode($result);

  if($result)
  {
    status_server("remove","success",$cpf);
    header("Location: list.php?removed=true");
  }
  else
  {
    status_server("remove","failed",$cpf);
    echo "Remove error!";
  }

  mysqli_close($conn);

}

//changes the status of a specific CPF
function cpf_update($cpf,$status){

  $status = change_status($status);

  $conn = connection();
  $query = "UPDATE cpf SET CPF_status='{$status}' where CPF_num = '{$cpf}'";

  $result = mysqli_query($conn,$query);

  if($result){
    status_server("update","success",$cpf);
    header("Location: list.php?changed=true&cpf=".$cpf."&status=".$status);
  }
  else{
    status_server("update","failed",$cpf);
    echo "Update error!";
  }

  mysqli_close($conn);

}

//return only one CPF that was consulted in a JSON format
function cpf_consult($cpf){

  $cpf = cpf_Explode($cpf);

  $conn = connection();
  $query = "SELECT * FROM cpf where CPF_num = '{$cpf}'";

  $result = mysqli_query($conn,$query);

  if (mysqli_num_rows($result)==1){
    status_server("consult","success",$cpf);
    $result = mysqli_fetch_assoc($result);
    return json_encode($result)."<br/>"; //Only verification
  }
  else{
    status_server("consult","failed",$cpf);
    return 0;
  }

  mysqli_close($conn);

}

//reutn all datas about cpf in array format
function cpf_show_all(){

  $cpfs = array();

  $query =  "SELECT * FROM cpf";
  $conn = connection();

  $result = mysqli_query($conn,$query);

  //connection verificaion
  if (mysqli_num_rows($result)>0){
    status_server("list","success",false);
    while($cpf = mysqli_fetch_assoc($result)){
      array_push($cpfs, $cpf);
    }
  }
  else{
    status_server("list","failed",false);
  }

  mysqli_close($conn);

  json_encode($cpfs);

  return $cpfs;
}

//return a group of CPF that status is BLOCK
function cpf_show_by_status(){

   $cpfs = array();

   $query =  "SELECT * FROM cpf WHERE CPF_status='BLOCK'";
   $conn = connection();

   $result = mysqli_query($conn,$query);

   //connection verificaion
   if (mysqli_num_rows($result)>0){
     status_server("blacklist","success",false);
     while($cpf = mysqli_fetch_assoc($result)){
       array_push($cpfs, $cpf);
     }
   }

   else status_server("blacklist","failed",false);

   mysqli_close($conn);

   json_encode($cpfs);

   return $cpfs;
 }
