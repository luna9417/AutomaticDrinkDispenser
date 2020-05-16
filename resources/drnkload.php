<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>
        ADD - Dispense
    </title>
    
</head>

<body>
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
            <h2>Side</h2>
            <p></p>
            <form action="dispense1.php">
                <input class="button" type="submit" value="Dispense Drink 1">
            </form>
        </div>

        <div class="column middle">
            <h2>Drink List</h2>
            <h4>You chose:</h4>
            <p style= "font-weight: bold;">
				
                <?php echo $_POST["alc"]; ?> <br>
                <?php echo $_POST["mix1"]; ?> <br>
                <?php echo $_POST["mix2"]; ?>
            </p>
            <p style= "font-weight: bold;">The resulting drinks that can be dispensed! <br></p>
			<p style= "font-style:italic; font-weight: bold;">
				<?php
					$a = $_POST["alc"];
					$m1 = $_POST["mix1"];
					$m2 = $_POST["mix2"];
                    $servername = "localhost";
                    $username = "root";
                    $password = "raspj6F@2berry";
                    $dbname = "autodd";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    } 
                    
                    $sql = "SELECT drinkname, alcohol, mixer FROM drinklog WHERE alcohol = '$a' AND mixer = '$m1' OR alcohol = '$a' AND mixer = '$m2'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo " - Name: " . $row["drinkname"]. " <br>Made with: " . $row["alcohol"]. " and " . $row["mixer"]."<br><br>";
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                ?>
			</p>
        </div>

        <div class="column sider">
            <h2>Side</h2>
            <p></p>
            <form action="dispense2.php">
                <input class="button" type="submit" value="Dispense Drink 2">
            </form>
            
        </div>
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>
 
</body>

</html>
