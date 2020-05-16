<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>
        ADD - Drinks
    </title>
    <script type="text/javascript">
        function notslct() {
            var x = document.forms["drnkch"]["alc"].value;
            var y = document.forms["drnkch"]["mix1"].value;
            var z = document.forms["drnkch"]["mix2"].value;
            if (x == "slct") {
                alert("Must select a valid option.");
                return false;
            }
            else if (y == "slct") {
                alert("Must select a valid option.");
                return false;
            }
            else if (z == "slct") {
                alert("Must select a valid option.");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="header">
        <h1 style="font-size: 50px;">ADD</h1>
        <h1>Automatic Drink Dispenser</h1>
    </div>

    <div class="topnav">
        <li><a href="../index.php">Home</a></li>
        <li><a class="active" href="drinks.php">Drinks</a></li>
        <li><a href="more.php">More</a></li>
        <li class="right"><a href="about.php">About</a></li>
    </div>

    <div class="row">
        <div class="column sidel">
            <h2>Side</h2>
            <p>Select the Alchohol and Mixers you have placed in the machine, one alcohol option
            and two mixer options. Once selected a list of drinks that can be made with these
            options will be presented to you. Simply click the drink and select how many shots of
            alcohol you would prefer and sit back as the ADD dispenses your drink.</p>
        </div>

        <div class="column middle">
            <h2>Input Drink Selection</h2>
            <form name="drnkch" action="drnkload.php" onsubmit="return notslct()" method="POST">
                <select name="alc">
                    <option value="slct" selected>-SELECT-</option>
                    <option value="Rum">Rum</option>
                    <option value="Vodka">Vodka</option>
                    <option value="Gin">Gin</option>
                    <option value="Tequila">Tequila</option>
                    <option value="Whiskey">Whiskey</option>
                    <option value="Peach Schnapps">Peach Schnapps</option>
                </select>
                <br><br>
                <select name="mix1">
                    <option value="slct" selected>-SELECT-</option>
                    <option value="7UP">7UP</option>
                    <option value="Coke">Coke</option>
                    <option value="Cranberry Juice">Cranberry Juice</option>
                    <option value="Ginger Ale">Ginger Ale</option>
                    <option value="Mango Juice">Mango Juice</option>
                    <option value="Orange Juice">Orange Juice</option>
                    <option value="Peach Juice">Peach Juice</option>
                    <option value="Sprite">Sprite</option>
                    <option value="Tonic">Tonic</option>
                </select>
                <br><br>
                <select name="mix2">
                    <option value="slct" selected>-SELECT-</option>
                    <option value="7UP">7UP</option>
                    <option value="Coke">Coke</option>
                    <option value="Cranberry Juice">Cranberry Juice</option>
                    <option value="Ginger Ale">Ginger Ale</option>
                    <option value="Mango Juice">Mango Juice</option>
                    <option value="Orange Juice">Orange Juice</option>
                    <option value="Peach Juice">Peach Juice</option>
                    <option value="Sprite">Sprite</option>
                    <option value="Tonic">Tonic</option>
                </select>
                <br><br>
                <input class="button" type="submit">
            </form>
        </div>

        <div class="column sider">
            <div class="txt">
                <h2>Side</h2>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>
 
</body>

</html>
