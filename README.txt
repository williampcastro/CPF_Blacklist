Welcome to the CPF Blacklist application!

observation: the local server was used is WampServer

To use the application, you need to do this steps:

1-Import the file "cpfdb.sql" for you database. This file is inside path "DATABASE";

2-Verify if the data of you database is the same of this:

  $server = "localhost";
  $user = "root";
  $password = "root";
  $database = "cpfdb";,

  If some name that's here, not is the same that yours, you need to change
  it in the file "functions.php", at the first function in the file,
  the function "connection()", on line 9, the datas that is not equal that yours.

3- After import the database "cpfdb" and configure the function "connection()",
you can copy all the files inside path "CPF" for your local server.

4- Now, you can run it in your local server.


IF YOU WIIL WANT TO EXECUTE SOME TESTS, READ THE FILE "TESTS.txt"
