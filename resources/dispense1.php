<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>
        ADD - Dispense
    </title>
    
    <style>
        /* Center the loader */
        #loader {
          position: absolute;
          left: 50%;
          top: 50%;
          z-index: 1;
          width: 150px;
          height: 150px;
          margin: -75px 0 0 -75px;  
          border: 16px solid #333;
          border-radius: 50%;
          border-top: 16px solid #ffd51a;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }

        /* Add animation to "page content" */
        .animate-bottom {
          position: relative;
          -webkit-animation-name: animatebottom;
          -webkit-animation-duration: 1s;
          animation-name: animatebottom;
          animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
          from { bottom:-100px; opacity:0 } 
          to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom { 
          from{ bottom:-100px; opacity:0 } 
          to{ bottom:0; opacity:1 }
        }

        #myDiv {
          display: none;
          text-align: center;
        }
    </style>
    
    <script>
        var tim;

        function runloadr() {
          tim = setTimeout(shwpg, 10000);
        }

        function shwpg() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("myDiv").style.display = "block";
        }
    </script>
    
</head>

<body onload="runloadr()" style="margin:0;">
    <div class="header">
        <h1 style="font-size: 50px;">ADD</h1>
        <h1>Automatic Drink Dispenser</h1>
    </div>

    <div class="topnav" style="background-color:#ffd51a;">
        <li><a href="../index.php">Home</a></li>
        <li><a href="drinks.php">Drinks</a></li>
        <li><a href="more.php">More</a></li>
        <li class="right"><a href="about.php">About</a></li>
    </div>

    <div class="row">
        <div class="column sidel">
            <h2></h2>
            <p></p>
        </div>

        <div class="column middle">
            <h2>Dispensing Drink 1</h2>
            <p>
               <?php
                    echo "dispensing...";
                ?>
                <br>
                <?php
                    echo shell_exec("/var/www/html/resources/sendm1.py");
                ?> 
            </p>
            <div id="loader"></div>
            <div style="display:none;" id="myDiv" class="animate-bottom">
              <h2>Complete!</h2>
              <p>Enjoy your drink :)</p>
            </div>
        </div>

        <div class="column sider">
            <h2></h2>
            <p></p>
        </div>
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>
 
</body>

</html>
