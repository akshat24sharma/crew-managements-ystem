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
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#header-text {
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
    #php1{
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
</style>

<head>
    <div id="header">
        <img src="images.png">
        <div id="header-text">RECENT INFORMATION REPORT</div>
    </div>

</head>

<body>
 <div id="php1">
 <?php
        session_start();
        $name1=$_SESSION['name'];

        mysql_connect('localhost','akshat','');
        mysql_select_db('crew_data');

        $sql="SELECT from_station,destination,crewid ,distance, status, datestart, dateend, timestart, timeend, username, distance*2, crewadd, daterevst, datereven FROM crew WHERE username='$name1'";
        
        $result=mysql_query($sql);
        

        while($row=mysql_fetch_array($result)){
            echo "<p>CREW NAME:".$row['username']."</p>";
            echo "<p>CREW ADDRESS:".$row['crewadd']."</p>";

        }
        ?>
        </div>
  
    
    <table>
        <tr>
            <th>CREW ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>STATUS</th>
            
            <th>SIGNON</th>
            <th>SIGNON DATE</th>
            <th>SIGNON TIME</th>
            <th>SIGNOFF</th>
            <th>SIGNOFF DATE</th>
            <th>SIGNOFF TIME</th>
            <th>DISTANCE</th>
        </tr>
        <?php
        
        $name1=$_SESSION['name'];

        mysql_connect('localhost','akshat','');
        mysql_select_db('crew_data');

        $sql="SELECT from_station,destination,crewid ,distance, datestart, dateend, timestart, timeend, username, distance*2, crewadd, daterevst, datereven, status FROM crew WHERE username='$name1'";
        
        $result=mysql_query($sql);
        

        while($row=mysql_fetch_array($result)){

            
            
            echo "<tr>";
            
            echo "<td>".$row['crewid']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['crewadd']."</td>";
            echo "<td>SIGNON</td>";
            echo "<td>".$row['from_station']."</td>";
            echo "<td>".$row['datestart']."</td>";
            echo "<td>".$row['timestart']."</td>";
            echo "<td> ------</td>";
            echo "<td>-------</td>";
            echo "<td>------</td>";
            echo "<td>".$row['distance']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo  "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>SIGNOFF</td>";
            echo "<td>------</td>";
            echo "<td>------</td>";
            echo "<td>------</td>";
            echo "<td>".$row['destination']."</td>";
            echo "<td>".$row['dateend']."</td>";
            echo "<td>".$row['timeend']."</td>";
            echo "<td>".$row['distance']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo  "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            
            if($row['status']=='at rest'){
            echo "<td>SIGNON</td>";
            echo "<td>".$row['destination']."</td>";
            echo "<td>".$row['daterevst']."</td>";
            echo "<td>".$row['timeend']."</td>";
            echo "<td> ------</td>";
            echo "<td>-------</td>";
            echo "<td>------</td>";
            echo "<td>".$row['distance']."</td>";
            echo "</td>";
            echo "<tr>";
            echo  "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>SIGNOFF</td>";
            echo "<td>------</td>";
            echo "<td>------</td>";
            echo "<td>------</td>";
            echo "<td>".$row['from_station']."</td>";
            echo "<td>".$row['datereven']."</td>";
            echo "<td>".$row['timeend']."</td>";
            echo "<td>".$row['distance*2']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo  "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>REST</td>";
            echo "<td>------</td>";
            echo "<td>------</td>";
            echo "<td>------</td>";
            echo "<td>".$row['from_station']."</td>";
            echo "<td>".$row['datereven']."</td>";
            echo "<td>".$row['timeend']."</td>";
            echo "<td>".$row['distance*2']."</td>";
            echo "</tr>";

            }


            
            



        }
?>




        
    </table>
    <br>
     <button id="back" type="submit" formaction="updateoff.php"><a
                                    href="menu.html">BACK TO MAIN MENU</a></button>

</body>

</html>