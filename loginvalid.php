<?php
 session_start();

 $name=$_POST['username1'];
 $pass=$_POST['password1'];
 $_SESSION["name"]=$name;



 $con=mysql_connect("localhost","akshat","");
 if(!$con){
     die("could not connect" .mysql_error());

 }

 mysql_select_db("crew_data",$con);

 $query=mysql_query("SELECT * FROM crew WHERE username = '$name' and password = '$pass'");
 $row=mysql_fetch_array($query);
 if($row['username']== $name && $row['password']== $pass){
     echo "login sucessful" .$row['username'];
     header('location:menu.html');
 }
 else{
     echo"login failed";
     echo $_SESSION["name"];
 }

?>