<?php
 mysql_connect('localhost','akshat','');
 mysql_select_db('crew_data');

 $sql="SELECT statusonoff FROM status";
 

 $result=mysql_query($sql);
 


 echo "<select name='from'>";
 while($row=mysql_fetch_array($result)){
     echo "<option value='" . $row['statusonoff'] ."'>" .$row['statusonoff'] ."</option>";
 }

  echo "</option>"



 ?>