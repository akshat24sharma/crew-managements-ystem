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
    
    #php {
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
    
    #button {
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        position: relative;
        top: 40px;
        size: 40px;
    }
    
    body {}
    #from{
        font-size: 30px;
        width: 150px;
    }
    #destination{
        font-size: 30px;
        width: 150px;
    }
</style>

<head>
    <div id="header">
        <img src="images.png">
    </div>

</head>
<div id="php">
    <?php
    session_start();
    $name=$_SESSION['name'];
 mysql_connect('localhost','akshat','');
 mysql_select_db('crew_data');

 $sql="SELECT from_station FROM crew WHERE username='$name'";
 $sql2="SELECT destination FROM crew WHERE username='$name'";

 $result=mysql_query($sql);
 $result2=mysql_query($sql2);

 echo "STARTING STATION:";
 
 echo "<select name='from' id='from'>";
 while($row=mysql_fetch_array($result)){
     echo "<option value='" . $row['from_station'] ."'>" .$row['from_station'] ."</option>";
 }


 echo "</select>";

 echo "<br><br>";
 echo "DESTINATION STATION:";

 echo "<select name='destination' id='destination'>";
 while($row=mysql_fetch_array($result2)){
     
     echo "<option value='" . $row['destination'] ."'>" .$row['destination'] ."</option>";
 }
 echo "</select>";


 
?>

</div>

<body>
    <div id="button">
        <button><a href="freight.html">GO BACK TO FREIGHT MENU</a> </button>
        <br>
        <br>
        <br>
        <button><a href="route.php.html">GO BACK TO ROUTE ENTRY</a> </button>
        <br>
        <br>
        <br>
        <button type="submit" name="submit" formaction="updateon.php"><a href="updateon.php">SIGNON</a></button>

    </div>

</body>

</html>