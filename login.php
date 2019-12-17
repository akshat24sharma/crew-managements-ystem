<?php
 $name=$_POST['username1'];
 $pass=$_POST['password1'];

 $con=mysql_connect("localhost","akshat","");
 if(!$con){
     die("could not connect" .mysql_error());

 }

 mysql_select_db("crew_data",$con);
 if(isset($_POST['']))

 $query="INSERT INTO crew(username,password) VALUES('$name','$pass')";
 if(!mysql_query($query,$con))
 {
     die("error in inserting record" .mysql_error());
 }
 else{
     echo "data inserted";
     echo "<br> <a href='login.html'>back to main page</a>";
     header ('location:login.html');
 }

?>
