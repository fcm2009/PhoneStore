<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Phone Store - Add a phone to the store</title>
</head>
<body>
    <?php
        $db = mysqli_connect("localhost", "root", "hg,i,l,vh");
        if(!$db) {
            die("<h1>Error</h1>
                <h2>Can not connect to the server. Try again later</h2>");
        }

        if(!(mysqli_select_db($db, "ThePhoneStore"))) {
            die("<h1>Error</h1>
                <h2>Can not find the database. Try again later</h2>");
        }

        $query = "insert into phone values('" . $_POST["id"] ."', '" . $_POST["model"] . "', '" . $_POST["color"] . "', " . $_POST["price"] . ", " . ((int) $_POST["touch"]) . ")";
        if(!($result = mysqli_query($db, $query))) {
            die("<h1>Error</h1>
                <p>Bad request. Try again later</p>");
        }

        print("<h1>congratulations</h1>
                <p>You phone has been added to our database</p>");
    ?>
</body>
</html>