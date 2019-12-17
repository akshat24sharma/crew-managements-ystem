<html>
<style>
    #header {
        position: relative;
        text-align: center;
        width: 100%;
        background-color: lightblue;
        border: 0px;
        border-radius: 20px;
    }
    
    html {
        background-color: rgb(62, 139, 165);
    }
    
    #phpcode {
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-size: 40px;
        border: 2px solid black;
        border-radius: 20px;
        box-sizing: border-box;
        top: 4cm;
        background-color: lightblue;
        border-left-width: 10px;
    }
    body{
        text-align: center;
        font-size: 40px;
        font-family: 'Courier New', Courier, monospace;
        position: relative;
        border: 2px solid black;
        border-radius: 20px;
        box-sizing: border-box;
        background-color: lightblue;
        border-left-width: 10px;
    }
</style>

</div>

<head>
    <div id="header">
        <img src="images.png">

    </div>

</head>

<div id="phpcode">
<?php
 session_start();
 $name=$_SESSION['name'];
 $con=mysql_connect("localhost","akshat","");
 if(!$con){
     die("could not connect" .mysql_error());

 }

 mysql_select_db("crew_data",$con);

 $query="UPDATE crew SET status='at rest'";
 if(!mysql_query($query))
 {
     die("error in inserting record" .mysql_error());
 }
 else{
     
     echo "CREW AT REST <br>";
 }
 $sql="SELECT status FROM crew WHERE username='$name'";
 $frm="SELECT from_station FROM crew WHERE username='$name'";

 

 $result=mysql_query($sql);
 $res1=mysql_query($frm);
 


 
 while($row=mysql_fetch_array($result)){
     echo "CURRENT STATUS OF $name:{$row['status']}";
 }
 while($row=mysql_fetch_array($res1)){
    echo "({$row['from_station']})";
    
}

  echo "</option>";
session_destroy();
?>
</div>
 <body>
            <br>
            <br>

            <button id="button-signoff" type="submit" formaction="updateoff.php"><a href="login.html">LOG OUT</a></button>


        </body>

</html>