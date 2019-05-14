SOME DESCRIPTION ABOUT THE PAGES AND PATHS OF THIS PROJECT

<----------header.php and footer.php----------->
have all the initial and final HTML and PHP structure of the pages need


<----------index.php----------->
have the structure for the user add the cpf number and status
on database and call the file "add.php", to execute the function add,
when the button "Add" is clicked


<----------add.php----------->
this file call the function add and add the cpf inside databes


<----------message_index.php and message_list.php----------->
have all the error and warning messagens to show for the user


<----------list.php----------->
have the structure for the user see all the CPF inside database,
and this page call the function "cpf_show_all()". Here the user have two options:

-Remove/Insert CPF in Blacklist: this option call then page "remove.php" and execute the function that do this, and return automaticaly for the page "list.php"

-Update Status of the CPF:this option call then page "update.php" and execute the function that do this, and return automaticaly for the page "list.php"

All this options inform for the user was that ocuured in the page.

<-----------blacklist.php----------->
have the same ideia of the page list.php, have the structure for the user see all the CPF that satys inside blacklist,
and this page call the function "cpf_show_by_status()", and that status of CPF need to be BLOCK.

<-----------status.php----------->
have some options for the user what happened in all action that the sistem offer to the user. This page can do when he call the pages "showStatusServer.php". And the page"showStatusServer.php" need to call the page "logic_showStatusServer.php" to show the all the information, this page is only to turn the compreension easily to the administrator and how him will understand how the logic works.



<-----------------------------PATHS------------------------------->

<--------------CSS---------------->
have all the files that can change the visual of pages

<--------------Files_of_server---------------->
have all the files about status of each one action of the application

<--------------img---------------->
have a favincon

<--------------js---------------->
have all files in js format that the pages need to use, like a the file "maskCPF.js" that control the format of cpf
