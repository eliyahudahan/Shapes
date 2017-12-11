<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css" />
        <!-- <link rel="stylesheet" type="text/css" href="shapestyle.css" />-->
        <link rel="stylesheet" type="text/css" href="squarestyle.css" />
        <title>חישוב שטח צורות</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>

            function squareareacalculate(square) {

                widthsquare = square.clientWidth;
                heightsquare = square.clientHeight;
                $.get("shapesarea.php?widthsquare=" + widthsquare + "&heightsquare=" + heightsquare, function (data) {
                    document.getElementById("squarearea").innerHTML = data;
      
                });
            }



        </script>

    </head>
    <body>

        <h3 id='squarearea'   >הקש על אחת הצורות ותקבל את שטחה</h3>
        <div id='square'  onclick="squareareacalculate(this);"></div>
        <br>
        <div id='secondsquare' onclick="squareareacalculate(this);" ></div>
        <br>
        <div id='rectangle' onclick="squareareacalculate(this);" ></div>
        <br>
        <div id="thirdsquare" onclick="squareareacalculate(this);"></div>
    </body>
</html>
