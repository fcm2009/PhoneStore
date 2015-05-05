<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Phone Store - modify a phone to the store</title>
</head>
<body>
    <?php
        $db = mysqli_connect("localhost", "a4595078_root", "a4595078_root");
        if(!$db) {
            die("<h1>Error</h1>
                <h2>Can not connect to the server. Try again later</h2>");
        }

        if(!(mysqli_select_db($db, "a4595078_db"))) {
            die("<h1>Error</h1>
                <h2>Can not find the database. Try again later</h2>");
        }

        $query = "update phone set model = '" . $_POST["model"] . "', color = '" . $_POST["color"] . "', price = " . $_POST["price"] . ", touch = " . ((int) $_POST["touch"]) . " where id = '" . $_POST["id"] . "';";
        if(!($result = mysqli_query($db, $query))) {
            die("<h1>Error</h1>
                <h2>Bad request. Try again later</h2>");
        }

        print("<h1>congratulations</h1>
                <p>Your changes has been applied to our database</p>");
    ?>
</body>
</html>