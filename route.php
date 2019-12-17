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
    
    #biodata {
        text-align: center;
        font-size: 40px;
        font-family: 'Courier New', Courier, monospace;
        position: relative;
        border: 2px solid black;
        border-radius: 20px;
        box-sizing: border-box;
        top: 4cm;
        background-color: lightblue;
        border-left-width: 10px;
    }
    
    #body {
        margin-left: 5cm;
        margin-right: 5cm;
    }
    
    input {
        width: 30%;
        height: 40px;
        border-bottom: 2px solid black;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        border-radius: 20px;
        font-size: 25px;
        font-family: 'Courier New', Courier, monospace;
    }
    
    html {
        background-color: rgb(62, 139, 165);
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
</style>


<head>
    <div id="header">
        <img src="images.png">
        <div id="header-text">ROUTR CREATION</div>
    </div>

</head>



    <div id="body">

        <body>
        
            <div id="biodata">
                <form method="POST" action="crewid.php">
                    From :<br>
                    <div id="username1"><input type="text" name="from" size="55"></div>
                    Destination:
                    <br>
                    <div id="password1"><input type="text" name="destination" maxlength="12"></div>
                    Distance:<br>
                    <div id="distance"><input type="text" name="distance" size="55"> </div>
                    DOJ (START):<br>
                    <div id="datestart"><input type="date" name="datestart"> </div>
                    DOJ (END): <br>
                    <div id="dateend"><input type="date" name="dateend"> </div>
                    START TIME: <br>
                    <div id="timestart"><input type="time" name="timestart"> </div>
                    END TIME: <br>
                    <div id="timeend"><input type="time" name="timeend"> </div>
                    DOJ(REV. START):<br>
                    <div id="daterevst"><input type="date" name="daterevst"> </div>
                    DOJ(REV. END):<br>
                    <div id="datereven"><input type="date" name="datereven"> </div>




                    

                    <div id="submit"><input type="submit" name="submit" value = SAVE> </div>
                    <br>
                                        <button id="back" type="submit" formaction="freight.html"><a href="freight.html">BACK TO FREIGHT MENU</a></button>



                </form>
            </div>

        </body>


    </div>



</html>