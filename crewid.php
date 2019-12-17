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
    #php{
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
    #button{
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        position: relative;
        top: 40px;
        size: 40px;

</style>

<head>
    <div id="header">
        <img src="images.png">
    </div>

</head>
<div id="php">
<?php
 session_start();
 $from=$_POST['from'];
 $to=$_POST['destination'];
 $dis=$_POST['distance'];
 $datest=$_POST['datestart'];
 $dateen=$_POST['dateend'];
 $timest=$_POST['timestart'];
 $timeen=$_POST['timeend'];
 $daterev1=$_POST['daterevst'];
 $daterev2=$_POST['datereven'];
 $sum=$from.$to;
 $num= rand(0,9);
 $number=700;
 $name1=$_SESSION["name"];
 $res=$sum."700".$num;
 echo "FROM STATION: ".$from."<br>";
 echo "DESTINATION: ".$to."<br>";
 echo "CREW ID:".$sum."700".$num."<br>";
 $con=mysql_connect("localhost","akshat","");
 if(!$con){
     die("could not connect" .mysql_error());

 }

 mysql_select_db("crew_data",$con);
 


 $query="UPDATE crew set from_station='$from',destination='$to',crewid='$res' ,distance='$dis', datestart='$datest', dateend='$dateen', timestart='$timest', timeend='$timeen', daterevst='$daterev1', datereven='$daterev2' WHERE username='$name1'";
 
 if(!mysql_query($query,$con))
 {
     die("error in inserting record" .mysql_error());
 }
 else{
     
     echo "<br> <a href='login.html'>LOG OUT</a>";
     
    

 }
 
?>
</div>
 <body>
     <div  id="button">
    <button><a href="freight.html">GO BACK TO FREIGHT MENU</a> </button>
    <br>
    <br>
    <br>
    <button><a href="route.php.html">GO BACK TO ROUTE ENTRY</a> </button>
    <br>
    <br>
    <br>
    <button><a href="updateon.php">SIGN ON</a> </button>


    
</div>


</body>

</html>

