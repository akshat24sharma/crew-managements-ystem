<?php
 $name=$_POST['crewname'];
 $add=$_POST['crewadd'];


 $con=mysql_connect("localhost","akshat","");
 if(!$con){
     die("could not connect" .mysql_error());

 }

 mysql_select_db("crew_data",$con);

 $query="UPDATE crew set crewname='$name', crewadd= '$add' WHERE username= '$name'";
 if(!mysql_query($query,$con))
 {
     die("error in inserting record" .mysql_error());
 }
 else{
     header('location:route.php');
 }

?>