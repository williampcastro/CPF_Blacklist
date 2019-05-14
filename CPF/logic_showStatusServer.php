<!--all the structure to shown the information about server-->
<tbody>
<tr>
<?php
if($datas_file[0]==""):
?> <td>No information yet!</td>
<?php
else: foreach($datas_file as $line):?>
  <td> <?=$line?></td>
  </tr>
</thead>
<?php endforeach;
    endif;
?>
</tbody>
